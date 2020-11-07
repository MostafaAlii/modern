<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'email'         =>      'required|email',
            'password'      =>      'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required'        =>  trans('admin.email_required') ,
            'email.email'           =>  trans('admin.real_email') ,
            'password.required'     =>  trans('admin.password_required'),
        ];
    }
}
