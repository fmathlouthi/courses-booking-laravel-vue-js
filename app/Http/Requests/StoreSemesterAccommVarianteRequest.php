<?php

namespace App\Http\Requests;

use App\Models\SemesterAccommVariante;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSemesterAccommVarianteRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('semester_accomm_variante_create');
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
            
            'bookfee' => [
                'numeric',
                'required',
            ],
            'weeksnumber' => [
                'integer',
                'required',
            ],
            'semester_accommodation_id' => [
                'integer',
                'exists:semester_accommodations,id',
                'required',
            ],
        ];
    }
}
