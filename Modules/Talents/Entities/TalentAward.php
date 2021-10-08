<?php namespace Modules\Talents\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Traits\ApiModelTrait;
use Modules\Talents\Transformers\TalentAwardTransformer;

class TalentAward extends Base {

    use ApiModelTrait;

    protected $fillable = [
        'institution',
        'title',
        'year',
        'talent_id'
    ];

    protected $table = "talent_awards";

    protected $dates = [
        'year'
    ];

    public function talent()
    {
        return $this->belongsTo(Talent::class);
    }

}
