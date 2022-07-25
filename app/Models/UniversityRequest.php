<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UniversityRequest extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use HasFactory;

    public const GENDRE_RADIO = [
        [
            'label' => 'Female',
            'value' => 'female',
        ],
        [
            'label' => 'Male',
            'value' => 'male',
        ],
    ];

    public const LEVEL_OF_STUDY_SELECT = [
        [
            'label' => 'Postgraduate',
            'value' => 'postgraduate',
        ],
        [
            'label' => 'Undergraduate',
            'value' => 'undergraduate',
        ],
    ];

    public const NATIONALITY_SELECT = [
        [
            'label' => 'Argentinian',
            'value' => 'argentinian',
        ],
        [
            'label' => 'Algerian',
            'value' => 'algerian',
        ],
        [
            'label' => 'British',
            'value' => 'british',
        ],
        [
            'label' => 'Canadian',
            'value' => 'canadian',
        ],
        [
            'label' => 'Cameroonian',
            'value' => 'cameroonian',
        ],
        [
            'label' => 'Chinese',
            'value' => 'chinese',
        ],
        [
            'label' => 'Czech',
            'value' => 'czech',
        ],
        [
            'label' => 'Egyptian',
            'value' => 'egyptian',
        ],
        [
            'label' => 'Ethiopian',
            'value' => 'ethiopian',
        ],
        [
            'label' => 'French',
            'value' => 'french',
        ],
        [
            'label' => 'German',
            'value' => 'german',
        ],
        [
            'label' => 'Indian',
            'value' => 'indian',
        ],
        [
            'label' => 'Italian',
            'value' => 'italian',
        ],
        [
            'label' => 'Libyan',
            'value' => 'libyan',
        ],
        [
            'label' => 'Moroccan',
            'value' => 'moroccan',
        ],
        [
            'label' => 'Saudi Arabian',
            'value' => 'saudi arabian',
        ],
        [
            'label' => 'Tunisian',
            'value' => 'tunisian',
        ],
        [
            'label' => 'Turkish',
            'value' => 'turkish',
        ],
    ];

    public $table = 'university_requests';

    protected $appends = [
        'gendre_label',
        'nationality_label',
        'level_of_study_label',
    ];

    protected $dates = [
        'date_of_birth',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $orderable = [
        'id',
        'student_first_name',
        'student_last_name',
        'gendre',
        'nationality',
        'level_of_study',
        'email',
        'phone',
        'country',
        'post_code',
        'state',
        'city',
        'address_1',
        'address_2',
        'special_needs',
        'comments',
        'preferred_intake',
        'university_degree',
        'university_college',
        'secondary_school',
        'english_proficiency',
        'current_address',
        'date_of_birth',
        'subject.name',
        'university.name',
    ];

    protected $filterable = [
        'id',
        'student_first_name',
        'student_last_name',
        'gendre',
        'nationality',
        'level_of_study',
        'email',
        'phone',
        'country',
        'post_code',
        'state',
        'city',
        'address_1',
        'address_2',
        'special_needs',
        'comments',
        'preferred_intake',
        'university_degree',
        'university_college',
        'secondary_school',
        'english_proficiency',
        'current_address',
        'date_of_birth',
        'subject.name',
        'university.name',
    ];

    protected $fillable = [
        'student_first_name',
        'student_last_name',
        'gendre',
        'nationality',
        'level_of_study',
        'email',
        'phone',
        'country',
        'post_code',
        'state',
        'city',
        'address_1',
        'address_2',
        'special_needs',
        'comments',
        'preferred_intake',
        'university_degree',
        'university_college',
        'secondary_school',
        'english_proficiency',
        'current_address',
        'date_of_birth',
        'created_at',
        'subject_id',
        'university_id',
        'updated_at',
        'deleted_at',
        'owner_id',
    ];

    public function getGendreLabelAttribute()
    {
        return collect(static::GENDRE_RADIO)->firstWhere('value', $this->gendre)['label'] ?? '';
    }

    public function getNationalityLabelAttribute()
    {
        return collect(static::NATIONALITY_SELECT)->firstWhere('value', $this->nationality)['label'] ?? '';
    }

    public function getLevelOfStudyLabelAttribute()
    {
        return collect(static::LEVEL_OF_STUDY_SELECT)->firstWhere('value', $this->level_of_study)['label'] ?? '';
    }

    public function getDateOfBirthAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.date_format')) : null;
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
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
