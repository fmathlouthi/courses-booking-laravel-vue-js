<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pathway extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;

    public const TYPE_SELECT = [
        [
            'label' => 'Undergraduate',
            'value' => 'undergraduate',
        ],
        [
            'label' => 'Graduate',
            'value' => 'graduate',
        ],
    ];

    public $table = 'pathways';

    protected $appends = [
        'type_label',
    ];

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
        'type',
        'subject_pathway.name',
    ];

    protected $filterable = [
        'id',
        'name',
        'price',
        'university.name',
        'type',
        'subject_pathway.name',
    ];

    protected $fillable = [
        'name',
        'description',
        'progression_program',
        'price',
        'university_id',
        'type',
        'subject_pathway_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'owner_id',
    ];

    public function university()
    {
        return $this->belongsTo(PathwayUniversity::class);
    }
    public function subjectPathway()
    {
        return $this->belongsTo(SubjectPathway::class);
    }
    public function getTypeLabelAttribute()
    {
        return collect(static::TYPE_SELECT)->firstWhere('value', $this->type)['label'] ?? '';
    }
    public function getLowestAttribute ()
    {
        $prices = $this->prices->filter(function ($item) {
            return !is_null($item->price);
        });
    
        return $prices->min('price');
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
