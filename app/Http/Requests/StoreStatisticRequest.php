<?php

namespace App\Http\Requests;

use App\Models\Statistic;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStatisticRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('statistic_create');
    }

    public function rules()
    {
        return [
            'statistic' => [
                'array',
                'required',
            ],
            'statistic.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'name' => [
                'string',
                'required',
            ],
            'categories_id' => [
                'integer',
                'exists:statistic_categories,id',
                'required',
            ],
        ];
    }
}
