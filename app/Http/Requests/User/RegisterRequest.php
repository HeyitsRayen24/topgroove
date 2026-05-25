<?php

namespace App\Http\Requests\User;

//use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|max:8',
            'age' => 'required|numeric',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required|date|date_format:Y-m-d',
            'phone' => 'required|numeric',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'address' => 'required',
        ];
    }

    #[Override]
    public function messages(): array
    {
        return [
            'name.required' => 'Nama Wajib Diisi!',
            'email.required' => 'Email Wajib Diisi!',
            'email.email' => 'Format Email Wajib @!',
            'email.unique' => 'Email Sudah Dipakai!',
            'password.required' => 'Password Wajib Diisi!',
            'password.max' => 'Password max 8 Karakter!',
            'age.required' => 'Umur Wajib Diisi!',
            'age.numeric' => 'Umur Wajib Berupa Angka!',
            'place_of_birth.required' => 'Tempat Lahir Wajib Diisi!',
            'date_of_birth.required' => 'Tanggal Lahir Wajib Diisi!',
            'phone.required' => 'No Hp Wajib Diisi!',
            'phone.numeric' => 'No Hp Wajib Berupa Angka!',
            'gender.required' => 'Gender Harap Dipilih!',
            'address.required' => 'Alamat Wajib Diisi!',
        ];
    }
}
