<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddServiceRequest extends FormRequest
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
            'price' => 'required',
            'content' => 'required',
        ];
    }

    public function messages(){
       return [
        'name.required' => "Hãy nhập tên dịch vụ",
        'price.required' => "Hãy nhập giá dịch vụ",
        'content.required' => "Hãy nhập nội dung dịch vụ",
    ];
}
}
