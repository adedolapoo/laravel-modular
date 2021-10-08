<?php namespace Modules\Talents\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Traits\ApiModelTrait;
use Modules\Talents\Transformers\TalentAwardTransformer;

class TalentTraining extends Base {

    use ApiModelTrait;

    protected $fillable = [
        'title',
        'discipline',
        'provider',
        'year',
        'talent_id',
    ];

    protected $dates = [
        'year'
    ];

    public function talent()
    {
        return $this->belongsTo(Talent::class);
    }

}
