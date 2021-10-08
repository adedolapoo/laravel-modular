<?php namespace Modules\Settings\Http\Controllers;

use Dingo\Api\Contract\Http\Request;
use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Settings\Repositories\SettingInterface as Repository;

class SettingsApiController extends BaseApiController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function getAll(Request $request)
    {
        try {
            $settings = $this->repository->all();
            return $this->response->item($settings, $this->getTransformer())->setStatusCode(200);
        } catch (\Exception $e) {
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

    public function sendTestMail()
    {
        try{
            \Mail::send('settings::_test_email', [], function ($m) {
                $email = request()->get('test_email');
                $from_address = config('myapp.mail_from_address');
                $from_name = config('myapp.mail_from_name');
                $m->from($from_address,$from_name);
                $m->to($email)->subject('Test email from '.$from_name.' website');
            });
            return [
                'response'=>'success',
                'message'=>'Email successfully sent to '.request()->get('test_email')
            ];
        }
        catch (\Exception $e){
            return [
                'response'=>'error',
                'message'=>$e->getMessage()
            ];
        }

    }

}
