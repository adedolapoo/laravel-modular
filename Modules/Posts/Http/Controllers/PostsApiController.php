<?php namespace Modules\Posts\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Modules\Core\Http\Controllers\BaseApiController;
use Modules\Posts\Repositories\PostInterface as Repository;

class PostsApiController extends BaseApiController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function show($slug)
    {
        try {

            $post = $this->repository->getFirstBy('slug', $slug);

            if (empty($post)) throw new ModelNotFoundException();

            return $this->response->item($post, $this->getTransformer());
        } catch (\Exception $e) {
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

}
