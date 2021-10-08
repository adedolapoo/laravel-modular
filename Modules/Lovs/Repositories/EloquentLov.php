<?php namespace Modules\Lovs\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentLov extends RepositoriesAbstract implements LovInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function saveRelationInputForType($type, $input, $column = 'id')
    {
        if($input){
            if(is_numeric($input)){
                $input = $this->model->where('type',$type)->find($input)->$column;
            }else{
                $input = $this->model->firstOrCreate(['name'=>$input,'type'=>$type])->$column;
            }
            return $input;
        }
        return NULL;
    }

}
