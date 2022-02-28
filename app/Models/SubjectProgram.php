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

    public const TYPE_SELECT = [
        [
            'label' => 'Postgraduate',
            'value' => 'postgraduate',
        ],
        [
            'label' => 'Undergraduate',
            'value' => 'undergraduate',
        ],
    ];
    public $table = 'subject_programs';

    protected $appends = [
        'type_label',
    ];
    protected $orderable = [
        'id',
        'name',
        'months_of_entry',
        'university.name',
        'type',
        'subject.name',
    ];

    protected $filterable = [
        'id',
        'name',
        'months_of_entry',
        'university.name',
        'type',
        'subject.name',
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
        'type',
        'subject_id',
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
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
    public function getTypeLabelAttribute()
    {
        return collect(static::TYPE_SELECT)->firstWhere('value', $this->type)['label'] ?? '';
    }
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
