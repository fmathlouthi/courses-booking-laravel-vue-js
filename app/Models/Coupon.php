<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;

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

    public const TYPE_SELECT = [
        [
            'label' => 'Percentage',
            'value' => 'percentage',
        ],
        [
            'label' => 'Numeric',
            'value' => 'numeric',
        ],
    ];

    public $table = 'coupons';

    protected $appends = [
        'type_label',
        'status_label',
    ];

    protected $dates = [
        'created_at',
        'expired_at',
        'updated_at',
        'deleted_at',
    ];

    protected $orderable = [
        'id',
        'name',
        'code',
        'type',
        'value',
        'count',
        'expired_at',
        'status',
    ];

    protected $filterable = [
        'id',
        'name',
        'code',
        'type',
        'value',
        'count',
        'expired_at',
        'status',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'code',
        'type',
        'value',
        'count',
        'expired_at',
        'status',
        'updated_at',
        'deleted_at',
        'owner_id',
    ];

    public function getTypeLabelAttribute()
    {
        return collect(static::TYPE_SELECT)->firstWhere('value', $this->type)['label'] ?? '';
    }

    public function getExpiredAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function setExpiredAtAttribute($value)
    {
        $this->attributes['expired_at'] = $value ? Carbon::createFromFormat(config('project.datetime_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getStatusLabelAttribute()
    {
        return collect(static::STATUS_SELECT)->firstWhere('value', $this->status)['label'] ?? '';
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
