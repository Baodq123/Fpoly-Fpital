<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    function __construct(){
        if (Auth::check()) {
            view()->share('nguoidung',Auth::user());
        }
    }

    public function loginForm(){
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request){
        if (Auth::attempt(['email' => $request->email,
                           'password' => $request->password])){
            return redirect()->route('home');
        } 
            # code...
            return view('auth.login');
        }

    public function getDangnhap(){
            return view('site.login');
        }
    
    public function postDangnhap(Request $request){
        if (Auth::attempt(['email' => $request->email,
                            'password' => $request->password])){
             return redirect('/');
        } 
            # code...
             return view('site.login');
        }

        public function getDangky(){
            return view('site.signup');
        }
    
    public function postDangky(Request $request){
        $model = new User();
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

        $model->role_id = 0;
        
        $model->fill($request->all());
        $model->password = bcrypt($request->password);
    	$model->save();

    	// Chuyển đường dẫn
             return view('site.signup');
        }
}
