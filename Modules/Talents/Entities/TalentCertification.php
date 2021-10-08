<?php namespace Modules\Talents\Entities;

use Modules\Certifications\Entities\Certification;
use Modules\Certifications\Repositories\CertificationInterface;
use Modules\Core\Entities\Base;
use Modules\Core\Traits\ApiModelTrait;
use Modules\Talents\Transformers\TalentAwardTransformer;

class TalentCertification extends Base {

    use ApiModelTrait;

    protected $fillable = [
        'institution',
        'name',
        'certification_id',
        'start_date',
        'end_date',
        'documents',
        'talent_id'
    ];

    public $with = [];

    protected $dates = [
        'start_date',
        'end_date',
    ];

    protected static function booted()
    {
        /*static::saving(function ($model) {
            $model->certification_id = app(CertificationInterface::class)->saveRelationInput($model->certification_id);
        });*/
    }

    public function talent()
    {
        return $this->belongsTo(Talent::class);
    }

   /* public function certification()
    {
        return $this->belongsTo(Certification::class);
    }*/
}
