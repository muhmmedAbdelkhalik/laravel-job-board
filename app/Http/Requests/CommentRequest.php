<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'author' => "required|max:255",
            'content' => 'required|max:255',
        ];

    }

    public function messages(): array
    {
        return [
            'author.required' => 'Field is required',
            'content.required' => 'Field is required',
        ];
    }
}
