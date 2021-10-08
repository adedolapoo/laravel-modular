<?php namespace Modules\Specialisations\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\Core\Traits\ApiModelTrait;

class Specialisation extends Base {

    use PresentableTrait, ApiModelTrait;

    protected $presenter = 'Modules\Specialisations\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}
