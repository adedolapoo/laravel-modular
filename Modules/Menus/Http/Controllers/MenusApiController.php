<?php namespace Modules\Menus\Http\Controllers;

use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Menus\Transformers\MenuTransformer;
use Modules\Menus\Repositories\MenuInterface as Repository;

class MenusApiController extends BaseApiController {

    public static $transformer = MenuTransformer::class;

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

}
