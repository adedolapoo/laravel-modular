<?php namespace Modules\Businesses\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;
use Modules\Core\Traits\ApiModelTrait;
use Modules\Countries\Entities\Country;
use Modules\Lcds\Entities\Lcd;
use Modules\States\Entities\State;

class Business extends Base {

    use PresentableTrait, ApiModelTrait;

    protected $presenter = 'Modules\Businesses\Presenters\ModulePresenter';

    protected $fillable = [
        'name',
        'logo',
        'email',
        'address',
        'phone',
        'address',
        'lga_id',
        'state_id',
        'country_id',
    ];

    protected $with = [
        'users',
        'country',
        'state',
        'lga'
    ];

    public $attachments = ['logo'];

    public function users()
    {
        return $this->belongsToMany(config('auth.providers.users.model'));
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

}
