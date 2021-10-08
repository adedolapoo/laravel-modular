<?php namespace Modules\Lcds\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentLcd extends RepositoriesAbstract implements LcdInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}