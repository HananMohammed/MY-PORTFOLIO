<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProjectCategoryRequest extends FormRequest
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
            "title" =>"required|array|max:2",
            "title.*" => "required|string|max:255",
        ];
    }
    /**
     * Get the validation error messages.
     *
     * @return array
     */
    public function messages()
    {
        return[
            'title.0.required' => 'The  project category title.EN field is required.',
            'title.1.required' => 'The  project category title.AR field is required.',
            'title.0.string' => 'The  project category title.EN field must be of type string.',
            'title.1.string' => 'The  project category title.AR field must be of type string.',
            'title.0.max' => 'The  project category title.EN field max length is 255 .',
            'title.1.max' => 'The  project category title.AR field max length is 255 .',
        ];
    }
}
