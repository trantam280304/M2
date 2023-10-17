<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'list' => 'required',
            'date_time' => 'required',
            'price' => 'required',
            'note' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'list.required' => 'Danh mục bắt buộc nhập',
            'date_time.required' => 'Ngày bắt buộc nhập',
            'note.required' => 'Ghi chú bắt buộc nhập',
            'price.required' => 'Tiền bắt buộc nhập',
        ];
    }
}
