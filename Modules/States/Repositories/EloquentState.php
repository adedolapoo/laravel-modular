<?php namespace Modules\States\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentState extends RepositoriesAbstract implements StateInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}