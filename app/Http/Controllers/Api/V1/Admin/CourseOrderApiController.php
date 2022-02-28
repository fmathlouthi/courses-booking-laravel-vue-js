<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseOrderRequest;
use App\Http\Requests\UpdateCourseOrderRequest;
use App\Http\Resources\Admin\CourseOrderResource;
use App\Models\Accommodation;
use App\Models\Coupon;
use App\Models\CourseOrder;
use App\Models\Extra;
use App\Models\User;
use App\Models\WeeklyCourse;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Auth;

class CourseOrderApiController extends Controller
{
    public function index()
    {
        
        abort_if(Gate::denies('course_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user = Auth::user();
        $role = $user->roles;
        $rolename=$role[0];
        
        if ( strcmp($rolename->title,"User") == 0) {
            
            return new CourseOrderResource(CourseOrder::with(['client', 'coupon', 'course', 'extra', 'accommodation'])->where('client_id',$user->id)->advancedFilter());
   
        }
        return new CourseOrderResource(CourseOrder::with(['client', 'coupon', 'course', 'extra', 'accommodation'])->advancedFilter());
    }

    public function store(StoreCourseOrderRequest $request)
    {
        $courseOrder = CourseOrder::create($request->validated());

        return (new CourseOrderResource($courseOrder))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('course_order_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'client'         => User::get(['id', 'name']),
                'coupon'         => Coupon::get(['id', 'name']),
                'course'         => WeeklyCourse::get(['id', 'name']),
                'extra'          => Extra::get(['id', 'name']),
                'accommodation'  => Accommodation::get(['id', 'name']),
                'payment_method' => CourseOrder::PAYMENT_METHOD_SELECT,
                'payment_status' => CourseOrder::PAYMENT_STATUS_SELECT,
                'status'         => CourseOrder::STATUS_SELECT,
            ],
        ]);
    }

    public function show(CourseOrder $courseOrder)
    {
        abort_if(Gate::denies('course_order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CourseOrderResource($courseOrder->load(['client', 'coupon', 'course', 'extra', 'accommodation']));
    }

    public function update(UpdateCourseOrderRequest $request, CourseOrder $courseOrder)
    {
        $courseOrder->update($request->validated());

        return (new CourseOrderResource($courseOrder))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(CourseOrder $courseOrder)
    {
        abort_if(Gate::denies('course_order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new CourseOrderResource($courseOrder->load(['client', 'coupon', 'course', 'extra', 'accommodation'])),
            'meta' => [
                'client'         => User::get(['id', 'name']),
                'coupon'         => Coupon::get(['id', 'name']),
                'course'         => WeeklyCourse::get(['id', 'name']),
                'extra'          => Extra::get(['id', 'name']),
                'accommodation'  => Accommodation::get(['id', 'name']),
                'payment_method' => CourseOrder::PAYMENT_METHOD_SELECT,
                'payment_status' => CourseOrder::PAYMENT_STATUS_SELECT,
                'status'         => CourseOrder::STATUS_SELECT,
            ],
        ]);
    }

    public function destroy(CourseOrder $courseOrder)
    {
        abort_if(Gate::denies('course_order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $courseOrder->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
    public function active( $id)
    {
        abort_if(Gate::denies('course_order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $courseOrder = CourseOrder::find($id);
        if($courseOrder->status == "process")
        {
            $courseOrder->status = "cancel";
        }
        else
        {
            $courseOrder->status = "process";
        }
        $courseOrder->save();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
