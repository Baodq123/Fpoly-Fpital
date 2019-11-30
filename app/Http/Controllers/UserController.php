<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;

class UserController extends Controller
{
    public $timestamps = false;

    public function user(Request $request){
        $user = User::all();
        return view('user.user', [
            'dsUser' => $user
        ]); 
    }
    
    public function remove($id){
    	DB::beginTransaction();
    	try{
           $model = User::find($id);
           if($model){
            $model->delete();

            DB::table('comments')->where('user_id', '=', $model->id)->delete();
            
            DB::commit();
        }
    } catch(Exception $ex){
    		// ghi log lỗi lại
      DB::rollback();
  }

  return redirect(route('user'));
}


public function profile(){
 return view('user.profile');
}

public function addForm(){
 return view('user.add-user');
}

public function saveAdd(AddUserRequest $request){
    	// Tạo 1 thực thể mới

    $model = new User();
        // Fill -> Khớp với dữ liệu viết ở fillable
    
    $model->fill($request->all());
    if ($request->password) {
        $model->password = bcrypt($request->password);
    }
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
    return redirect()->route('user');
}

public function editForm($id){
    $model = User::find($id);
    if(!$model){
        return redirect()->route('user');
    }
    return view('user.edit-user', compact('model'));
}

public function saveEdit(EditUserRequest $request){

    $model = User::find($request->id);
    $model->fill($request->all());
    if ($request->password) {
        $model->password = bcrypt($request->password);
    }
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
    $model->save();
    return redirect(route('user'));
}

}