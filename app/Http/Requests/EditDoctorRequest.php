<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditDoctorRequest extends FormRequest
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
            'email' => 'required',
            'phone' => 'required',
            'major' => 'required',
            'info' => 'required',
            'image' => 'required',
        ];
    }

    public function messages(){
     return [
        'name.required' => "Hãy nhập tên bác sĩ",
        'email.required' => "Hãy nhập email",
        'phone.required' => "Hãy nhập số điện thoại",
        'major.required' => "Hãy nhập chuyên khoa",
        'info.required' => "Hãy nhập nội dung",
        'image.required' => "Hãy thêm ảnh cho bác sĩ",
    ];
}
}
