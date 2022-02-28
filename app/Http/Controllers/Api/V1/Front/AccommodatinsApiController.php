<?php

namespace App\Http\Controllers\Api\V1\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\CountryResource;
use App\Http\Resources\Admin\SemesterAccommodationResource;
use App\Models\City;
use App\Models\Country;
use App\Models\SemesterAccommodation;
use Illuminate\Http\Request;

class AccommodatinsApiController extends Controller
{
    public function getcountres(Request $request)
    {
        $countries = Country::join('cities', 'countries.id', '=', 'cities.country_id')
        ->join('semester_accommodations', 'semester_accommodations.city_id', '=', 'cities.id')
        ->select('countries.*')
        ->distinct()
        ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
        ->get();

        return $countries;
    }
    public function getcitybycountry(Request $request)
    {
        $cities = City::join('countries', 'cities.country_id', '=', 'countries.id')
        ->join('semester_accommodations', 'semester_accommodations.city_id', '=', 'cities.id')
        ->select('cities.*')
        ->distinct()
        ->where('countries.id', $request->countryid)
        ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
        ->get();

        return $cities;
    }
    public function filtercourse()
    {
        /* $products = University::with(['city','courseweekly','courseweekly.availability','courseweekly.accommodations','courseweekly.extra','courseweekly.language', 'feature','city.country'])->withFilters()->get();
        return UniversityResource::collection($products);*/
        $products = SemesterAccommodation::with(['city','city.country','features','semesteraccommvariante'])->withFilters()->get();
 
        return SemesterAccommodationResource::collection($products);
    }
}
