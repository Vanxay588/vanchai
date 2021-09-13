<?php

namespace App\Http\Requests;

use App\Models\DownloadCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDownloadCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('download_category_create');
    }

    public function rules()
    {
        return [
            'categories' => [
                'string',
                'required',
                'unique:download_categories',
            ],
        ];
    }
}