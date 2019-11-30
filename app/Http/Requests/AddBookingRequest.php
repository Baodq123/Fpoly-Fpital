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
            'date' => 'required',
        ];
    }

    public function messages(){
       return [
        'name.required' => "Hãy nhập họ và tên",
        'email.required' => "Hãy nhập email",
        'phone.required' => "Hãy nhập số điện thoại",
        'date.required' => "Hãy nhập ngày đặt lịch",
    ];
}
}
