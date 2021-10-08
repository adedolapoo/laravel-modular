<?php namespace Modules\Businesses\Http\Controllers;

use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Businesses\Repositories\BusinessInterface as Repository;
use Modules\Users\Repositories\RoleInterface;

class BusinessesApiController extends BaseApiController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function get(){
        $user = $this->auth->user();
        $business = $user->businesses()->first();
        return $this->response->item($business,$this->getTransformer());
    }

    public function update(RoleInterface $role_repository){
        try{
            $user = $this->auth->user();
            $data = request()->all();
            $data['user_id'] = $user->id;
            $business = $user->businesses()->first();
            if(empty($business)){
                $business = $this->repository->create($data);
                $business->users()->attach($user->id);
            }else{
                $data['id'] = $business->id;
                $business = $this->repository->update($data);
            }

            $role = $role_repository->findByName('Business');
            if(!$user->hasRoleId($role->id)) $user->roles()->attach($role->id);

            return $this->response->item($business,$this->getTransformer());
        }catch (\Exception $e){
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

}
