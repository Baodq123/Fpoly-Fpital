<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPostRequest extends FormRequest
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
            'title' => 'required|unique:posts|max:200',
            'content' => 'required',
            'description' => 'required',
            'slug' => 'required',
            'feature_images' => 'required|file|mimes:jpg,jpeg,png',
            'publish_date' => 'required|date',
        ];
    }

    public function messages(){
     return [
        'title.required' => "Hãy nhập tiêu đề bài viết",
        'title.unique' => "Tiêu đề đã tồn tại",
        'title.max' => "Tiêu đề tối đa 65 ký tự",
        'description.required' => "Hãy nhập miêu tả bài viết",
        'content.required' => "Hãy nhập nội dung bài viết",
        'slug.required' => "Hãy nhập đường dẫn cho bài viết",
        'feature_images.required' => "Hãy thêm ảnh cho bài viết",
        'feature_images.mimes' => "Vui lòng nhập file ảnh có định dạng: jpg, jpeg, png",
        'publish_date.required' => "Hãy nhập ngày đăng bài viết",
    ];
}
}
