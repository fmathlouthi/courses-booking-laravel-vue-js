<?php

namespace App\Http\Requests;

use App\Models\SemesterCourseVariante;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSemesterCourseVarianteRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('semester_course_variante_create');
    }

    public function rules()
    {
        return [
            'starting_date' => [
                'date_format:' . config('project.date_format'),
                'required',
            ],
            'price' => [
                'numeric',
                'required',
            ],
            'semester_course_id' => [
                'integer',
                'exists:semester_courses,id',
                'required',
            ],
        ];
    }
}
