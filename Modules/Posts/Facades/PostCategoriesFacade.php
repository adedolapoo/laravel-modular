<?php namespace Modules\Posts\Facades;

use Illuminate\Support\Facades\Facade as MainFacade;

class PostCategoriesFacade extends MainFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Modules\Posts\Repositories\PostCategoryInterface';
    }
}
