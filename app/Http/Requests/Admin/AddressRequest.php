<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            "address" =>"required|array|max:2",
            'address.*' => 'required|string|unique:adresses,address,'.$this->id
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
            'address.0.required' => 'The english address  field is required.',
            'address.1.required' => 'The arabic address field is required.',
            'address.0.string' => 'The english address field must be of type string.',
            'address.1.string' => 'The arabic address field must be of type string.',
            'address.0.unique' => 'The english address must be unique .',
            'address.1.unique' => 'The arabic address field must be unique .',
        ];
    }
}
