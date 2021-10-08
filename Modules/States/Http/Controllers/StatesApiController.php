<?php namespace Modules\States\Http\Controllers;

use Modules\Core\Http\Controllers\BaseApiController;
use Modules\States\Repositories\StateInterface as Repository;

class StatesApiController extends BaseApiController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

}
