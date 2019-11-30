<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'name' => 'required',
            'password' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
            'email' => 'required',
            'phone' => 'required',
        ];
    }

    public function messages(){
       return [
        'name.required' => "Hãy nhập họ và tên",
        'password.required' => "Hãy nhập mật khẩu",
        'image.mimes:jpg,jpeg,png' => "Vui lòng nhập file ảnh có định dạng: jpg, jpeg, png",
        'email.required' => "Hãy nhập email",
        'phone.required' => "Hãy nhập số điện thoại"
    ];
}
}
