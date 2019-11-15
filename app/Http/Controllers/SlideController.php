<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Slide;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddSlideRequest;
use App\Http\Requests\EditSlideRequest;

class SlideController extends Controller
{
    public $timestamps = false;

    public function slide(Request $request){
        $slide = Slide::all();
        return view('slide.slide', [
            'dsSlide' => $slide
        ]); 
    }
    
    public function remove($id){
    	DB::beginTransaction();
    	try{
         $model = Slide::find($id);
         if($model){
            $model->delete();
            DB::commit();
        }
    } catch(Exception $ex){
    		// ghi log lỗi lại
      DB::rollback();
  }

  return redirect(route('slide'));
}

public function addForm(){
   return view('slide.add-slide');
}

public function saveAdd(AddSlideRequest $request){
    	// Tạo 1 thực thể mới
   $model = new Slide();

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
return redirect()->route('slide');
}

public function editForm($id){
    $model = Slide::find($id);
    if(!$model){
        return redirect()->route('slide');
    }
    return view('slide.edit-slide', compact('model'));
}

public function saveEdit(EditSlideRequest $request){
    $model = Slide::find($request->id);

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
    $img = $_FILES['image'];
    $_POST['image'] = $model->image;
        // lưu ảnh
    if($img['size'] > 0){
        $filename = "public/images/" . uniqid() . "-" . $img['name'];
        move_uploaded_file($img['tmp_name'], $filename);
        $_POST['image'] = $filename;
    }

    $model->fill($request->all());
    $model->save();
    return redirect(route('slide'));
}

}