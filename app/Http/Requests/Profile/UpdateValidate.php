<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateValidate extends FormRequest
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
            'email' => 'required|unique:users,email,' . request()->id,
            'dateofbirth' => 'required|before:tomorrow',
            'address' => 'required',
            'phone' => 'required',
            'symptoms' => 'required',
            'date_diagnosis' => 'required|before:tomorrow',
            'date_ctscan' => 'required|before:tomorrow',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email required',
            'email.unique' => 'Email already taken',
            'dateofbirth.required' => 'Date of Birth required',
            'dateofbirth.before' => 'Date of Birth before tomorrow',
            'address.required' => 'Address required',
            'phone.required' => 'Phone required',
            'symptoms.required' => 'symptoms required',
            'date_diagnosis.required' => 'Date diagnosis required',
            'date_diagnosis.before' => 'Date diagnosis before tomorrow',
            'date_ctscan.required' => 'Date CT Scan required',
            'date_ctscan.before' => 'Date CT Scan before tomorrow',
        ];
    }
}
