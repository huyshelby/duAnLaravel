<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerValid extends FormRequest
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
            'email' => 'required|email|max:50|ends_with:@gmail.com',
            'password' => 'required|min:6|max:20',
        ];
    }
    public function messages()
    {
        return [
            'email.max' => 'Nhập tối đa 50 ký tự',
            'email.required' => 'Chưa nhập email',
            'email.email' => 'Nhập email chưa đúng',
            'email.ends_with' => 'Email phải có đuôi là @gmail.com',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Nhập ít nhất 6 ký tự',
            'password.max' => 'Nhập tối đa 20 ký tự'
        ];
    }
}
