<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSlideRequest extends FormRequest
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
            'image' => 'required|file|mimes:jpg,jpeg,png',
            'path' => 'required',
            'order' => 'required',
        ];
    }

    public function messages(){
     return [
        'image.required' => "Hãy thêm ảnh slide",
        'image.mimes' => "Vui lòng nhập file ảnh có định dạng: jpg, jpeg, png",
        'path.required' => "Hãy nhập đường dẫn slide",
        'order.required' => "Hãy nhập thứ tự",
    ];
}
}
