<?php namespace Modules\Core\Http\Controllers;

use Dingo\Api\Contract\Http\Request;
use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Modules\Core\Transformers\BaseTransformer;
use Specialtactics\L5Api\Http\Controllers\Features\RestfulControllerTrait;

abstract class BaseApiController extends Controller
{
    use Helpers;
    use RestfulControllerTrait;
    /**
     *  Array of endpoints that do not require authorization.
     */
    protected $publicEndpoints = [];

    public static $model = null;

    public static $transformer = null;

    protected $repository;

    public function __construct($repository = null)
    {
        //$this->middleware('api', ['except' => $this->publicEndpoints]);
        $this->repository = $repository;
    }

    public function getAll(Request $request)
    {
        try {
            $models = $this->repository->allForApi();
            $per_page  = $request->get('per_page');
            if(empty($per_page)) return $this->response->collection($models, $this->getTransformer());
            return $this->response->paginator($models, $this->getTransformer());
        } catch (\Exception $e) {
            $this->response->errorUnauthorized($e->getMessage());
        }
    }

    protected function getTransformer()
    {
        $transformer = null;

        // Check if controller specifies a resource
        if (! is_null(static::$transformer)) {
            $transformer = static::$transformer;
        }

        // Otherwise, check if model is specified
        else {
            // If it is, check if the controller's model specifies the transformer
            if (! is_null(static::$model)) {
                // If it does, use it
                if (! is_null((static::$model)::$transformer)) {
                    $transformer = (static::$model)::$transformer;
                }
            }
        }

        // This is the default transformer, if one is not specified
        if (is_null($transformer)) {
            $transformer = BaseTransformer::class;
        }

        return new $transformer;
    }

}
