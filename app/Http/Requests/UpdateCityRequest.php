<?php

namespace App\Http\Requests;

use App\Models\City;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class UpdateCityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('city_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'status' => [
                'required',
                'in:' . implode(',', Arr::pluck(City::STATUS_SELECT, 'value')),
            ],
            'country_id' => [
                'integer',
                'exists:countries,id',
                'required',
            ],
        ];
    }
}
