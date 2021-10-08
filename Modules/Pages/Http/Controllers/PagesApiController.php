<?php namespace Modules\Pages\Http\Controllers;

use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Pages\Transformers\PageTransformer;
use Modules\Pages\Repositories\PageInterface as Repository;

class PagesApiController extends BaseApiController {

    public static $transformer = PageTransformer::class;

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

}
