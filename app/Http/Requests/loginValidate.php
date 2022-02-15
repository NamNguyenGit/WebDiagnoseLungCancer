<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginValidate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required',
            
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email or Password is wrong',
            'password.required' => 'Email or Password is wrong',
            
        ];
    }
}
