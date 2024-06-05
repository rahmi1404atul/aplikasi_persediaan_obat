<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class obatrequest extends FormRequest
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
            'namaobat' => 'required|string',
            'jenisobat' => 'required|string',
            'deskripsi' => 'required|string',
            'harga' => 'required|string',
            'foto' => 'required|mimes:jpeg,jpg,png'
        ];
    }
    public function messages()
    {
        return [
            'namaobat.required' => 'data harus di isikan',
            'jenisobat.required'=> 'email tidak boleh kosong ',
            'deskripsi.required'=> 'email tidak boleh kosong ',
            'harga.required'=> 'email tidak boleh kosong ',
            'foto.mimes'=> 'email tidak boleh kosong ',
            ];
    }
}
