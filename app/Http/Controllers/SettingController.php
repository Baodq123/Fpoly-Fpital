<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Setting;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public $timestamps = false;

    public function setting(Request $request){
        $setting = Setting::all();
        return view('setting.setting', [
            'dsSetting' => $setting
        ]); 
    }

public function editForm($id){
    $model = Setting::find($id);
    if(!$model){
        return redirect()->route('setting');
    }
    return view('setting.edit-setting', compact('model'));
}

public function saveEdit(Request $request){
    $model = Setting::find($request->id);

    if ($request->hasFile('image')) {

            // Lấy tên gốc của ảnh
        $filename = $request->image->getClientOriginalName();
            // Thay thế kí tự khoảng trắng bằng ký tự '-'
        $filename = str_replace(' ', '-', $filename);
            // Thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
        $filename = uniqid() . '-' . $filename;
            // Lưu ảnh và trả về đường dẫn
        $path = $request->file('image')->storeAs('posts', $filename);

        // storeAs('tên thư mục', 'tên ảnh')

        $model->image = "images/$path";
    }
    $img = $_FILES['logo'];
    $_POST['image'] = $model->image;
        // lưu ảnh
    if($img['size'] > 0){
        $filename = "public/images/posts/" . uniqid() . "-" . $img['name'];
        move_uploaded_file($img['tmp_name'], $filename);
        $_POST['image'] = $filename;
    }

    $model->fill($request->all());
    $model->save();
    return redirect(route('setting'));
}

}