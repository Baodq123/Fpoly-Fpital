<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditMenuRequest extends FormRequest
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
            'order' => 'required',
        ];
    }

    public function messages(){
       return [
        'name.required' => "Hãy nhập tên menu",
        'path.required' => "Hãy nhập đường dẫn cho menu",
        'order.required' => "Hãy nhập vị trí cho menu",
    ];
}
}
