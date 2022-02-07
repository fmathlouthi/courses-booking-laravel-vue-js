<?php

namespace App\Http\Controllers\Api\V1\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\LanguageResource;
use App\Http\Resources\Admin\UnivercityCourseResource;
use App\Models\City;
use App\Models\Country;
use App\Models\Language;
use App\Models\UnivercityCourse;
use Illuminate\Http\Request;

class LanguagesUniversitiesApiController extends Controller
{
    public function index()
    {
        $languages = Language::withCount('coursesuniversties' )
        ->having('coursesuniversties_count', '>', 0)
            ->get();

        return LanguageResource::collection($languages);
    }
    public function getcountrybylanguage(Request $request)
    {
        $countries = Country::join('cities', 'countries.id', '=', 'cities.country_id')
        ->join('univercity_courses', 'univercity_courses.city_id', '=', 'cities.id')
        ->join('languages', 'univercity_courses.language_id', '=', 'languages.id')
        ->select('countries.*')
        ->distinct()
        ->where('univercity_courses.language_id', $request->languageId)
        ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
        ->get();

        return $countries;
    }
    public function getcitybycountry(Request $request)
    {
        $cities = City::join('countries', 'cities.country_id', '=', 'countries.id')
        ->join('univercity_courses', 'univercity_courses.city_id', '=', 'cities.id')
        ->join('languages', 'univercity_courses.language_id', '=', 'languages.id')
        ->select('cities.*')
        ->distinct()
        ->where('countries.id', $request->countryid)
        ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
        ->get();

        return $cities;
    }


    public function universitiescourse()
    {
        $products = UnivercityCourse::with(['city','features', 'language', 'extra', 'availability', 'accommodation','semestrecourses','weeklycourses'])->get();

        return UnivercityCourseResource::collection($products);
     //return new CourseweeklyPriceResource(CourseWeekly::with(['university', 'language', 'extra', 'availability', 'accommodations'])->withFilters()->get());
    }
    public function filtercourse()
    {
        /* $products = University::with(['city','courseweekly','courseweekly.availability','courseweekly.accommodations','courseweekly.extra','courseweekly.language', 'feature','city.country'])->withFilters()->get();
        return UniversityResource::collection($products);*/
        $products = UnivercityCourse::with(['city','features', 'language', 'extra', 'availability', 'accommodation','semestrecourses','weeklycourses'])->withFilters()->get();
 
        return UnivercityCourseResource::collection($products);
    }
}
