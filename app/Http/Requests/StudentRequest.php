<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:100',
            'course' => 'required|string',
        ];
    }

    public function messages()
    {
        return[
           'name.required' => 'O campo nome é obrigatório.',
           'name.string' => 'O nome precisa ser uma string.',
           'name.min' => 'O nome precisa ter mais de 3 caracteres.',
           'name.max' => 'O nome não pode ter mais de 100 caracteres.',
           'course.string' => 'O curso precisa ser uma string.',
           'course.required' => 'O campo course é obrigatório'


        ];
    }
}
