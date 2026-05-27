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
            'name' => 'required|regex:/^[\pL\s]+$/u',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:12',
            'age' => 'required|numeric',
            'place_of_birth' => 'required|regex:/^[\pL\s]+$/u',
            'date_of_birth' => 'required|date',
            'phone' => 'required|digits_between:10,15',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'address' => 'required',
        ];
    }

    #[Override]
    public function messages(): array
    {
        return [
            'name.required' => 'Nama Wajib Diisi!',
            'name.regex' => 'Nama Wajib Berupa Karakter A-Z!',
            'email.required' => 'Email Wajib Diisi!',
            'email.email' => 'Format Email Wajib @!',
            'email.unique' => 'Email Sudah Dipakai!',
            'password.required' => 'Password Wajib Diisi!',
            'password.min' => 'Password min 8 Karakter!',
            'password.max' => 'Password max 12 Karakter!',
            'age.required' => 'Umur Wajib Diisi!',
            'age.numeric' => 'Umur Wajib Berupa Angka!',
            'place_of_birth.required' => 'Tempat Lahir Wajib Diisi!',
            'place_of_birth.regex' => 'Tempat Lahir Wajib Berupa Karakter A-Z!',
            'date_of_birth.required' => 'Tanggal Lahir Wajib Diisi!',
            'phone.required' => 'No Hp Wajib Diisi!',
            'phone.digits_between' => 'No Hp Wajib Berupa Angka: 08xxxxxx!',
            'gender.required' => 'Gender Harap Dipilih!',
            'address.required' => 'Alamat Wajib Diisi!',
        ];
    }
}
