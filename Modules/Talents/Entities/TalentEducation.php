<?php namespace Modules\Talents\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Traits\ApiModelTrait;
use Modules\Courses\Entities\Course;
use Modules\Courses\Repositories\CourseInterface;
use Modules\Degrees\Entities\Degree;
use Modules\Degrees\Repositories\DegreeInterface;
use Modules\Grades\Entities\Grade;
use Modules\Grades\Repositories\GradeInterface;
use Modules\Institutions\Entities\Institution;
use Modules\Institutions\Repositories\InstitutionInterface;
use Modules\Lovs\Entities\Lov;
use Modules\Lovs\Repositories\LovInterface;
use Modules\Talents\Transformers\TalentAwardTransformer;

class TalentEducation extends Base {

    use ApiModelTrait;

    protected $fillable = [
        'institution_id',
        'course_id',
        'start_date',
        'end_date',
        'degree_id',
        'grade_id',
        'documents',
        'talent_id'
    ];

    protected $table = "talent_educations";

    public $with = ['degree','course','institution','grade'];

    protected $dates = [
        'start_date',
        'end_date',
    ];

    protected static function booted()
    {
        static::saving(function ($model) {
            $model->institution_id = app(LovInterface::class)->saveRelationInputForType('institutions',$model->institution_id);
            //$model->degree_id = app(DegreeInterface::class)->saveRelationInput($model->degree_id);
            $model->course_id = app(LovInterface::class)->saveRelationInputForType('courses',$model->course_id);
            //$model->grade_id = app(GradeInterface::class)->saveRelationInput($model->grade_id);
        });
    }

    public function talent()
    {
        return $this->belongsTo(Talent::class);
    }

    public function degree()
    {
        return $this->belongsTo(Lov::class,'degree_id');
    }

    public function course()
    {
        return $this->belongsTo(Lov::class, 'course_id');
    }

    public function institution()
    {
        return $this->belongsTo(Lov::class, 'institution_id');
    }

    public function grade()
    {
        return $this->belongsTo(Lov::class,'grade_id');
    }

}
