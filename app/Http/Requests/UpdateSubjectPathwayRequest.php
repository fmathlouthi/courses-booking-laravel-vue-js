<?php

namespace App\Http\Requests;

use App\Models\Subject;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
class UpdateSubjectPathwayRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('availability_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required', 
            ],
            'status' => [
                'required',
                'in:' . implode(',', Arr::pluck(Subject::STATUS_SELECT, 'value')),
            ],
        ];
    }
}
