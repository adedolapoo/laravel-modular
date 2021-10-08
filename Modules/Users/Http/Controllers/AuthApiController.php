<?php namespace Modules\Users\Http\Controllers;

use GuzzleHttp\Client;
use Laravel\Socialite\Facades\Socialite;
use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Users\Http\Requests\LoginRequest;
use Modules\Users\Http\Requests\RegisterFormRequest;
use Modules\Users\Repositories\UserInterface;
use Modules\Users\Services\UserRegistration;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthApiController extends BaseApiController {

    public function login(LoginRequest $request)
    {
        try{
            $email = $request->email;
            $password = $request->password;
           if(!$token = JWTAuth::attempt(['login'=> $email, 'password' => $password])){
               throw new \Exception('Invalid Credentials');
           }
            return $this->respondWithToken($token);
        }catch(\Exception $e){
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

    public function getLinkedinAccessToken()
    {
        try {
            $data = request()->all();

            $data['client_secret'] = config('services.linkedin.client_secret');

            $data['client_id'] = config('services.linkedin.client_id');

            $data['grant_type'] = "authorization_code";

            $client = new Client();

            $url = "https://www.linkedin.com/oauth/v2/accessToken";

            $response = $client->request("POST", $url, ['form_params'=>$data]);

            return $response->getBody();

        }catch(\Exception $e){
            $this->response->errorUnauthorized($e->getMessage());
        }

    }

    public function socialLogin(UserInterface $user_repository, $type)
    {
        try{
            $token = request('token');

            $form = request('form');

            $form = empty($form) ? 'register' : $form;

            $social_user = Socialite::driver($type)->userFromToken($token);

            if(empty($social_user)) throw new \Exception('Invalid login');

            $user = $user_repository->findByCredentials(['login'=> $social_user->getEmail()]);

            if(empty($user) && $form == 'register'){
                list($last_name, $first_name) = explode(' ',$social_user->getName());
                $user = app(UserRegistration::class)->register([
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $social_user->getEmail(),
                    'password' => $first_name,
                    'group' => 'Talent',
                ]);
            }

            if(!$token = JWTAuth::attempt(['user' => $user])){
                throw new \Exception('Invalid Credentials');
            }

            return $this->respondWithToken($token);
        }catch(\Exception $e){
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

    public function register(RegisterFormRequest $request)
    {
        try {
            $data = $request->all();
            app(UserRegistration::class)->register($data);
            return $this->response->created();
        }catch(\Exception $e){
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

    protected function respondWithToken($token)
    {
        $tokenReponse = new \Stdclass;

        $tokenReponse->token = $token;
        $tokenReponse->token_type = 'bearer';
        $tokenReponse->expires_in = JWTAuth::factory()->getTTL();

        return $this->response->item($tokenReponse, $this->getTransformer())->setStatusCode(200);
    }

}
