<?php namespace Modules\Talents\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Traits\ApiModelTrait;
use Modules\Lovs\Entities\Lov;
use Modules\Lovs\Repositories\LovInterface;
use Modules\Skills\Entities\Skill;
use Modules\Skills\Repositories\SkillInterface;
use Modules\Specialisations\Entities\Specialisation;
use Modules\Specialisations\Repositories\SpecialisationInterface;
use Modules\Talents\Transformers\TalentAwardTransformer;

class TalentSpecialisation extends Base {

    use ApiModelTrait;

    protected $fillable = [
        'specialisation_id',
        'experience',
        'fee',
        'rate',
        'talent_id',
    ];

    public $with = ['specialisation','skills','certifications','experiences'];

    protected static function booted()
    {
        static::saving(function ($model) {
            $model->specialisation_id = app(SpecialisationInterface::class)->saveRelationInput($model->specialisation_id);
        });

        static::saved(function ($model) {
            $skills = request('skills');
            $certifications = request('certifications');
            if(!empty($skills)){
                $skill_ids = [];
                foreach($skills as $skill){
                    if(!is_array($skill))
                        $skill_ids[] = app(LovInterface::class)->saveRelationInputForType('skills',$skill);
                    else
                        $skill_ids[] = $skill['id'];
                }
                $model->skills()->sync($skill_ids);
            }
            if(!empty($certifications)){
                $certification_ids = [];
                foreach($certifications as $certification) {
                    $certification_ids[] = $certification['id'];
                }
                $model->certifications()->sync($certification_ids);
            }
        });
    }

    public function talent()
    {
        return $this->belongsTo(Talent::class);
    }

    public function specialisation()
    {
        return $this->belongsTo(Specialisation::class);
    }

    public function experiences()
    {
        return $this->hasMany(TalentSpecialisationExperience::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Lov::class,'talent_specialisation_skills','skill_id','talent_specialisation_id');
    }

    public function certifications()
    {
        return $this->belongsToMany(TalentCertification::class,'talent_specialisation_certifications','talent_certification_id','talent_specialisation_id');
    }

}
