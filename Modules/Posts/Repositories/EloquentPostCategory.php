<?php namespace Modules\Posts\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentPostCategory extends RepositoriesAbstract implements PostCategoryInterface {

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getForDataTable()
    {
        //$selectArray  = config(str_replace('_','',$this->model->getTable()) . '.th');
        $selectArray = ['category','category_slug'];
        $selectArray[] = 'category_id';
        $query = $this->model
            ->select($selectArray);

        return $query;
    }

    public function update(array $data)
    {
        $model = $this->model->find($data['category_id']);

        $model->fill($data);

        if ($model->save()) {
            return $model;
        }

        return false;

    }
}