<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
    public function rules()
    {
        $userId = $this->users;
        $rules = [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email,' . $userId],
            'password' => ['required'],
        ];
        return $rules;
    }
     public function messages()
     {
         return [
             'name.required' => 'Không được để trống!',
             'email.required' => 'Email không được để trống!',
             'email.email' => 'Email không hợp lệ!',
             'email.unique' => 'Email đã tồn tại!',
             'password.required' => 'Mật khẩu không được để trống!',
         ];
     }
}
