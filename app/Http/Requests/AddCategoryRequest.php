<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCategoryRequest extends FormRequest
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
            'name' => 'required|unique:categories',
            'path' => 'required',
        ];
    }

    public function messages(){
       return [
        'name.required' => "Hãy nhập tên danh mục",
        'name.unique' => "Danh mục này đã tồn tại",
        'path.required' => "Hãy nhập đường dẫn cho danh mục",
    ];
}
}
