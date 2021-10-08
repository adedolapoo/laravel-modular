<?php namespace Modules\Referrals\Http\Controllers;

use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Referrals\Emails\ReferralEmail;
use Modules\Referrals\Repositories\ReferralInterface as Repository;
use Ramsey\Uuid\Uuid;

class ReferralsApiController extends BaseApiController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function store()
    {
        try {
            $data = request()->all();
            $user = $this->auth->user();
            $data['referral_user_id'] = $user->id;
            $referral = $this->repository->create($data);

            \Mail::to($referral->email)->send(new ReferralEmail($user));

            return $this->response->item($referral, $this->getTransformer());
        } catch (\Exception $e) {
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

}
