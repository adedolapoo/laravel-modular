<?php namespace Modules\Posts\Entities;

use Illuminate\Database\Eloquent\Builder;
use InvalidArgumentException;
use Modules\Core\Collections\NestableTrait;
use Log;
use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class PostCategory extends Base {

    use PresentableTrait;
    use NestableTrait;

    protected $presenter = 'Modules\Posts\Presenters\PostCategoryPresenter';

    protected $guarded = ['_token','exit'];
    protected  $table ='post_categories';
    protected $primaryKey = 'category_id';
    public $attachments = [
        'image',
    ];

    public function posts()
    {
        return $this->hasMany('Modules\Posts\Entities\Post','category_id')->online();
    }

    public function indexUrl()
    {
        try {
            return route('admin.post.categories.index');
        } catch (InvalidArgumentException $e) {
            Log::error($e->getMessage());
        }
    }

    public function editUrl()
    {
        try {
            return route('admin.post.categories.edit', $this->id);
        } catch (InvalidArgumentException $e) {
            Log::error($e->getMessage());
        }
    }

    public function scopeOnline(Builder $query){
        return $query;
    }

}