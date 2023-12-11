<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormContactRequest extends FormRequest
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
            'prenom'=>['required','string','min:2'],
            'nom'=>['required','string','min:2'],
            'telephone'=>['required','numeric','min:10'],
            'email'=>['required','email','string'],
            'message'=>['required','string']
        ];
    }
}
