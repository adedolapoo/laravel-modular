<?php namespace Modules\Businesses\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentBusiness extends RepositoriesAbstract implements BusinessInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}