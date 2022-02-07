<?php

namespace App\Http\Requests;

use App\Models\UnivercityCourse;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUnivercityCourseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('univercity_course_create');
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
            'language_id' => [
                'integer',
                'exists:languages,id',
                'required',
            ],
            'availability' => [
                'required',
                'array',
            ],
            'availability.*.id' => [
                'integer',
                'exists:availabilities,id',
            ],
            'extra' => [
                'array',
            ],
            'extra.*.id' => [
                'integer',
                'exists:extras,id',
            ],
            'accommodation' => [
                'required',
                'array',
            ],
            'accommodation.*.id' => [
                'integer',
                'exists:accommodations,id',
            ],
            'twitter_link' => [
                'string',
                'nullable',
            ],
            'instagram_link' => [
                'string',
                'nullable',
            ],
            'facebook_link' => [
                'string',
                'nullable',
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
            'features' => [
                'array',
            ],
            'features.*.id' => [
                'integer',
                'exists:features,id',
            ],
        ];
    }
}
