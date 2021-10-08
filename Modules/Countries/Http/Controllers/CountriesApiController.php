<?php namespace Modules\Countries\Http\Controllers;

use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Countries\Repositories\CountryInterface as Repository;

class CountriesApiController extends BaseApiController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

}
