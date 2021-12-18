<?php

namespace App\Http\Requests\riskfactor;

use Illuminate\Foundation\Http\FormRequest;

class CreateValidate extends FormRequest
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
            'name' => 'required|unique:riskfactors',
            'refer' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name risk factor required',
            'name.unique' => 'Name risk factor already taken',
            'refer.required' => 'Refer required',
        ];
    }
}
