<?php namespace Modules\Gigs\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentGig extends RepositoriesAbstract implements GigInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}