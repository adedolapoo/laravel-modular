<?php namespace Modules\Talents\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Traits\ApiModelTrait;
use Modules\Talents\Transformers\TalentAwardTransformer;

class TalentExperience extends Base {

    use ApiModelTrait;

    protected $fillable = [
        'employer',
        'specialisation',
        'industry',
        'start_date',
        'end_date',
        'achievements',
        'awards',
        'grade',
        'talent_id',
    ];

    public static $transformer = TalentAwardTransformer::class;

    public function talent()
    {
        return $this->belongsTo(Talent::class);
    }

}
