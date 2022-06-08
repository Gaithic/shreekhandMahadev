<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterForm extends FormRequest
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
            'email' => 'required|email|unique:users',
            'number' => 'required',
            'fatherOrHusband' => 'required',
            'date_of_birth' => 'required',
            'nationality' => 'required',
            'state_id' => 'required',
            'district_id' => 'required',
            'address' => 'required',
            'dateOfReporting' => 'required',
            'nameOfRelative' => 'required',
            'ContactOfNearRelative' => 'required',
            'gender' => 'required',
            'idProof' => 'required',
            'addharNumber' => 'required|unique:users,name|min:12|max:12',
            'terms' => 'required',
        ];
    }
}
