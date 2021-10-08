<?php namespace Modules\Posts\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;
use Modules\Posts\Entities\Post;
use stdClass;

class EloquentPost extends RepositoriesAbstract implements PostInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getForDataTable()
    {
        $query = $this->model
            ->role()
            ->leftJoin('post_categories', 'post_categories.category_id', '=', 'posts.category_id')
            ->leftJoin('users', 'users.id', '=', 'posts.user_id')
            ->orderBy('posts.id','desc')
            ->select([
                'posts.id',
                'title',
                'slug',
                'category',
                'email',
                'status'
            ]);

        return $query;
    }

    public function create(array $data)
    {
        // Create the model
        $model = $this->model->fill($data);

        if ($model->save()) {
           // $model->tags()->sync($data['tags']);
            return $model;
        }

        return false;
    }

    public function byMostPopular($number = 10, array $with = array())
    {
        $query = $this->make($with);
        return $query->orderByRaw('(posts.view_cache) DESC')
            ->take($number)
            ->get();
    }

    public function incrementViews(Post $post)
    {
        $post->view_cache = $post->view_cache + 1;
        $post->save();

        return $post;
    }

    public function byCategoryOrTag($page = 1, $limit = 10,$items)
    {
        $result = new stdClass;
        $result->page = $page;
        $result->limit = $limit;
        $result->totalItems = 0;
        $result->items = array();

        //$query = $items->online();
        $query = $items;


        $totalItems = $query->count();

        $query->order()
            ->skip($limit * ($page - 1))
            ->take($limit);

        //$models = $query->get();

        // Put items and totalItems in stdClass
        $result->totalItems = $totalItems;
        $result->items = $query->get();

        return $result;
    }

    public function latest($number = 10, array $with = array())
    {
        $query = $this->make($with);
        return $query->order()->online()->take($number)->get();
    }

    public function latestForRole($number = 10, array $with = array())
    {
        $query = $this->make($with)->order()
            ->role();
        return $query->take($number)->get();
    }

    public function countAll()
    {
        $query = $this->model->role();
        return $query->count();
    }

    public function bySearchTerm($page = 1, $limit = 10, $term)
    {
        $result = new stdClass;
        $result->page = $page;
        $result->limit = $limit;
        $result->totalItems = 0;
        $result->items = array();

        $query = $this->model
                    ->orWhere('title', 'LIKE', '%'.$term.'%')
                    ->orWhere('body', 'LIKE', '%'.$term.'%')
                    ->orWhereHas('tags', function ($query) use ($term) {
                        $query->where('title', 'LIKE', '%' . $term . '%')
                            ->orWhere('slug', 'LIKE', '%' . $term . '%');
                    })
                    ->orWhereHas('category', function ($query) use ($term) {
                        $query->where('category', 'LIKE', '%' . $term . '%')
                            ->orWhere('slug', 'LIKE', '%' . $term . '%');
                    });

        $query->online();

        $totalItems = $query->count();

        $query->order()
            ->skip($limit * ($page - 1))
            ->take($limit);

        $models = $query->get();

        // Put items and totalItems in stdClass
        $result->totalItems = $totalItems;
        $result->items = $models->all();

        return $result;
    }

    public function latestFeatured($limit)
    {
        // Create the model
        $model = $this->model
            ->with(['category','user'])
            ->where('is_featured',1)
            ->order()
            ->take($limit)
            ->get();


        return $model;
    }



}
