<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormValidation extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users, email',
            'contact' => 'required|integer',
            'designation' => 'required',
            'date_of_birth' => 'required',
            'date_of_joining' => 'required',
            'office' => 'required',
            'district' => 'required',
            'circle' => 'required',
            'division' => 'required',
            'range' => 'required',
            'office_address' => 'required',
            'gender' => 'required',
            'qualification' => 'required',
            'username' => 'required|unique:users,name|min:5',
            'password' => 'required',
        ];
    }
}