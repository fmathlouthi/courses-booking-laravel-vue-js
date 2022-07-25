<?php

namespace App\Http\Requests;

use App\Models\PathwayRequest;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class UpdatePathwayRequestRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pathway_request_edit');
    }

    public function rules()
    {
        return [
            'student_first_name' => [
                'string',
                'nullable',
            ],
            'student_last_name' => [
                'string',
                'nullable',
            ],
            'gendre' => [
                'nullable',
                'in:' . implode(',', Arr::pluck(PathwayRequest::GENDRE_RADIO, 'value')),
            ],
            'nationality' => [
                'nullable',
                'in:' . implode(',', Arr::pluck(PathwayRequest::NATIONALITY_SELECT, 'value')),
            ],
            'level_of_study' => [
                'nullable',
                'in:' . implode(',', Arr::pluck(PathwayRequest::LEVEL_OF_STUDY_SELECT, 'value')),
            ],
            'email' => [
                'required',
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
            'state' => [
                'string',
                'nullable',
            ],
            'city' => [
                'string',
                'nullable',
            ],
            'address_1' => [
                'string',
                'required',
            ],
            'address_2' => [
                'string',
                'nullable',
            ],
            'special_needs' => [
                'string',
                'nullable',
            ],
            'comments' => [
                'string',
                'nullable',
            ],
            'preferred_intake' => [
                'string',
                'nullable',
            ],
            'university_degree_id' => [
                'integer',
                'exists:pathways,id',
                'nullable',
            ],
            'university_college' => [
                'string',
                'nullable',
            ],
            'secondary_school' => [
                'string',
                'nullable',
            ],
            'english_proficiency' => [
                'string',
                'nullable',
            ],
            'current_address' => [
                'string',
                'nullable',
            ],
            'date_of_birth' => [
                'date_format:' . config('project.date_format'),
                'nullable',
            ],
            'subject_id' => [
                'integer',
                'exists:subject_pathways,id',
                'nullable',
            ],
            'university_id' => [
                'integer',
                'exists:pathway_universities,id',
                'nullable',
            ],
        ];
    }
}
