<?php

namespace App\Http\Requests;

use App\Models\PolicyCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePolicyCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('policy_category_edit');
    }

    public function rules()
    {
        return [
            'categories' => [
                'string',
                'required',
                'unique:policy_categories,categories,' . request()->route('policy_category')->id,
            ],
        ];
    }
}
