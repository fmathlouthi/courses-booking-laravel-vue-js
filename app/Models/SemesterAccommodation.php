<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SemesterAccommodation extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;

    public $table = 'semester_accommodations';

    protected $orderable = [
        'id',
        'name',
        'price',
        'city.name',
    ];

    protected $filterable = [
        'id',
        'name',
        'price',
        'city.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'city_id',
        'description',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
        'owner_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function semesteraccommvariante()
    {
        return $this->hasMany(SemesterAccommVariante::class);
    }
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
