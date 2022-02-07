<?php

namespace App\Http\Requests;

use App\Models\SemesterCourse;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSemesterCourseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('semester_course_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'university_id' => [
                'integer',
                'exists:univercity_courses,id',
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
