<?php namespace Modules\Talents\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentTalent extends RepositoriesAbstract implements TalentInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}