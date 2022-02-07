<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
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

    public $table = 'languages';

    protected $appends = [
        'status_label',
    ];

    protected $orderable = [
        'id',
        'name',
        'code',
        'status',
    ];

    protected $filterable = [
        'id',
        'name',
        'code',
        'status',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'code',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getStatusLabelAttribute()
    {
        return collect(static::STATUS_SELECT)->firstWhere('value', $this->status)['label'] ?? '';
    }
    public function coursesuniversties()
    {
        return $this->hasMany(UnivercityCourse::class);
    }
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
