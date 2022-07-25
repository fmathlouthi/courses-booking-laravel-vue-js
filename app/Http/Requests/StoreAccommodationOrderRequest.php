<?php

namespace App\Http\Requests;

use App\Models\AccommodationOrder;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class StoreAccommodationOrderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('course_order_create');
    }

    public function rules()
    {
        return [
            'order_number' => [
                'string',
                'min:10',
                'required',
                'unique:course_orders',
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
            'total_amount' => [
                'numeric',
                'nullable',
            ],
            'payment_method' => [
                'required',
                'in:' . implode(',', Arr::pluck(AccommodationOrder::PAYMENT_METHOD_SELECT, 'value')),
            ],
            'payment_status' => [
                'nullable',
                'in:' . implode(',', Arr::pluck(AccommodationOrder::PAYMENT_STATUS_SELECT, 'value')),
            ],
            'status' => [
                'nullable',
                'in:' . implode(',', Arr::pluck(AccommodationOrder::STATUS_SELECT, 'value')),
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
            'accommodationvariante_id' => [
                'integer',
                'exists:semester_accomm_variantes,id',
                'nullable',
            ],
            'accommodation_id' => [
                'integer',
                'exists:semester_accommodations,id',
                'nullable',
            ],
            'start_date' => [
                'date_format:' . config('project.date_format'),
                'nullable',
            ],
        ];
    }
}
