<?php

namespace App\Http\Requests\blog;

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
            'title' => 'required|unique:blog',
            'content' => 'required',
            'smalltitle' => 'required',
            'author' => 'required',
            'publication_date' => 'required|before:tomorrow',
            'file_upload' => 'mimes:jpg,jpeg,png,gif',
            'file_upload' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title required',
            'title.unique' => 'Title already taken',
            'author.required' => 'Author required',
            'content.required' => 'Content required',
            'publication_date.required' => 'Public date required',
            'publication_date.before' => 'Date must before or today',
            'smalltitle.required' => 'Small title required',
            'file_upload.mimes' => 'Image type must be jpg,jpeg,png,gif',
            'file_upload.required' => 'Image required',
        ];
    }
}
