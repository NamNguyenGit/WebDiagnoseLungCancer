<?php

namespace App\Http\Requests\symptom;

use Illuminate\Foundation\Http\FormRequest;

class CrateValidate extends FormRequest
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
            'name' => 'required|unique:symptoms',
            'refer' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name symptom required',
            'name.unique' => 'Name symptom already taken',
            'refer.required' => 'Refer required',
        ];
    }
}
