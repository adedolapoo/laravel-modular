<?php namespace Modules\Gigs\Entities;

use Modules\Core\Entities\Base;

class GigTalentComment extends Base {

    protected $fillable = [
        'gig_talent_id',
        'user_id',
        'is_business',
        'body'
    ];

    public $with = ['user'];

    public function getMilestonesAttribute($value){
        return json_decode($value);
    }

    public function gigTalent()
    {
        return $this->belongsTo(GigTalent::class,'gig_talent_id');
    }

    public function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }
}
