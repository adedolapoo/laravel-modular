<?php namespace Modules\Users\Http\Controllers;

use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Users\Transformers\RoleTransformer;
use Modules\Users\Transformers\UserTransformer;
use Modules\Users\Repositories\UserInterface as Repository;

class UsersApiController extends BaseApiController {

    public static $transformer = UserTransformer::class;

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function currentUser()
    {
        $user = $this->auth->user();
       return $this->response->item($user, $this->getTransformer());
    }

    public function currentUserRoles()
    {
        $user = $this->auth->user();
        $roles = $user->roles;
        return $this->response->collection($roles, new RoleTransformer());
    }

}
