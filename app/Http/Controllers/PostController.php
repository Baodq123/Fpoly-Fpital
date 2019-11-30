<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddPostRequest;
use App\Http\Requests\EditPostRequest;

class PostController extends Controller
{
    public $timestamps = false;
  //   public function homepage(Request $request){
  //   	// 1. Lấy keyword từ đường dẫn
		// $kw = $request->keyword; 
		// // 2. thực hiện câu lệnh select * from posts where title like %keyword%
		// if(!$request->has('keyword') || empty($kw)){
		// 	$posts = Post::paginate(5);	
		// }else{
		// 	$posts = Post::where('title', 'like', "%$kw%")
		// 						->paginate(5);
		// 	// thêm tham số đường dẫn keyword khi người dùng
		// 	// có tìm kiếm để tránh lỗi phân trang
		// 	$posts->withPath("?keyword=$kw");
		// }

		// return view('homepage', [
		// 		'dsBaiViet' => $posts
		// ]);
  //   }

    public function home(Request $request){
        return view('welcome');
    }

    public function post(Request $request){
        $posts = Post::all();

        return view('post.post', [
            'dsBaiViet' => $posts
        ]); 
    }
    
    public function remove($id){
    	DB::beginTransaction();
    	try{
           $model = Post::find($id);
           if($model){
            $model->delete();

            DB::table('comments')->where('post_id', '=', $model->id)->delete();

            DB::commit();
        }
    } catch(Exception $ex){
    		// ghi log lỗi lại
      DB::rollback();
  }

  return redirect(route('post'));
}

public function addForm(){
 $cates = Category::all();
 $users = User::all()->where('role_id', '>', '0');
 return view('post.add-post', compact('cates','users'));
}

public function saveAdd(AddPostRequest $request){

    $model = new Post();
    
    $model->fill($request->all());

    if ($request->hasFile('feature_images')) {

            // Lấy tên gốc của ảnh
        $filename = $request->feature_images->getClientOriginalName();
            // Thay thế kí tự khoảng trắng bằng ký tự '-'
        $filename = str_replace(' ', '-', $filename);
            // Thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
        $filename = uniqid() . '-' . $filename;
            // Lưu ảnh và trả về đường dẫn
        $path = $request->file('feature_images')->storeAs('posts', $filename);

        // storeAs('tên thư mục', 'tên ảnh')

        $model->feature_images = "images/$path";
    }

        // Lưu xuống
    $model->save();

        // Chuyển đường dẫn
    return redirect()->route('post');
}

public function editForm($id){
    $model = Post::find($id);
    if(!$model){
        return redirect()->route('homepage');
    }
    $cates = Category::all();
    $users = User::all()->where('role_id', '>', '0');
    return view('post.edit-post', compact('model', 'cates', 'users'));
}

public function saveEdit(EditPostRequest $request){
    
    $model = Post::find($request->id);
    
    if ($request->hasFile('feature_images')) {

            // Lấy tên gốc của ảnh
        $filename = $request->feature_images->getClientOriginalName();
            // Thay thế kí tự khoảng trắng bằng ký tự '-'
        $filename = str_replace(' ', '-', $filename);
            // Thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
        $filename = uniqid() . '-' . $filename;
            // Lưu ảnh và trả về đường dẫn
        $path = $request->file('feature_images')->storeAs('posts', $filename);

        // storeAs('tên thư mục', 'tên ảnh')

        $model->feature_images = "images/$path";
    }

    $model->fill($request->all());
    $model->save();
    return redirect(route('post'));
}

}