<?php

namespace App\Http\Requests;

use App\Models\SubjectProgram;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class UpdateSubjectProgramRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('subject_program_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'entry_requirements' => [
                'string',
                'required',
            ],
            'months_of_entry' => [
                'date_format:' . config('project.date_format'),
                'required',
            ],
            'course_content' => [
                'string',
                'nullable',
            ],
            'fees_and_funding' => [
                'numeric',
                'required',
            ],
            'qualification_and_course_duration' => [
                'string',
                'nullable',
            ],
            'university_id' => [
                'integer',
                'exists:university_subjects,id',
                'required',
            ]
            ,
            'subject_id' => [
                'integer',
                'exists:subjects,id',
                'required',
            ],
            'type' => [
                'required',
                'in:' . implode(',', Arr::pluck(SubjectProgram::TYPE_SELECT, 'value')),
            ],
        ];
    }
}
