<?php

namespace App\Http\Requests;

use App\Models\Coupon;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class StoreCouponRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('coupon_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'code' => [
                'string',
                'min:6',
                'max:14',
                'required',
            ],
            'type' => [
                'required',
                'in:' . implode(',', Arr::pluck(Coupon::TYPE_SELECT, 'value')),
            ],
            'value' => [
                'numeric',
                'required',
            ],
            'count' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'expired_at' => [
                'date_format:' . config('project.datetime_format'),
                'required',
            ],
            'status' => [
                'nullable',
                'in:' . implode(',', Arr::pluck(Coupon::STATUS_SELECT, 'value')),
            ],
        ];
    }
}
