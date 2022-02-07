<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SemesterCourse extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;

    public $table = 'semester_courses';

    protected $orderable = [
        'id',
        'name',
        'university.name',
    ];

    protected $filterable = [
        'id',
        'name',
        'price',
        'university.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'university_id',
        'description',
        'created_at',
        'price',
        'updated_at',
        'deleted_at',
        'owner_id',
    ];

    public function university()
    {
        return $this->belongsTo(UnivercityCourse::class);
    }
    public function semestrecoursesvariante()
    {
        return $this->hasMany(SemesterCourseVariante::class);
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
