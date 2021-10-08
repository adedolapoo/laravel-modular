<?php namespace Modules\Posts\Entities;

use Illuminate\Database\Eloquent\Builder;
use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\Core\Traits\ApiModelTrait;

class Post extends Base {

    use PresentableTrait, ApiModelTrait;

    protected $presenter = 'Modules\Posts\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit','categories','tags'];

    public $attachments = ['image'];

   // protected $appends = ['image_url'];

    public function category()
    {
        return $this->belongsTo('Modules\Posts\Entities\PostCategory');
    }

    public function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }

    public function tags()
    {
        return $this->belongsToMany('Modules\Tags\Entities\Tag');
    }

    public function scopeRole(Builder $query)
    {
        $current_user = current_user();
        if($current_user && $current_user->hasRoleName('Contributor')){
            $query = $query->where('user_id',$current_user->id);
        }
        return $query;
    }

    /*public function getImageUrlAttribute(){
        return asset($this->present()->thumbSrc(600));
    }*/

}
