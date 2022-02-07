<?php

namespace App\Http\Requests;

use App\Models\PathwayUniversity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePathwayUniversityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pathway_university_create');
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
            'city_id' => [
                'integer',
                'exists:cities,id',
                'required',
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
            'featured_image' => [
                'array',
                'required',
            ],
            'featured_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'photos' => [
                'array',
                'nullable',
            ],
            'photos.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
