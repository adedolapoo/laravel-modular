<?php namespace Modules\Countries\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\Core\Traits\ApiModelTrait;

class Country extends Base {

    use PresentableTrait;

    use ApiModelTrait;

    protected $presenter = 'Modules\Countries\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}
