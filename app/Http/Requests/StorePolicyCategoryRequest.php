<?php

namespace App\Http\Requests;

use App\Models\PolicyCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePolicyCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('policy_category_create');
    }

    public function rules()
    {
        return [
            'categories' => [
                'string',
                'required',
                'unique:policy_categories',
            ],
        ];
    }
}
