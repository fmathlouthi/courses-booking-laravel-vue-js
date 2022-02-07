<?php

namespace App\Http\Requests;

use App\Models\WeeklyAccommodation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWeeklyAccommodationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('weekly_accommodation_create');
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
            'city_id' => [
                'integer',
                'exists:cities,id',
                'required',
            ],
            'availability' => [
                'array',
            ],
            'availability.*.id' => [
                'integer',
                'exists:availabilities,id',
            ],
            'features' => [
                'required',
                'array',
            ],
            'features.*.id' => [
                'integer',
                'exists:features,id',
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
                'required',
            ],
            'featured_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
