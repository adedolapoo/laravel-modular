<?php namespace Modules\Specialisations\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentSpecialisation extends RepositoriesAbstract implements SpecialisationInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}