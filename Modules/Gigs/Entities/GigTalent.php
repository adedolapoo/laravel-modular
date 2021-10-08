<?php namespace Modules\Gigs\Entities;

use Illuminate\Database\Eloquent\Relations\Pivot;

class GigTalent extends Pivot {

    protected $fillable = [
        'brief', 'milestones','estimated_hours','status','milestones_status'
    ];

    public $with = [];

    public function getMilestonesAttribute($value){
        return json_decode($value);
    }

    public function comments()
    {
        return $this->hasMany(GigTalentComment::class,'gig_talent_id')->orderBy('id','desc');
    }
}
