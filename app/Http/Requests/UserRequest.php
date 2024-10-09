<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'fullname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'birthday' => 'required|date',
        'address' => 'required|max:255',
            // Các trường khác
        ];
    }
    /**
     * Tùy chỉnh thông báo lỗi validation.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Please enter your email.',
            'email.email' => 'The email address is not valid.',
            'email.unique' => 'This email address already exists.',
            'password.required' => 'Please enter your password.',
            'password.min' => 'The password must be at least 6 characters.',
            'password.confirmed' => 'The password confirmation does not match.',
            'birthday.required' => 'Please enter your date of birth.',
            'birthday.date' => 'The date of birth is not valid.',
            'address.required' => 'Please enter your address.',
            'address.max' => 'The address may not be greater than 255 characters.',
        ];
        
    }
}
