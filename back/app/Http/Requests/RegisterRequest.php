<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|max:255|email',
            'password' => 'required|min:8|confirmed'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Email field is empty.',
            'email.unique' => 'Email already exist.',
            'email.email' => 'Email is invalid.',
            'email.max' => 'Email field is should not be more than 225 characters',
            'password.required' => 'Password field is empty.',
            'password.min' => 'Password should not be less than 8 characters',
            'password.confirmed' => 'Passwords do not match.',
            'username.alpha_num' => 'username can only accept alpha-numeric characters'
        ];
    }
}
