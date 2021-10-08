<?php namespace Modules\Lcds\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\Core\Traits\ApiModelTrait;

class Lcd extends Base {

    use PresentableTrait;

    use ApiModelTrait;

    protected $presenter = 'Modules\Lcds\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}
