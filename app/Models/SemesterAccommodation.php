<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class SemesterAccommodation extends Model implements HasMedia
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use HasMediaTrait;

    public $table = 'semester_accommodations';

    protected $appends = [
        'photos',
        'featured_image',
        'min_price'
    ];

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
    public function getPhotosAttribute()
    {
        return $this->getMedia('accommodations_photos')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();
            $media['thumbnail'] = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

            return $media;
        });
    }
    public function getFeaturedImageAttribute()
    {
        return $this->getMedia('accommodations_featured_image')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();
            $media['thumbnail'] = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

            return $media;
        });
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function semesteraccommvariante()
    { 
        return $this->hasMany(SemesterAccommVariante::class);
    }
  
    public function getMinPriceAttribute ()
    {
            return $this->semesteraccommvariante()->min('price');
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



    public function scopeWithFilters($query)
    {
    
        $arrayuniversitiesbycoubtry = [];
        if(request()->input('country')){
        $universities =  SemesterAccommodation::
        join('cities', 'cities.id', '=', 'semester_accommodations.city_id')
        ->join('countries', 'countries.id', '=', 'cities.country_id')
        ->select('semester_accommodations.id')
        ->where('countries.id', request()->input('country'))
        ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
        ->get()
        ->toArray();
        $i=0;
        foreach($universities as $university){
            
            $arrayuniversitiesbycoubtry[$i] = $university->id;
            $i++;
        }
        array_push($arrayuniversitiesbycoubtry,0);
    }

        return $query->when(request()->input('city'), function ($query) {
                $query->where('city_id', request()->input('city'));
            })
            ->when($arrayuniversitiesbycoubtry, function ($query) use ($arrayuniversitiesbycoubtry) {
                $query->whereIn('id', $arrayuniversitiesbycoubtry);
            });
    }  
}
