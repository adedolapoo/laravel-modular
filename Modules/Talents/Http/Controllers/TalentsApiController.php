<?php namespace Modules\Talents\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Modules\Users\Repositories\RoleInterface;
use Modules\Users\Repositories\UserInterface;
use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Talents\Repositories\TalentInterface as Repository;
use Modules\Talents\Transformers\TalentTransformer;

class TalentsApiController extends BaseApiController {

    public static $transformer = TalentTransformer::class;

    protected $with = [
        'user',
        'awards',
        'certifications',
        'education',
        'experiences',
        'specialisations',
        'trainings',
        'country',
        'state',
        'lga'
    ];

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function get(){
        $user = $this->auth->user();
        $talent = $this->repository->getFirstBy('user_id',$user->id,$this->with);
        return $this->response->item($talent,$this->getTransformer());
    }

    public function update(UserInterface $user_repository, RoleInterface $role_repository){
        try{
            DB::beginTransaction();
            $user = $this->auth->user();
            $data = request()->all();
            $data['user_id'] = $user->id;
            $talent = $this->repository->getFirstBy('user_id',$user->id);
            if(empty($talent)){
                $talent = $this->repository->create($data);
            }else{
                $data['id'] = $talent->id;
                $talent = $this->repository->update($data);
            }
            $user_repository->update($user,$data);

            $role = $role_repository->findByName('Talent');
            if(!$user->hasRoleId($role->id)) $user->roles()->attach($role->id);

            DB::commit();
            return $this->response->item($talent,$this->getTransformer());
        }catch (\Exception $e){
            DB::rollBack();
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

    public function storeRelation($relation)
    {
        try {
            DB::beginTransaction();
            $data = request()->all();
            $user = $this->auth->user();
            $talent = $this->repository->getFirstBy('user_id', $user->id);
            if (empty($talent)) {
                $talent = $this->repository->create(['user_id' => $user->id]);
            }
            $relation = Str::plural($relation);
            if($relation == 'experiences'){
                $specialisation = $talent->specialisations()->where('id',$data['talent_specialisation_id'])->first();
                $specialisation->experiences()->create($data);
            }else{
                $talent->$relation()->create($data);
            }
            DB::commit();
            return $this->response->created();
        } catch (\Exception $e) {
            DB::rollBack();
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

    public function updateRelation($relation,$id)
    {
        try {
            $data = request()->all();
            $user = $this->auth->user();
            $talent = $this->repository->getFirstBy('user_id', $user->id);
            $relation = Str::plural($relation);
            if($relation == 'experiences') {
                $specialisation = $talent->specialisations()->where('id', $data['talent_specialisation_id'])->first();
                $relation_model = $specialisation->experiences()->where('id',$id)->first();
            }else{
                $relation_model = $talent->$relation()->where('id',$id)->first();
            }
            $relation_model->update($data);
            return $this->response->created();
        } catch (\Exception $e) {
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

    public function deleteRelation($relation,$id)
    {
        try {
            $data = request()->all();
            $user = $this->auth->user();
            $talent = $this->repository->getFirstBy('user_id', $user->id);
            $relation = Str::plural($relation);
            $relation_model = $talent->$relation()->where('id',$id)->first();
            $relation_model->delete();
            return $this->response->created();
        } catch (\Exception $e) {
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

}
