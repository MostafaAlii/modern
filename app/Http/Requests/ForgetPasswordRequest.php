<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class ForgetPasswordRequest extends FormRequest
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
            'email'         =>      'required|email',
            'password'      =>      'required|confirmed',
            'password_confirmation' =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required'        =>  trans('admin.email_required') ,
            'email.email'           =>  trans('admin.real_email') ,
            'password.required'     =>  trans('admin.password_required'),
            'confirmed'             =>  trans('admin.password_confirmed'),
            'password_confirmation' =>  trans('admin.password_confirmation_required'),
        ];
    }
}
