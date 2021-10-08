<?php namespace Modules\Lovs\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\Core\Traits\ApiModelTrait;

class Lov extends Base {

    use PresentableTrait, ApiModelTrait;

    protected $presenter = 'Modules\Lovs\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}
