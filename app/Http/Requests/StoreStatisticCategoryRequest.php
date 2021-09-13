<?php

namespace App\Http\Requests;

use App\Models\StatisticCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStatisticCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('statistic_category_create');
    }

    public function rules()
    {
        return [
            'categories' => [
                'string',
                'required',
                'unique:statistic_categories',
            ],
        ];
    }
}