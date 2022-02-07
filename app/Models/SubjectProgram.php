<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubjectProgram extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;

    public $table = 'subject_programs';

    protected $orderable = [
        'id',
        'name',
        'months_of_entry',
        'university.name',
    ];

    protected $filterable = [
        'id',
        'name',
        'months_of_entry',
        'university.name',
    ];

    protected $dates = [
        'months_of_entry',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'entry_requirements',
        'months_of_entry',
        'course_content',
        'fees_and_funding',
        'qualification_and_course_duration',
        'university_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'owner_id',
    ];

    public function getMonthsOfEntryAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.date_format')) : null;
    }

    public function setMonthsOfEntryAttribute($value)
    {
        $this->attributes['months_of_entry'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function university()
    {
        return $this->belongsTo(UniversitySubject::class);
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
