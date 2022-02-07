<?php

namespace App\Http\Requests;

use App\Models\Accommodation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAccommodationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('accommodation_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'price' => [
                'numeric',
                'required',
            ],
        ];
    }
}
