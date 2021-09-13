<?php

namespace App\Http\Requests;

use App\Models\ExaminationResult;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateExaminationResultRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('examination_result_edit');
    }

    public function rules()
    {
        return [
            'academic_years' => [
                'string',
                'required',
            ],
            'examination_result' => [
                'array',
                'required',
            ],
            'examination_result.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}
