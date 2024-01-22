<?php

namespace App\Http\Requests\User\v1;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
            'email' => 'required|email',
            'birthDay' => 'required|date',
            'termsAndCondition' => 'required|boolean'
        ];
    }
}
