<?php

namespace App\Http\Requests;

use App\Models\Download;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDownloadRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('download_edit');
    }

    public function rules()
    {
        return [
            'download' => [
                'array',
                'required',
            ],
            'download.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'name' => [
                'string',
                'required',
            ],
            'categories_id' => [
                'integer',
                'exists:download_categories,id',
                'required',
            ],
            'photo' => [
                'array',
            ],
            'photo.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
