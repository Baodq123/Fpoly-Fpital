<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\Doctor;
use App\Service;
use App\Post;
use App\Booking;
use App\Comment;
use App\Category;
use App\File;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;


class SettingController extends Controller
{
    function __construct(){
        if(Auth::check()){
            view()->share('user', Auth::user());
        }
    }

    public $timestamps = false;

    public function setting(Request $request){
        $setting = Setting::all();
        return view('setting.setting', [
            'dsSetting' => $setting
        ]); 
    }
    
    public function index() {
        $service = Service::all()->take(4);
        $doctor = Doctor::all();
        $posts = Post::all()->take(3);
        $comment = Comment::all()->take(4);

        return view('site.index', compact('service', 'doctor', 'posts', 'comment'));
    }

    public function service() {
        $service = Service::all()->take(4);
        $service1 = Service::all();

        return view('site.service', compact('service', 'service1'));
    }

    public function doctor() {
        $doctor = Doctor::all();

        return view('site.doctor', compact('doctor'));
    }

    public function user() {
        $user = Auth::user();
        return view('site.user-info', compact('user'));
    }
    
    public function getSua() {
        $user = Auth::user();
        return view('site.edit-user', compact('user'));
    }

    public function postSua(Request $request) {
        $user = Auth::user();
        $user->fill($request->all());
        $user->save();
        return redirect(route('tai-khoan'));
    }

    public function getPass() {
        $user = Auth::user();
        return view('site.change-password', compact('user'));
    }

    public function getHis() {
        $user = Auth::user();
        return view('site.detail-history', compact('user'));
    }

    public function contact() {
        $contact = Setting::all();

        return view('site.contact', compact('contact'));
    }

    public function blog(Request $request){
        $posts = Post::paginate(5);
        $posts2 = Post::all()->take(5);
        $cates = Category::all();
        return view('site.blog', compact('posts', 'cates', 'posts2')); 
    }

    public function blogcate($id, Request $request){
        $cates = Category::find($id);
        $posts = Post::all()->where('cate_id', '=', '$id');

        return view('site.blog-cate', compact('posts', 'cates')); 
    }

    public function detail($id) {
        $detail = Post::find($id);
        $comment = Comment::where('post_id', $id)->get();
        return view('site.blog-detail', compact('detail', 'comment'));
    }

    public function postBooking(Request $request){
        $booking = new Booking;	
        $booking->fill($request->all());

    	$booking->save();
        return redirect(route('index'));
    }

    public function search(Request $request){
        $tukhoa = $request->tukhoa;
        $posts = Post::where('title', 'like', "%$tukhoa%")->orWhere('description', 'like', "%$tukhoa%")->orWhere('content', 'like', "%$tukhoa%")->take(10)->paginate(5);
        return view('site.search', compact('tukhoa', 'posts'));
    }

    public function searchFile(Request $request){
        return view('site.search-file');
    }

    public function postFile(Request $request){
        $tk = $request->tk;
        $files = File::where('code_patient', 'like', "%$tk%")->orWhere('name', 'like', "%$tk%")->orWhere('address', 'like', "%$tk%");
        return view('site.file', compact('tk', 'files'));
    }

    // public function show(Request $request){
    //     $service = Service::all();
    //     return view('site.index', [
    //         'dsSetting1' => $service
    //     ]); 
    // }

    // public function doctor(Request $request){
    //     $doctor = Doctor::all();
    //     return view('site.index', [
    //         'dsSetting2' => $doctor
    //     ]); 
    // }

    // public function post(Request $request){
    //     $post = Post::all();
    //     return view('site.index', [
    //         'dsSetting3' => $post
    //     ]); 
    // }

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