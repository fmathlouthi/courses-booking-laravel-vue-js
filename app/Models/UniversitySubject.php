<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class UniversitySubject extends Model implements HasMedia
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use HasMediaTrait;

    public const TYPE_SELECT = [
        [
            'label' => 'Postgraduate',
            'value' => 'postgraduate',
        ],
        [
            'label' => 'Undergraduate',
            'value' => 'undergraduate',
        ],
    ];

    public $table = 'university_subjects';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'pathbrochure',
        'photos',
        'featured_image',
        'type_label',
    ];

    protected $orderable = [
        'id',
        'name',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'city.name',
        'type',
    ];

    protected $filterable = [
        'id',
        'name',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'city.name',
        'type',
        'features.name',
    ];

    protected $fillable = [
        'name',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'description',
        'city_id',
        'type',
        'created_at',
        'updated_at',
        'deleted_at',
        'owner_id',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $thumbnailWidth  = 50;
        $thumbnailHeight = 50;

        $thumbnailPreviewWidth  = 120;
        $thumbnailPreviewHeight = 120;

        $this->addMediaConversion('thumbnail')
            ->width($thumbnailWidth)
            ->height($thumbnailHeight)
            ->fit('crop', $thumbnailWidth, $thumbnailHeight);
        $this->addMediaConversion('preview_thumbnail')
            ->width($thumbnailPreviewWidth)
            ->height($thumbnailPreviewHeight)
            ->fit('crop', $thumbnailPreviewWidth, $thumbnailPreviewHeight);
    }

    public function getPathbrochureAttribute()
    {
        return $this->getMedia('university_subject_pathbrochure')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();

            return $media;
        });
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
    public function getPhotosAttribute()
    {
        return $this->getMedia('university_subject_photos')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();
            $media['thumbnail'] = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

            return $media;
        });
    }

    public function getFeaturedImageAttribute()
    {
        return $this->getMedia('university_subject_featured_image')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();
            $media['thumbnail'] = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

            return $media;
        });
    }

    public function getTypeLabelAttribute()
    {
        return collect(static::TYPE_SELECT)->firstWhere('value', $this->type)['label'] ?? '';
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
