<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SemesterCourseVariante extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;

    public $table = 'semester_course_variantes';

    protected $dates = [
        'starting_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $orderable = [
        'id',
        'starting_date',
        'price',
        'semester_course.name',
    ];

    protected $filterable = [
        'id',
        'starting_date',
        'price',
        'semester_course.name',
    ];

    protected $fillable = [
        'starting_date',
        'price',
        'semester_course_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'owner_id',
    ];

    public function getStartingDateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.date_format')) : null;
    }

    public function setStartingDateAttribute($value)
    {
        $this->attributes['starting_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function semesterCourse()
    {
        return $this->belongsTo(SemesterCourse::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
