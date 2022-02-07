<?php

namespace App\Http\Requests;

use App\Models\WeeklyCourse;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWeeklyCourseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('weekly_course_create');
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
            'university_id' => [
                'integer',
                'exists:univercity_courses,id',
                'required',
            ],
        ];
    }
}
