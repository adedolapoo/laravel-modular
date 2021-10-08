<?php namespace Modules\Talents\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\Core\Traits\ApiModelTrait;
use Modules\Countries\Entities\Country;
use Modules\Gigs\Entities\Gig;
use Modules\Lcds\Entities\Lcd;
use Modules\States\Entities\State;
use Modules\Talents\Transformers\TalentTransformer;

class Talent extends Base {

    use PresentableTrait, ApiModelTrait;

    protected $presenter = 'Modules\Talents\Presenters\ModulePresenter';

    protected $fillable = [
        'geo_location',
        'phone',
        'dob',
        'gender',
        'address',
        'lga_id',
        'state_id',
        'country_id',
        'bio',
        'user_id',
        'resume',
        'resume_title'
    ];

    protected $table = "talents";

    public static $transformer = TalentTransformer::class;

    public $attachments = ['image'];

    protected $dates = [
        'dob',
    ];

    protected $appends = ['profile_percentage'];

    public function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }

    public function gigs()
    {
        return $this->belongsToMany(Gig::class)
            ->as('bid')
            ->withPivot('brief', 'milestones','estimated_hours')
            ->withTimestamps();
    }

    public function awards()
    {
        return $this->hasMany(TalentAward::class);
    }

    public function certifications()
    {
        return $this->hasMany(TalentCertification::class);
    }

    public function education()
    {
        return $this->hasMany(TalentEducation::class);
    }

    public function experiences()
    {
        return $this->hasMany(TalentExperience::class);
    }

    public function specialisations()
    {
        return $this->hasMany(TalentSpecialisation::class);
    }

    public function trainings()
    {
        return $this->hasMany(TalentTraining::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function lga()
    {
        return $this->belongsTo(Lcd::class,'lga_id');
    }

    public function getProfilePercentageAttribute(){
        $avatar = !empty($this->user->avatar) ? 10 : 0;
        $basic = !empty($this->dob) ? 20 : 0;
        $bio = !empty($this->bio) ? 10 : 0;
        $resume = !empty($this->resume) ? 30 : 0;
        $education = $this->education()->count() ? 10 : 0;
        $specialisations = $this->specialisations()->count() ? 20 : 0;

        return  $avatar + $basic + $bio + $resume + $education + $specialisations;
    }

}
