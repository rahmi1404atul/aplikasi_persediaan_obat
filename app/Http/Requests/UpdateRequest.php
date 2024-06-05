<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updaterequest extends FormRequest
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
            'namaobat' => 'required',
            'jenisobat' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'namaobat.required' => 'Data Harus Di Isikan',
            'jenisobat.required' => 'jenis Tidak Boleh Kosong',
            'harga.required' => 'Harga Harus Di Isikan',
            'deskripsi.required' => 'deskripsi Tidak Boleh Kosong',
            
            
        ];
    }
}
