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

class UnivercityCourse extends Model implements HasMedia
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use HasMediaTrait;

    public $table = 'univercity_courses';

    protected $appends = [
        'photos',
        'featured_image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $orderable = [
        'id',
        'name',
        'city.name',
        'language.name',
        'twitter_link',
        'instagram_link',
        'facebook_link',
    ];

    protected $fillable = [
        'name',
        'description',
        'city_id',
        'language_id',
        'twitter_link',
        'instagram_link',
        'facebook_link',
        'created_at',
        'updated_at',
        'deleted_at',
        'owner_id',
    ];

    protected $filterable = [
        'id',
        'name',
        'city.name',
        'language.name',
        'availability.name',
        'extra.name',
        'accommodation.name',
        'twitter_link',
        'instagram_link',
        'facebook_link',
        'features.name',
    ];
    const PRICES = [
        'Less than 50',
        'From 50 to 100',
        'From 100 to 500',
        'More than 500',
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

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function availability()
    {
        return $this->belongsToMany(Availability::class);
    }

    public function extra()
    {
        return $this->belongsToMany(Extra::class);
    }

    public function accommodation()
    {
        return $this->belongsToMany(Accommodation::class);
    }

    public function getPhotosAttribute()
    {
        return $this->getMedia('univercity_course_photos')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();
            $media['thumbnail'] = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

            return $media;
        });
    }

    public function getFeaturedImageAttribute()
    {
        return $this->getMedia('univercity_course_featured_image')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();
            $media['thumbnail'] = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

            return $media;
        });
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
    public function weeklycourses()
    {
        return $this->hasMany(WeeklyCourse::class,'university_id');
    }
    public function semestrecourses()
    {
        return $this->hasMany(SemesterCourse::class,'university_id');
    }
    
    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function scopeWithFilters($query)
    {
    
        $arrayuniversitiesbycoubtry = [];
        if(request()->input('country')){
        $universities =  UnivercityCourse::
        join('cities', 'cities.id', '=', 'univercity_courses.city_id')
        ->join('countries', 'countries.id', '=', 'cities.country_id')
        ->join('feature_univercity_course', 'feature_univercity_course.univercity_course_id', '=', 'univercity_courses.id')
        ->join('weekly_courses', 'weekly_courses.university_id', '=', 'univercity_courses.id')
        ->select('weekly_courses.university_id')
        ->where('countries.id', request()->input('country'))
        ->when(count(request()->input('features', [])), function ($query) {
            $query->whereIn('feature_univercity_course.feature_id', request()->input('features'));
        })
        ->when(count(request()->input('prices', [])), function ($query) {
            
            $query->where(function ($query) {
                $query->when(in_array(0, request()->input('prices')), function ($query) {
                    $query->orWhere('weekly_courses.price', '<', '50');
                })
                ->when(in_array(1, request()->input('prices')), function ($query) {
                    $query->orWhereBetween('weekly_courses.price', ['50', '100']);
                })
                ->when(in_array(2, request()->input('prices')), function ($query) {
                    $query->orWhereBetween('weekly_courses.price', ['100', '500']);
                })
                ->when(in_array(3, request()->input('prices')), function ($query) {
                    $query->orWhere('weekly_courses.price', '>', '500');
                });
            });
        })
        ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
        ->get()
        ->toArray();
        $i=0;
        foreach($universities as $university){
            
            $arrayuniversitiesbycoubtry[$i] = $university->university_id;
            $i++;
        }
        array_push($arrayuniversitiesbycoubtry,0);
    }

        return $query->when(request()->input('language'), function ($query) {
                $query->where('language_id', '=' ,request()->input('language'));
            })
            ->when(request()->input('city'), function ($query) {
                $query->where('city_id', request()->input('city'));
            })
            ->when($arrayuniversitiesbycoubtry, function ($query) use ($arrayuniversitiesbycoubtry) {
                $query->whereIn('id', $arrayuniversitiesbycoubtry);
            });
    }  
}
