<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBookingRequest extends FormRequest
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
            'publish_date' => 'required',
            'major' => 'required',
            'doctor' => 'required',
        ];
    }

    public function messages(){
       return [
        'name.required' => "Hãy nhập họ và tên",
        'email.required' => "Hãy nhập email",
        'phone.required' => "Hãy nhập số điện thoại",
        'publish_date.required' => "Hãy nhập ngày đặt lịch",
        'major.required' => "Hãy chọn khoa khám",
        'doctor.required' => "Hãy chọn bác sĩ",
    ];
}
}
