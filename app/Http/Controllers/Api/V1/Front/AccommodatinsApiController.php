<?php

namespace App\Http\Controllers\Api\V1\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\SemesterAccommodationResource;
use App\Models\City;
use App\Models\Country;
use App\Models\SemesterAccommodation;
use App\Models\SemesterAccommVariante;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AccommodatinsApiController extends Controller
{
    public function index()
    {
        $products = SemesterAccommodation::with(['city','city.country','features','semesteraccommvariante'])->withFilters()->get();

        return SemesterAccommodationResource::collection($products);
     //return new CourseweeklyPriceResource(CourseWeekly::with(['university', 'language', 'extra', 'availability', 'accommodations'])->withFilters()->get());
    }

    

    public function show(SemesterAccommodation $semesterAccommodation)
    { 
        //return new UniversityResource($university->load(['city','courseweekly','courseweekly.availability','courseweekly.accommodations','courseweekly.extra','courseweekly.language', 'feature','city.country']));
        return new SemesterAccommodationResource($semesterAccommodation->load(['city','city.country','features','semesteraccommvariante']));
    }
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
    public function priceforsemester($id, Request $request)
    {
        $bookableuniversity = SemesterAccommodation::findOrFail($id);
        $bookable = SemesterAccommVariante::findOrFail($request->acomv);
        //$date = Carbon::createFromFormat('Y-m-d', $bookable->startdate);
        $daysToAdd = $bookable->weeksnumber * 7;
        $date = Carbon::parse( $bookable->startdate)->addDays($daysToAdd)->format('Y-m-d');
       $price = $bookable->price * $bookable->weeksnumber +  $bookable->bookfee;
        return response()->json([
            'total' => number_format($price, 3),
            'idaccom' => $bookableuniversity->id,
            'coursename' => $bookableuniversity->name,
            'accomvarid' => $bookable->id,
            'fee' => $bookable->bookfee,
            'fromdate' => $date,
            'baseprice' => $bookable->price,
            'startDate' => $bookable, 
            'weeksnumber' => $bookable->weeksnumber, 
            'breakdown' => [
                'fee' => [number_format($bookable->bookfee, 3).' = ',number_format($bookable->bookfee, 3)],
                'price PW' => [number_format($bookable->price, 3).' = ',number_format($bookable->price, 3)],

            ]
        ]);
        
    }

}
