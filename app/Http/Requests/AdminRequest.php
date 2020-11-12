<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          =>  'required|string|max:60',
            'username'      =>  'required|string|max:10',
            'password'      =>      'required',
            'email'         =>  'required|email',
        ];
    }

    public function messages()
    {
        return [
            'name.required'             =>  trans('admin.name_required'),
            'username.required'         =>  trans('admin.username_required'),
            'name.max'                  =>  trans('admin.name_max'),
            'username.max'              =>  trans('admin.username_max'),
            'email.required'            =>  trans('admin.email_required') ,
            'email.email'               =>  trans('admin.real_email') ,
            'password.required'     =>  trans('admin.password_required'),
        ];
    }
}
