<?php namespace Modules\Talents\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Traits\ApiModelTrait;
use Modules\Employers\Entities\Employer;
use Modules\Employers\Repositories\EmployerInterface;
use Modules\Lovs\Entities\Lov;
use Modules\Lovs\Repositories\LovInterface;
use Modules\Talents\Transformers\TalentAwardTransformer;

class TalentSpecialisationExperience extends Base {

    use ApiModelTrait;

    protected $fillable = [
        'employer_id',
        'industry',
        'start_date',
        'end_date',
        'achievements',
        'awards',
        'grade',
        'talent_specialisation_id',
    ];

    public $with = ['employer'];

    protected $dates = [
        'start_date',
        'end_date',
    ];

    protected static function booted()
    {
        static::saving(function ($model) {
            $model->employer_id = app(LovInterface::class)->saveRelationInputForType('employers',$model->employer_id);
        });
    }

    public function talentSpeclailisation()
    {
        return $this->belongsTo(TalentSpecialisation::class);
    }

    public function employer()
    {
        return $this->belongsTo(Lov::class,'employer_id');
    }

}
