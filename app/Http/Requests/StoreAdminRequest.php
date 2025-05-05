<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'role' => 'required|in:super_admin,kasir',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email tidak valid.',
            'no_hp.required' => 'Nomor HP harus diisi.',
            'alamat.required' => 'Alamat harus diisi.',
            'role.required' => 'Role harus dipilih.',
            'role.in' => 'Role harus berupa Super Admin atau Kasir.',
        ];
    }
}