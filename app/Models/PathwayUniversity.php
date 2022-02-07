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

class PathwayUniversity extends Model implements HasMedia
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use HasMediaTrait;

    public $table = 'pathway_universities';

    protected $orderable = [
        'id',
        'name',
        'facebook_link',
        'city.name',
    ];

    protected $filterable = [
        'id',
        'name',
        'facebook_link',
        'city.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'pathbrochure',
        'featured_image',
        'photos',
    ];

    protected $fillable = [
        'name',
        'facebook_link',
        'instagram_link',
        'city_id',
        'twitter_link',
        'description',
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
        return $this->getMedia('pathway_university_pathbrochure')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();

            return $media;
        });
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function getFeaturedImageAttribute()
    {
        return $this->getMedia('pathway_university_featured_image')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();
            $media['thumbnail'] = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

            return $media;
        });
    }

    public function getPhotosAttribute()
    {
        return $this->getMedia('pathway_university_photos')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();
            $media['thumbnail'] = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

            return $media;
        });
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
