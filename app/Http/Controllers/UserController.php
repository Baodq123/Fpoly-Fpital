<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use Illuminate\Support\Facades\Auth;
use Sentinel;
use Reminder;
use Mail;
class UserController extends Controller
{
    public $timestamps = false;

    public function user(Request $request){
        $user = User::all();
        return view('user.user', [
            'dsUser' => $user
        ]); 
    }

    public function getSua($id) {
        $user = User::find($id);
        return view('site.change-password', compact('user'));
    }

    public function postSua(Request $request) {
        $user = User::find($request->id);
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

        $user->image = "images/$path";
    }
        $user->fill($request->all());
        $user->save();
        return redirect(route('tai-khoan'));
    }

    // public function getPass($id) {
    //     $user = User::find($id);
    //     return view('site.change-password', compact('user'));
    // }

    // public function postPass(Request $request) {
    //     if(!(Hash::check($request->get('current_password'), Auth::user()->password))){
    //         return back()->with('error', 'Mật khẩu k khớp');
    //     }

    //     if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
    //         return back()->with('error', 'Mật khẩu k khớp');
    //     }

    //     $user = Auth::user();
    //     $user->password = bcrypt($request->get('new_password'));
    //     $user->save();
    //     return redirect(route('dang-nhap'));
    // }

    public function forgot() {
        // $user = Auth::user();
        return view('site.forgot-password');
    }

    public function password(Request $request) {
        $user = User::whereEmail($request->email)->first();

        if($user == null){
            return redirect()->back()->with(['error' => 'Không tồn tại email']);
        }

        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exists($user) ? : Reminder::create($user);
        $this->sendEmail($user, $reminder->code);

        return redirect()->back()->with(['success' => 'Link reset đã được gửi tới mail của bạn']);
    }

    public function sendEmail($user, $code){
        Mail::send(
            'site.forgot-password',
            ['user' => $user, 'code' => $code],
            function($message) use ($user){
                $message->to($user->email);
                $message->subject("$user->name, reset your password");
            } 
        );
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