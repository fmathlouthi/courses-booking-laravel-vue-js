<?php

namespace App\Http\Controllers\Api\V1\Front;

use App\Http\Controllers\Controller;
use App\Models\Accommodation;
use App\Models\Coupon;
use App\Models\CourseOrder;
use App\Models\Extra;
use App\Models\User;
use App\Models\WeeklyCourse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CheckoutApiController extends Controller
{
 
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'bookings' => 'required|array|min:1',
            'bookings.*.bookable.idcourse' => 'required',//|exists:weekly_courses,id',
            'bookings.*.bookable.startDate' => 'required',
            'bookings.*.bookable.idextra' => '',
            'bookings.*.bookable.idacom' => '',
            'customer.first_name' => 'required|min:2',
            'customer.last_name' => 'required|min:2',
            'customer.phone' => 'required|min:8',
            'customer.email' => 'required|email',
            'customer.country' => 'required|min:2',
            'customer.address_1' => 'required|min:2',
            'customer.address_2' => 'required|min:2',
            'customer.post_code' => 'required|min:2',
            'discount.coupon' => '',
            'discount.discount' => 'required|min:1',
            'discount.from' => 'required|min:2',
            'discount.to' => 'required|min:2',
            'customer.password' => 'required|min:6',
        ]);
       

        $bookingsData = $data['bookings'];
        $contactData = $data['customer'];
        $discountData = $data['discount'];
        if(Auth::user())
        {
            $client = Auth::user();
        }
        else{
        $client = User::create([
            'name'     => $contactData['first_name'],
            'email'    => $contactData['email'],
            'password' => Hash::make($contactData['password']),
            'email_verified_at' => Carbon::now(),
        ]);
        $client->roles()->sync(3);
        Auth::login($client);
    }
        $bookings = collect($bookingsData)->map(function ($bookingData) use ($client,$contactData,$discountData) {
           
            $bookable = WeeklyCourse::findOrFail($bookingData["bookable"]['idcourse']);
            if($discountData['coupon']){
            $coupon = Coupon::findOrFail($discountData['coupon']);
            }else{
                $coupon=null;
            }
            if($bookingData["bookable"]['idextra']){
            $extra = Extra::findOrFail($bookingData["bookable"]['idextra']);
        }else{
            $extra=null;
        }
            if($bookingData["bookable"]['idacom']){
            $accommodation = Accommodation::findOrFail($bookingData["bookable"]['idacom']);
        }else{
            $accommodation=null;
        }
            $owner = User::findOrFail($bookable->owner_id);

            $booking = new CourseOrder();
            $booking->sub_total = 1220;
            $booking->total_amount = 15200;//$discountData['to'];
            $booking->order_number = Str::random(40);
            $booking->first_name = $contactData['first_name'];
            $booking->payment_method = 'paypal';
            $booking->payment_status = 'unpaid';
            $booking->status = 'process';
            $booking->last_name = $contactData['last_name'];
            $booking->email = $contactData['email'];
            $booking->phone = $contactData['phone'];
            $booking->country = $contactData['country'];
            $booking->post_code = $contactData['post_code'];
            $booking->address_1 = $contactData['address_1'];
            $booking->address_2 = $contactData['address_2'];
            $time = strtotime($bookingData["bookable"]['startDate']);

$newformat = date('Y-m-d',$time);
            $booking->start_date = $newformat;

            $booking->client()->associate($client);
            if($coupon){
                $booking->coupon()->associate($coupon);
            }
            
            $booking->course()->associate($bookable);
            if($extra){
            $booking->extra()->associate($extra);
            }
            if($accommodation){
            $booking->accommodation()->associate($accommodation);
            }
            $booking->owner()->associate($owner);

            $booking->save();

            return $booking;
        });

        return $bookings;
    }
}
