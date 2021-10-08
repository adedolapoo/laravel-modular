<?php namespace Modules\Referrals\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\Core\Traits\ApiModelTrait;

class Referral extends Base {

    use PresentableTrait, ApiModelTrait;

    protected $presenter = 'Modules\Referrals\Presenters\ModulePresenter';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'referral_user_id'
    ];

    public $attachments = ['image'];

}
