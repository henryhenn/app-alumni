<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class AccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|max:55|email|unique:users,email|sometimes',
            'password' => ['required', Password::default(), 'min:8', 'sometimes'],
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'tahun_lulus' => 'required',
            'pekerjaan' => 'required|max:100',
            'hobby' => 'required',
            'no_telp' => 'required',
            'foto' => 'image|file|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
