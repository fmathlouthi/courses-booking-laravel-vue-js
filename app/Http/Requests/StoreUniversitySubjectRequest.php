<?php

namespace App\Http\Requests;

use App\Models\UniversitySubject;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class StoreUniversitySubjectRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('university_subject_create');
    }

    public function rules() 
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'facebook_link' => [
                'string',
                'nullable',
            ],
            'instagram_link' => [
                'string',
                'nullable',
            ],
            'twitter_link' => [
                'string',
                'nullable',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'pathbrochure' => [
                'array',
                'nullable',
            ],
            'pathbrochure.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'city_id' => [
                'integer',
                'exists:cities,id',
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
            'type' => [
                'required',
                'in:' . implode(',', Arr::pluck(UniversitySubject::TYPE_SELECT, 'value')),
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
