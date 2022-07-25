<?php

namespace App\Http\Requests;

use App\Models\CourseOrder;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class UpdateCourseOrderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('course_order_edit');
    }

    public function rules()
    {
        return [
            'order_number' => [
                'string',
                'min:10',
                'required',
                'unique:course_orders,order_number,' . request()->route('course_order')->id,
            ],
            'client_id' => [
                'integer',
                'exists:users,id',
                'required',
            ],
            'sub_total' => [
                'numeric',
                'required',
            ],
            'coupon_id' => [
                'integer',
                'exists:coupons,id',
                'nullable',
            ],
            'total_amount' => [
                'numeric',
                'nullable',
            ],
            'payment_method' => [
                'required',
                'in:' . implode(',', Arr::pluck(CourseOrder::PAYMENT_METHOD_SELECT, 'value')),
            ],
            'payment_status' => [
                'nullable',
                'in:' . implode(',', Arr::pluck(CourseOrder::PAYMENT_STATUS_SELECT, 'value')),
            ],
            'status' => [
                'nullable',
                'in:' . implode(',', Arr::pluck(CourseOrder::STATUS_SELECT, 'value')),
            ],
            'first_name' => [
                'string',
                'nullable',
            ],
            'last_name' => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'country' => [
                'string',
                'nullable',
            ],
            'post_code' => [
                'string',
                'nullable',
            ],
            'address_1' => [
                'string',
                'nullable',
            ],
            'address_2' => [
                'string',
                'nullable',
            ],
            'course_id' => [
                'integer',
                'exists:weekly_courses,id',
                'nullable',
            ],
            'extra_id' => [
                'integer',
                'exists:extras,id',
                'nullable',
            ],
            'accommodation_id' => [
                'integer',
                'exists:accommodations,id',
                'nullable',
            ],
            'start_date' => [
                'date_format:' . config('project.date_format'),
                'nullable',
            ],
        ];
    }
}
