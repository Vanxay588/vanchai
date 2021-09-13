<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'surname' => [
                'string',
                'required',
            ],
            'gender' => [
                'required',
                'in:' . implode(',', Arr::pluck(User::GENDER_RADIO, 'value')),
            ],
            'date_of_birth' => [
                'date_format:' . config('project.date_format'),
                'required',
            ],
            'email' => [
                'required',
                'unique:users',
            ],
            'password' => [
                'required',
            ],
            'roles' => [
                'required',
                'array',
            ],
            'roles.*.id' => [
                'integer',
                'exists:roles,id',
            ],
        ];
    }
}
