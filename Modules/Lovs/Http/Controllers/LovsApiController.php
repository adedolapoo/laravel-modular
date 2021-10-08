<?php namespace Modules\Lovs\Http\Controllers;

use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Lovs\Repositories\LovInterface as Repository;

class LovsApiController extends BaseApiController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function getAllType($type)
    {
        try {
            $models = $this->repository->allBy('type',$type,[],true);
            return $this->response->collection($models,$this->getTransformer());
        }catch (\Exception $e){
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

}
