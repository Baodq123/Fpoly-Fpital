<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPostRequest extends FormRequest
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
            'title' => 'required|max:200|unique:posts,title,' . $this->id,
            'content' => 'required',
            'feature_images' => 'mimes:jpg,jpeg,png',
            'slug' => 'required',
            'publish_date' => 'required|date',
            'author' => 'required',
        ];
    }

    public function messages(){
       return [
        'title.required' => "Hãy nhập tiêu đề bài viết",
        'title.max' => "Tiêu đề tối đa 200 kí tự",
        'title.unique' => "Tiêu đề đã tồn tại",
        'content.required' => "Hãy nhập nội dung bài viết",
        'feature_images.mimes:jpg,jpeg,png' => "Vui lòng nhập file ảnh có định dạng: jpg, jpeg, png",
        'slug.required' => "Hãy nhập đường dẫn cho bài viết",
        'publish_date.required' => "Hãy nhập ngày đăng bài viết",
        'author.required' => "Hãy nhập tên tác giả"
    ];
}
}
