<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddFileRequest;
use App\Http\Requests\EditFileRequest;

class FileController extends Controller
{
    public $timestamps = false;

    public function file(Request $request){
        $file = File::all();
        return view('file.file', [
            'dsHoSo' => $file
        ]); 
    }
    
    public function remove($id){
        DB::beginTransaction();
        try{
           $model = File::find($id);
           if($model){
            $model->delete();
            DB::commit();
        }
    } catch(Exception $ex){
            // ghi log lỗi lại
      DB::rollback();
  }

  return redirect(route('file'));
}

public function addForm(){
 return view('file.add-file');
}

public function saveAdd(AddFileRequest $request){
        // Tạo 1 thực thể mới
 $model = new File();

        // Fill -> Khớp với dữ liệu viết ở fillable
 $model->fill($request->all());

 if ($request->hasFile('image')) {

            // Lấy tên gốc của ảnh
    $filename = $request->image->getClientOriginalName();
            // Thay thế kí tự khoảng trắng bằng ký tự '-'
    $filename = str_replace(' ', '-', $filename);
            // Thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
    $filename = uniqid() . '-' . $filename;
            // Lưu ảnh và trả về đường dẫn
    $path = $request->file('image')->storeAs('', $filename);

        // storeAs('tên thư mục', 'tên ảnh')

    $model->image = "images/$path";
}
        // Lưu xuống
$model->save();

        // Chuyển đường dẫn
return redirect()->route('file');
}

public function editForm($id){
    $model = File::find($id);
    if(!$model){
        return redirect()->route('file');
    }
    return view('file.edit-file', compact('model'));
}

public function saveEdit(EditFileRequest $request){
    $model = File::find($request->id);

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
    $img = $_FILES['image'];
    $_POST['image'] = $model->image;
        // lưu ảnh
    if($img['size'] > 0){
        $filename = "public/images/posts/" . uniqid() . "-" . $img['name'];
        move_uploaded_file($img['tmp_name'], $filename);
        $_POST['image'] = $filename;
    }

    $model->fill($request->all());
    $model->save();
    return redirect(route('file'));
    }
}