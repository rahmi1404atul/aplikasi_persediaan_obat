<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=> ' required|string',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'data harus di isikan',
            'email.required'=> 'email tidak boleh kosong ',
            'email.email' => 'pastikan yang dimasukan berupa email',
            'password.min' => 'minimal password 8 digit',
            'password.required' => 'password tidak boleh kosong',
        ];
    }
}
