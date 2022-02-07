<?php

namespace App\Http\Requests;

use App\Models\Pathway;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class UpdatePathwayRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pathway_edit');
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
            'progression_program' => [
                'string',
                'nullable',
            ],
            'price' => [
                'numeric',
                'required',
            ],
            'university_id' => [
                'integer',
                'exists:pathway_universities,id',
                'required',
            ],
            'type' => [
                'required',
                'in:' . implode(',', Arr::pluck(Pathway::TYPE_SELECT, 'value')),
            ],
        ];
    }
}
