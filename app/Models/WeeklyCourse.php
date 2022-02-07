<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WeeklyCourse extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;

    public $table = 'weekly_courses';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $orderable = [
        'id',
        'name',
        'price',
        'university.name',
    ];

    protected $filterable = [
        'id',
        'name',
        'price',
        'university.name',
    ];

    protected $fillable = [
        'name',
        'description',
        'price',
        'university_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'owner_id',
    ];
    const PRICES = [
        'Less than 50',
        'From 50 to 100',
        'From 100 to 500',
        'More than 500',
    ];
    public function university()
    {
        return $this->belongsTo(UnivercityCourse::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeWithPriceFilter($query)
    {
        return $query->when(count(request()->input('prices', [])), function ($query) {
                $query->where(function ($query) {
                    $query->when(in_array(0, request()->input('prices')), function ($query) {
                            $query->orWhere('price', '<', '50');
                        })
                        ->when(in_array(1, request()->input('prices')), function ($query) {
                            $query->orWhereBetween('price', ['50', '100']);
                        })
                        ->when(in_array(2, request()->input('prices')), function ($query) {
                            $query->orWhereBetween('price', ['100', '500']);
                        })
                        ->when(in_array(3, request()->input('prices')), function ($query) {
                            $query->orWhere('price', '>', '500');
                        });
                });
            });
    }
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
