<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPageRequest extends FormRequest
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
            'path' => 'required',
            'date' => 'required',
            'content' => 'required',
        ];
    }

    public function messages(){
       return [
        'name.required' => "Hãy nhập tên trang",
        'path.required' => "Hãy nhập đường dẫn cho trang",
        'date.required' => "Hãy nhập ngày tạo",
        'content.required' => "Hãy nhập nội dung của trang",
    ];
}
}
