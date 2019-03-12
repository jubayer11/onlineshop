<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateRequest extends FormRequest
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
            //

            'username'=>'bail|required|unique:admins,user_name,'.$this->admin.'|max:255',
            'name'=>'required',
            'email'=>'bail|required|unique:admins,email,'.$this->admin.'|max:255',
            'password'=>'required',
            'status'=>'required',
            'role'=>'required',

        ];



    }
    public function messages()
    {
        return [
            'username.required' => 'A UserName is required',
            'username.unique'=>'UserName is not Unique',
            'email.unique'=>'email must be Unique',

            'email.required'  => 'An email is required',
        ];

    }
}
