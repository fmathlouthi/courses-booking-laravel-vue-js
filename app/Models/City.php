<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;

    public const STATUS_SELECT = [
        [
            'label' => 'active',
            'value' => 'active',
        ],
        [
            'label' => 'inactive',
            'value' => 'inactive',
        ],
    ];

    public $table = 'cities';

    protected $appends = [
        'status_label',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $orderable = [
        'id',
        'name',
        'status',
        'country.name', 
    ];

    protected $filterable = [
        'id',
        'name',
        'status',
        'country.name',
    ];

    protected $fillable = [
        'name',
        'status',
        'country_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getStatusLabelAttribute()
    {
        return collect(static::STATUS_SELECT)->firstWhere('value', $this->status)['label'] ?? '';
    }
    public function accommodations()
    {
        return $this->hasMany(SemesterAccommodation::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
