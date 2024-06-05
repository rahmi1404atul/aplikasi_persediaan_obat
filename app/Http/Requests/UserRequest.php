<?php

namespace App\Http\Requests;

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
            'namaobat'=> ' required|string',
            'jenisobat' => 'required|string',
            'harga' => 'required|min:12',
            'deskripsi' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'namaobat.required' => 'data harus di isikan',
            'jenisobat.required'=> 'jenis tidak boleh kosong ',
            'harga.min' => 'minimal 12 digit',
            'deskripsi.required'=> 'deskrpisi tidak boleh kosong ',
        
        ];
    }
}
