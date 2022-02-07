<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseOrder extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;

    public const PAYMENT_STATUS_SELECT = [
        [
            'label' => 'paid',
            'value' => 'paid',
        ],
        [
            'label' => 'unpaid',
            'value' => 'unpaid',
        ],
    ];

    public const PAYMENT_METHOD_SELECT = [
        [
            'label' => 'cash on delivery',
            'value' => 'cod',
        ],
        [
            'label' => 'paypal',
            'value' => 'paypal',
        ],
    ];

    public const STATUS_SELECT = [
        [
            'label' => 'new',
            'value' => 'new',
        ],
        [
            'label' => 'process',
            'value' => 'process',
        ],
        [
            'label' => 'delivered',
            'value' => 'delivered',
        ],
        [
            'label' => 'cancel',
            'value' => 'cancel',
        ],
    ];

    public $table = 'course_orders';

    protected $dates = [
        'created_at',
        'start_date',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'payment_method_label',
        'payment_status_label',
        'status_label',
    ];

    protected $orderable = [
        'id',
        'order_number',
        'client.name',
        'sub_total',
        'coupon.name',
        'total_amount',
        'payment_method',
        'payment_status',
        'status',
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'post_code',
        'address_1',
        'address_2',
        'course.name',
        'extra.name',
        'accommodation.name',
        'start_date',
    ];

    protected $filterable = [
        'id',
        'order_number',
        'client.name',
        'sub_total',
        'coupon.name',
        'total_amount',
        'payment_method',
        'payment_status',
        'status',
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'post_code',
        'address_1',
        'address_2',
        'course.name',
        'extra.name',
        'accommodation.name',
        'start_date',
    ];

    protected $fillable = [
        'order_number',
        'client_id',
        'sub_total',
        'coupon_id',
        'total_amount',
        'payment_method',
        'payment_status',
        'status',
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'post_code',
        'address_1',
        'address_2',
        'created_at',
        'course_id',
        'extra_id',
        'accommodation_id',
        'start_date',
        'updated_at',
        'deleted_at',
        'owner_id',
    ];

    public function client()
    {
        return $this->belongsTo(User::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    public function getPaymentMethodLabelAttribute()
    {
        return collect(static::PAYMENT_METHOD_SELECT)->firstWhere('value', $this->payment_method)['label'] ?? '';
    }

    public function getPaymentStatusLabelAttribute()
    {
        return collect(static::PAYMENT_STATUS_SELECT)->firstWhere('value', $this->payment_status)['label'] ?? '';
    }

    public function getStatusLabelAttribute()
    {
        return collect(static::STATUS_SELECT)->firstWhere('value', $this->status)['label'] ?? '';
    }

    public function course()
    {
        return $this->belongsTo(WeeklyCourse::class);
    }

    public function extra()
    {
        return $this->belongsTo(Extra::class);
    }

    public function accommodation()
    {
        return $this->belongsTo(Accommodation::class);
    }

    public function getStartDateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.date_format')) : null;
    }

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
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
