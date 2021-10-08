<?php


namespace Modules\Users\Transformers;


use Modules\Core\Transformers\BaseTransformer;

class UserTransformer extends BaseTransformer
{
    public function transform($user)
    {
        $data = parent::transform($user);
        $data['roles'] = $user->roles;
        return $data;
    }
}
