<?php

namespace App\Http\Controllers\Api\V1\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\UnivercityCourseResource;
use App\Models\Accommodation;
use App\Models\Coupon;
use App\Models\Extra;
use App\Models\SemesterCourseVariante;
use App\Models\UnivercityCourse;
use App\Models\WeeklyCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CoursesUniversitiesApiController extends Controller
{
    public function index()
    {
        $products = UnivercityCourse::with(['city','features', 'language', 'extra', 'availability', 'accommodation','semestrecourses','weeklycourses'])->withFilters()->get();

        return UnivercityCourseResource::collection($products);
     //return new CourseweeklyPriceResource(CourseWeekly::with(['university', 'language', 'extra', 'availability', 'accommodations'])->withFilters()->get());
    }

    

    public function show(UnivercityCourse $courseWeekly)
    {
        //return new UniversityResource($university->load(['city','courseweekly','courseweekly.availability','courseweekly.accommodations','courseweekly.extra','courseweekly.language', 'feature','city.country']));
        return new UnivercityCourseResource($courseWeekly->load(['city','features', 'language', 'extra', 'availability', 'accommodation','semestrecourses','semestrecourses.semestrecoursesvariante','weeklycourses']));
    }
    public function pricefor($id, Request $request)
    {
        $bookableuniversity = UnivercityCourse::findOrFail($id);
        $bookable = WeeklyCourse::findOrFail($request->courseid);
       $weeksnumber = $request->weeksnumber;
       $weeksnumberaccom = $request->weeksnumberaccom;
        $pricecourse = $weeksnumber * $bookable->price;
        if($request->acomid)
        {
            
            $bookableacom = Accommodation::findOrFail($request->acomid);
            $pricetotalacom = $weeksnumberaccom * $bookableacom->price;
            $idacom = $bookableacom->id;
            $priceacom = $bookableacom->price;
        }
        else{
            $pricetotalacom = 0;
            $priceacom = 0;
            $idacom = 0;
        }
        if($request->extraid)
        {
            $bookableextra = Extra::findOrFail($request->extraid);
            $pricetotalExtra =  $bookableextra->price;
            $idextra = $bookableextra->id;
            $priceextra = $bookableextra->price;
        }
        else{
            $pricetotalExtra = 0;
            $priceextra = 0;
            $idextra = 0;
        }
        $price = $pricecourse + $pricetotalExtra + $pricetotalacom;
        if( $request->startdate){
        $date = Carbon::createFromFormat('Y-m-d', $request->startdate);
$daysToAdd = $weeksnumber * 7;
$date = $date->addDays($daysToAdd)->format('Y-m-d');
}else{
    $date = $request->startdate;
}
if( $weeksnumberaccom){
    $dateaccom = Carbon::createFromFormat('Y-m-d', $request->startdate);
$daysToAdd = $weeksnumberaccom * 7;
$dateaccom = $dateaccom->addDays($daysToAdd)->format('Y-m-d');
}else{
$dateaccom = 0;
}
        return response()->json([
            'total' => number_format($price, 3),
            'idcourse' => $bookable->id,
            'coursename' => $bookable->name,
            'universityname' => $bookableuniversity->name,
            'idacom' => $idacom,
            'idextra' => $idextra,
            'startDate' => $request->startdate,
            'fromdate' => $date,
            'weeksnumber' => $weeksnumber,
            'weeksnumberaccom' => $weeksnumberaccom,
            'todateaccom' => $dateaccom,
            'breakdown' => [
                'Course' => [$weeksnumber.'  * '.number_format($bookable->price, 3).' = ',number_format($pricecourse, 3)],
                'extra' => [number_format($priceextra, 3).' = ',number_format($pricetotalExtra, 3)],
                'accommodation' => [$weeksnumberaccom.' * '.number_format($priceacom, 3).' = ',number_format($pricetotalacom, 3)],

            ]
        ]);
        
    }
    public function checklogin()
    {
        
        return response()->json([
            'auth_user' => Auth::user() 
        ]);
    }
    //price for semester course

    public function priceforsemester($id, Request $request)
    {
        $bookableuniversity = UnivercityCourse::findOrFail($id);
        $bookable = SemesterCourseVariante::with(['semesterCourse'])->findOrFail($request->coursevarid);
        
       $weeksnumberaccom = $request->weeksnumberaccomsemester;
        $pricecourse =  $bookable->semesterCourse->price;
        if($request->acomid)
        {
            
            $bookableacom = Accommodation::findOrFail($request->acomid);
            $pricetotalacom = $weeksnumberaccom * $bookableacom->price;
            $idacom = $bookableacom->id;
            $priceacom = $bookableacom->price;
        }
        else{
            $pricetotalacom = 0;
            $priceacom = 0;
            $idacom = 0;
        }
        if($request->extraid)
        {
            $bookableextra = Extra::findOrFail($request->extraid);
            $pricetotalExtra =  $bookableextra->price;
            $idextra = $bookableextra->id;
            $priceextra = $bookableextra->price;
        }
        else{
            $pricetotalExtra = 0;
            $priceextra = 0;
            $idextra = 0;
        }
        $price = $pricecourse + $pricetotalExtra + $pricetotalacom;
        
        return response()->json([
            'total' => number_format($price, 3),
            'idcourse' => $bookable->id,
            'coursename' => $bookable->semesterCourse->name,
            'universityname' => $bookableuniversity->name,
            'weeksnumberaccom' => $weeksnumberaccom,
            'idacom' => $idacom,
            'idextra' => $idextra,
            'startDate' => $bookable, 
            'weeksnumber' => 'semester',
            'breakdown' => [
                'Course' => [number_format($bookable->price, 3).' = ',number_format($pricecourse, 3)],
                'extra' => [number_format($priceextra, 3).' = ',number_format($pricetotalExtra, 3)],
                'accommodation' => [number_format($priceacom, 3).' = ',number_format($pricetotalacom, 3)],

            ]
        ]);
        
    }

    public function promocode(Request $request)
    {
        $coupon = Coupon::where('code',$request->promocode)->firstOrFail();
        $total = (float)filter_var($request->total, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) ;

        if($coupon->type == "percentage")
        {
            $discount = $total * ($coupon->value / 100);
        }else{
            $discount = $coupon->value;
        }
       
        return response()->json([
            'totalafterdiscount' => number_format(($total - $discount), 3),
            'discount' => number_format($discount, 3),
            'total' => number_format($total, 3),
            'coupon' => $coupon->id
           
        ]);
        
    }

}
