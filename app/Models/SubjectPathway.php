<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubjectPathway extends Model
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

    protected $appends = [
        'status_label',
    ];

    public $table = 'subject_pathways';

    protected $orderable = [
        'id',
        'name',
        'status',
    ];

    protected $filterable = [
        'id',
        'name',
        'status',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function getStatusLabelAttribute()
    {
        return collect(static::STATUS_SELECT)->firstWhere('value', $this->status)['label'] ?? '';
    }
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
