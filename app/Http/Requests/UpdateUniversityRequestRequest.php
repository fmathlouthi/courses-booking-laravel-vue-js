<?php

namespace App\Http\Requests;

use App\Models\UniversityRequest;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class UpdateUniversityRequestRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('university_request_edit');
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
                'in:' . implode(',', Arr::pluck(UniversityRequest::GENDRE_RADIO, 'value')),
            ],
            'nationality' => [
                'nullable',
                'in:' . implode(',', Arr::pluck(UniversityRequest::NATIONALITY_SELECT, 'value')),
            ],
            'level_of_study' => [
                'nullable',
                'in:' . implode(',', Arr::pluck(UniversityRequest::LEVEL_OF_STUDY_SELECT, 'value')),
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
                'required',
            ],
            'post_code' => [
                'string',
                'required',
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
                'nullable',
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
                'required',
            ],
            'university_degree' => [
                'string',
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
                'exists:subjects,id',
                'nullable',
            ],
            'university_id' => [
                'integer',
                'exists:university_subjects,id',
                'nullable',
            ],
        ];
    }
}
