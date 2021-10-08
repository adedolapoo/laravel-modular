<?php namespace Modules\Gigs\Entities;

use Modules\Businesses\Entities\Business;
use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\Core\Traits\ApiModelTrait;
use Modules\Countries\Entities\Country;
use Modules\Lovs\Entities\Lov;
use Modules\Specialisations\Entities\Specialisation;
use Modules\States\Entities\State;
use Modules\Talents\Entities\Talent;

class Gig extends Base {

    use PresentableTrait, ApiModelTrait;

    protected $presenter = 'Modules\Gigs\Presenters\ModulePresenter';

    protected $fillable = [
        'title',
        'description',
        'gig_status',
        'slug',
        'uuid',
        'business_id',
        'country_id',
        'state_id',
        'talent_no',
        'start_date',
        'end_date',
        'deliverables',
        'requirements',
        'industry_id',
        'experience_level',
        'status',
        'application_deadline',
        'project_duration'
    ];

    protected $dates = [
        'start_date',
        'end_date',
        'application_deadline'
    ];

    public $attachments = ['image'];

    public $with = ['specialisations','country','state','business','industry'];

    protected static function booted()
    {
        static::saved(function ($model) {
            $specialisations = request('specialisations');
            if(!empty($specialisations)){
                $specialisation_ids = [];
                foreach($specialisations as $specialisation){
                    $specialisation_ids[] = $specialisation['id'];
                }
                $model->specialisations()->sync($specialisation_ids);
            }
        });
    }

    public function specialisations()
    {
        return $this->belongsToMany(Specialisation::class);
    }

    public function talents()
    {
        return $this->belongsToMany(Talent::class)
            ->as('bid')
            ->withPivot('brief', 'milestones','estimated_hours','status','milestones_status','id')
            ->using(GigTalent::class)
            ->withTimestamps();
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function industry()
    {
        return $this->belongsTo(Lov::class,'industry_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function scopeModelQuery($query,$request){
        $business_id = $request->get('business_id');
        $talent_id = $request->get('talent_id');
        $query = $query->orderBy('id','desc');
        if(!empty($business_id)) {
            return $query->where('business_id',$business_id);
        }
        if(!empty($talent_id)) {
           return $query->whereHas('talents',function($query) use($talent_id){
                return $query->where('talent_id',$talent_id);
            });
        }
        $talent = $request->user()->talent;
        if(!empty($talent)){
            $query = $query->where('status',1);
            return $query->whereDoesntHave('talents',function($query) use($talent){
                return $query->where('talent_id',$talent->id);
            });
        }
    }


}
