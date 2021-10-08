<?php namespace Modules\Lcds\Http\Controllers;

use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Lcds\Repositories\LcdInterface as Repository;

class LcdsApiController extends BaseApiController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

}
