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
    public function scopeWithFilters($query)
    {
    
        $arrayuniversitiesbycoubtry = [];
        if(request()->input('country')){
        $universities =  UnivercityCourse::
        join('cities', 'cities.id', '=', 'univercity_courses.city_id')
        ->join('countries', 'countries.id', '=', 'cities.country_id')
        ->join('feature_univercity_course', 'feature_univercity_course.univercity_course_id', '=', 'univercity_courses.id')
        ->join('weekly_courses', 'weekly_courses.university_id', '=', 'univercity_courses.id')
        ->select('weekly_courses.university_id')
        ->where('countries.id', request()->input('country'))
        ->when(count(request()->input('features', [])), function ($query) {
            $query->whereIn('feature_univercity_course.feature_id', request()->input('features'));
        })
     
        ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
        ->get()
        ->toArray();
        $i=0;
        foreach($universities as $university){
            
            $arrayuniversitiesbycoubtry[$i] = $university->university_id;
            $i++;
        }
        array_push($arrayuniversitiesbycoubtry,0);
    }

        return $query->when(request()->input('degree'), function ($query) {
                $query->where('type', '=' ,request()->input('degree'));
            })
            ->when(request()->input('subject'), function ($query) {
                $query->where('subject_id', request()->input('subject'));
            })->when(request()->input('country'), function ($query) {
                $query->whereIn('university_id', function($query) {
                    $query->select('id')
                      ->from(with(new UniversitySubject())->getTable())
                      ->whereIn('city_id', function ($query) {
                        $query->select('id')
                        ->from(with(new City())->getTable())
                        ->where('country_id', request()->input('country'));
                    } );
                 });
            });
    }
}
