<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\Doctor;
use App\Service;
use App\Post;
use App\History;
use App\Feedback;
use App\Contact;
use App\Booking;
use App\Comment;
use App\Category;
use App\Errorpost;
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
        $contact = Contact::all();
        $posts = Post::all()->take(3);
        $posts2 = Post::all()->take(1);
        $feedback = Feedback::all()->take(4);
        $settings = Setting::all();
        $user = User::all();
        return view('site.index', compact('service', 'doctor', 'posts','feedback', 'settings','contact','user','posts2'));
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
    
    public function getSua($id) {
        $user = User::find($id);
        return view('site.edit-user', compact('user'));
    }

    public function postSua(Request $request) {
        $user = User::find($request->id);
        $user->fill($request->all());
        $user->save();
        return redirect(route('tai-khoan'));
    }

    public function getPass() {
        $user = Auth::user();
        return view('site.change-password', compact('user'));
    }


    public function getHis($id) {
        $histories = History::where('user_id', $id)->get();
        return view('site.list-history', compact('histories'));
    }

    public function History($id) {
        $histories = History::find($id);
        return view('site.detail-history', compact('histories'));
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
        $post = Post::all()->take(5);
        $error = Errorpost::where('post_id', $id)->get();
        $cate3 = Category::all()->take(5);
        $comment = Comment::where('post_id', $id)->paginate(10);
        // $error = Errorpost::all();
        return view('site.blog-detail', compact('detail', 'comment','error','cate3','post'));
    }

    public function getError($id) {
        $error = Errorpost::where('post_id', $id)->get();
        return redirect(route('detail'));
    }

    public function postError(Request $request){
        $error = new Errorpost();
        $error->post_id = $request->post_id;
        $error->author = $request->author;
        $error->cate_id = $request->cate_id;
        $error->publish_date = $request->publish_date;
        $error->save();
        return redirect(route('bao-loi-bai-viet'));
      }

      public function postLienhe(Request $request){
        $contact = new Contact();
        $contact->user_id = Auth::user()->id;
        $contact->name = Auth::user()->name;;
        $contact->email = $request->email;
        $contact->phone = Auth::user()->phone;
        $contact->message = 'Đăng ký nhận thông tin';
        $contact->save();
        return redirect(route('index'));
      }

    public function detailDoctor($id) {
        $doctor1 = Doctor::find($id);
        return view('site.detail-doctor', compact('doctor1'));
    }

    public function detailService($id) {
        $service1 = Service::find($id);
        $cates3 = Category::all();
        $service3 = Service::all()->take(5);
        return view('site.detail-service', compact('service1', 'service3', 'cates3'));
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
        $files = File::all();
        return view('site.search-file', compact('files'));
    }

    public function postFile(Request $request){
        $tk = $request->tk;
        $files = File::where('code_patient', 'like', "%$tk%")->orWhere('name', 'like', "%$tk%")->orWhere('address', 'like', "%$tk%")->get();
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