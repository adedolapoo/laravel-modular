<?php namespace Modules\Specialisations\Http\Controllers;

use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Specialisations\Repositories\SpecialisationInterface as Repository;

class SpecialisationsApiController extends BaseApiController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

}
