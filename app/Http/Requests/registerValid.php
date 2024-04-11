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
            'pass' => 'required|min:6|max:20',
            'pass2' => 'required|same:pass',
        ];
    }
    public function messages()
    {
        return [
            'email.max' => 'Nhập tối đa 50 ký tự',
            'email.required' => 'Chưa nhập email',
            'email.email' => 'Nhập email chưa đúng',
            'email.ends_with' => 'Email phải có đuôi là @gmail.com',
            'pass.required' => 'Bạn chưa nhập mật khẩu',
            'pass.min' => 'Nhập ít nhất 6 ký tự',
            'pass.max' => 'Nhập tối đa 20 ký tự',
            'pass2.required' => 'Bạn chưa nhập lại mật khẩu',
            'pass2.same' => 'Mật khẩu chưa trùng nhau',
        ];
    }
}
