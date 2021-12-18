<?php

namespace App\Http\Requests\prevention;

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
            'name' => 'required|unique:preventions,name,' . request()->id,
            'refer' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name prevention required',
            'name.unique' => 'Name prevention already taken',
            'refer.required' => 'Refer required',
        ];
    }
}
