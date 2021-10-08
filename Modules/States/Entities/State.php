<?php namespace Modules\States\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\Core\Traits\ApiModelTrait;

class State extends Base {

    use PresentableTrait;

    use ApiModelTrait;

    protected $presenter = 'Modules\States\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];

    public $attachments = ['image'];

}
