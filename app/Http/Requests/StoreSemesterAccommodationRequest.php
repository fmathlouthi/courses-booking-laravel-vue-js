<?php

namespace App\Http\Requests;

use App\Models\SemesterAccommodation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSemesterAccommodationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('semester_accommodation_create');
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
            'city_id' => [
                'integer',
                'exists:cities,id',
                'required',
            ],
            'features' => [
                'array',
            ],
            'features.*.id' => [
                'integer',
                'exists:features,id',
            ],

            
            'price' => [
            ],
            'photos' => [
                'array',
                'nullable',
            ],
            'photos.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'featured_image' => [
                'array',
                'nullable',
            ],
            'featured_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
        


        ];
    }
}
