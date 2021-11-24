<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email',
            'password' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter your name',
            'name.max' => 'Max name characters is 255',
            'email.required' => 'Please enter your email',
            'email.max'     => 'Max email characters is 255',
            'email.unique'     => 'Email exists',
            'password.required' => 'Please enter your password',
            'password.max' => 'Max password characters is 255',
        ];
    }
}
