<?php

namespace App\Http\Requests;

use App\Models\Policy;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePolicyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('policy_edit');
    }

    public function rules()
    {
        return [
            'policy' => [
                'array',
                'required',
            ],
            'policy.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'name' => [
                'string',
                'required',
            ],
            'categories_id' => [
                'integer',
                'exists:policy_categories,id',
                'required',
            ],
            'level_no' => [
                'string',
                'required',
            ],
            'allow_date' => [
                'date_format:' . config('project.date_format'),
                'required',
            ],
            'description' => [
                'string',
                'nullable',
            ],
        ];
    }
}
