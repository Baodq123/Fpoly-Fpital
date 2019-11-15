<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Doctor;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddDoctorRequest;
use App\Http\Requests\EditDoctorRequest;

class DoctorController extends Controller
{
    public $timestamps = false;
  //   public function homepage(Request $request){
  //    // 1. Lấy keyword từ đường dẫn
        // $kw = $request->keyword; 
        // // 2. thực hiện câu lệnh select * from posts where title like %keyword%
        // if(!$request->has('keyword') || empty($kw)){
        //  $posts = Post::paginate(5); 
        // }else{
        //  $posts = Post::where('title', 'like', "%$kw%")
        //                      ->paginate(5);
        //  // thêm tham số đường dẫn keyword khi người dùng
        //  // có tìm kiếm để tránh lỗi phân trang
        //  $posts->withPath("?keyword=$kw");
        // }

        // return view('homepage', [
        //      'dsBaiViet' => $posts
        // ]);
  //   }

    public function doctor(Request $request){
        $doctor = Doctor::all();
        return view('doctor.doctor', [
            'dsBacSi' => $doctor
        ]); 
    }
    
    public function remove($id){
        DB::beginTransaction();
        try{
         $model = Doctor::find($id);
         if($model){
            $model->delete();
            DB::commit();
        }
    } catch(Exception $ex){
            // ghi log lỗi lại
      DB::rollback();
  }

  return redirect(route('doctor'));
}

public function addForm(){
   return view('doctor.add-doctor');
}

public function saveAdd(AddDoctorRequest $request){
        // Tạo 1 thực thể mới
   $model = new Doctor();

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
return redirect()->route('doctor');
}

public function editForm($id){
    $model = Doctor::find($id);
    if(!$model){
        return redirect()->route('doctor');
    }
    return view('doctor.edit-doctor', compact('model'));
}

public function saveEdit(EditDoctorRequest $request){
    $model = Doctor::find($request->id);

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
    return redirect(route('doctor'));
}

}