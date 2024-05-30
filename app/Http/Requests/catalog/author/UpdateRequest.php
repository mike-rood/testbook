<?php

namespace App\Http\Requests\catalog\author;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string',
            'second_name' => 'nullable|string',
            'third_name' => 'nullable|string',
        ];
    }
    
    public function messages(): array
    {
        return [
            'first_name.required' => 'The first name is required',
            'first_name.string' => 'The first name must be a string',
            'second_name.string' => 'The second name must be a string',
            'third_name.string' => 'The third name must be a string',
        ];
    }
}
