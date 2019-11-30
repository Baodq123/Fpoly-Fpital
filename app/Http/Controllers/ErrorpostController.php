<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Errorpost;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\DB;

class ErrorpostController extends Controller
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
    //            ->paginate(5);
    //  // thêm tham số đường dẫn keyword khi người dùng
    //  // có tìm kiếm để tránh lỗi phân trang
    //  $posts->withPath("?keyword=$kw");
    // }

    // return view('homepage', [
    //    'dsBaiViet' => $posts
    // ]);
  //   }
  //   
  public function errorpost(Request $request){
    $errorpost = Errorpost::all();
    $post = Post::all();
    $errorpost = Errorpost::all();
    return view('post.errorpost', [
      'dsBaoLoi' => $errorpost
    ]); 
  }

  public function removeError($id){
    DB::beginTransaction();
    try{
     $model = Errorpost::find($id);
     if($model){
      $model->delete();
      DB::commit();
    }
  } catch(Exception $ex){
        // ghi log lỗi lại
    DB::rollback();
  }

  return redirect(route('errorpost'));
}

}