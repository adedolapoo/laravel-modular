<?php namespace Modules\Referrals\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentReferral extends RepositoriesAbstract implements ReferralInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getForDataTable()
    {
        $query = $this->model
            ->leftJoin('users', 'users.id', '=', 'referrals.referral_user_id')
            ->select([
                'referrals.id',
                'users.first_name as user_first_name',
                'users.last_name as user_last_name',
                'referrals.first_name',
                'referrals.last_name',
                'referrals.email',
                'referrals.phone',
                'referrals.referral_user_id',
            ]);

        return $query;
    }

}
