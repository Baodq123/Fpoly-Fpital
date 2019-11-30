<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddFileRequest extends FormRequest
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
            'address' => 'required',
            'phone' => 'required',
            'date' => 'required',
        ];
    }

    public function messages(){
       return [
        'name.required' => "Hãy nhập tên bệnh nhân",
        'address.required' => "Hãy nhập địa chỉ",
        'phone.required' => "Hãy nhập số điện thoại",
        'date.required' => "Hãy nhập ngày khám",
    ];
}
}
