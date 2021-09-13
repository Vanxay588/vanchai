<?php

namespace App\Http\Requests;

use App\Models\StatisticCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStatisticCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('statistic_category_edit');
    }

    public function rules()
    {
        return [
            'categories' => [
                'string',
                'required',
                'unique:statistic_categories,categories,' . request()->route('statistic_category')->id,
            ],
        ];
    }
}
