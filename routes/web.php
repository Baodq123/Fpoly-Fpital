  <?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

<<<<<<< Updated upstream
Route::get('/admin', 'PostController@home')->name('home');
Route::get('/', 'PostController@show')->name('index');


Route::get('/post', 'PostController@post')->name('post');
Route::get('post-add', 'PostController@addForm')->name('post.add');
Route::post('post-add', 'PostController@saveAdd');
Route::get('post-edit-{id}', 'PostController@editForm')->name('post.edit');
Route::post('post-edit-{id}', 'PostController@saveEdit');
Route::get('post-remove/{id}', 'PostController@remove')->name('post.remove');

Route::get('/errorpost', 'ErrorpostController@errorpost')->name('errorpost');
Route::get('errorpost-remove/{id}', 'ErrorpostController@removeError')->name('errorpost.remove');

Route::get('/category', 'CategoryController@category')->name('category');
Route::get('category-add', 'CategoryController@addForm')->name('category.add');
Route::post('category-add', 'CategoryController@saveAdd');
Route::get('category-edit-{id}', 'CategoryController@editForm')->name('category.edit');
Route::post('category-edit-{id}', 'CategoryController@saveEdit');
Route::get('category-remove/{id}', 'CategoryController@remove')->name('category.remove');

Route::get('/doctor', 'DoctorController@doctor')->name('doctor');
Route::get('doctor-add', 'DoctorController@addForm')->name('doctor.add');
Route::post('doctor-add', 'DoctorController@saveAdd');
Route::get('doctor-edit-{id}', 'DoctorController@editForm')->name('doctor.edit');
Route::post('doctor-edit-{id}', 'DoctorController@saveEdit');
Route::get('doctor-remove/{id}', 'DoctorController@remove')->name('doctor.remove');
// Route::get('/', 'DoctorController@show');

Route::get('/ratedoctor', 'RatedoctorController@ratedoctor')->name('ratedoctor');
Route::get('ratedoctor-edit-{id}', 'RatedoctorController@editForm')->name('ratedoctor.edit');
Route::post('ratedoctor-edit-{id}', 'RatedoctorController@saveEdit');
Route::get('ratedoctor-remove/{id}', 'RatedoctorController@removeRatedoctor')->name('ratedoctor.remove');

Route::get('/menu', 'MenuController@menu')->name('menu');
Route::get('menu-add', 'MenuController@addForm')->name('menu.add');
Route::post('menu-add', 'MenuController@saveAdd');
Route::get('menu-edit-{id}', 'MenuController@editForm')->name('menu.edit');
Route::post('menu-edit-{id}', 'MenuController@saveEdit');
Route::get('menu-remove/{id}', 'MenuController@remove')->name('menu.remove');

Route::get('/page', 'PageController@page')->name('page');
Route::get('page-add', 'PageController@addForm')->name('page.add');
Route::post('page-add', 'PageController@saveAdd');
Route::get('page-edit-{id}', 'PageController@editForm')->name('page.edit');
Route::post('page-edit-{id}', 'PageController@saveEdit');
Route::get('page-remove/{id}', 'PageController@remove')->name('page.remove');

Route::get('/comment', 'CommentController@comment')->name('comment');
Route::get('comment-edit-{id}', 'CommentController@editForm')->name('comment.edit');
Route::post('comment-edit-{id}', 'CommentController@saveEdit');
Route::get('comment-remove/{id}', 'CommentController@remove')->name('comment.remove');

Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('contact-remove/{id}', 'ContactController@remove')->name('contact.remove');

Route::get('/slide', 'SlideController@slide')->name('slide');
Route::get('slide-add', 'SlideController@addForm')->name('slide.add');
Route::post('slide-add', 'SlideController@saveAdd');
Route::get('slide-edit-{id}', 'SlideController@editForm')->name('slide.edit');
Route::post('slide-edit-{id}', 'SlideController@saveEdit');
Route::get('slide-remove/{id}', 'SlideController@remove')->name('slide.remove');

Route::get('/account', 'AccountController@account')->name('account');
Route::get('account-add', 'AccountController@addForm')->name('account.add');
Route::post('account-add', 'AccountController@saveAdd');
Route::get('account-edit-{id}', 'AccountController@editForm')->name('account.edit');
Route::post('account-edit-{id}', 'AccountController@saveEdit');
Route::get('account-remove/{id}', 'AccountController@remove')->name('account.remove');

Route::get('/file', 'FileController@file')->name('file');
Route::get('file-add', 'FileController@addForm')->name('file.add');
Route::post('file-add', 'FileController@saveAdd');
Route::get('file-edit-{id}', 'FileController@editForm')->name('file.edit');
Route::post('file-edit-{id}', 'FileController@saveEdit');
Route::get('file-remove/{id}', 'FileController@remove')->name('file.remove');

Route::get('/service', 'ServiceController@service')->name('service');
Route::get('service-add', 'ServiceController@addForm')->name('service.add');
Route::post('service-add', 'ServiceController@saveAdd');
Route::get('service-edit-{id}', 'ServiceController@editForm')->name('service.edit');
Route::post('service-edit-{id}', 'ServiceController@saveEdit');
Route::get('service-remove/{id}', 'ServiceController@remove')->name('service.remove');
// Route::get('/', 'ServiceController@show');

// Route::get('/', 'SettingController@post');


Route::get('/booking', 'BookingController@booking')->name('booking');
Route::get('booking-add', 'BookingController@addForm')->name('booking.add');
Route::post('booking-add', 'BookingController@saveAdd');
Route::get('booking-edit-{id}', 'BookingController@editForm')->name('booking.edit');
Route::post('booking-edit-{id}', 'BookingController@saveEdit');
Route::get('booking-remove/{id}', 'BookingController@remove')->name('booking.remove');

Route::get('/rateservice', 'RateserviceController@rateservice')->name('rateservice');
Route::get('rateservice-edit-{id}', 'RateserviceController@editForm')->name('ratedoctor.edit');
Route::post('rateservice-edit-{id}', 'RateserviceController@saveEdit');
Route::get('rateservice-remove/{id}', 'RateserviceController@remove')->name('rateservice.remove');

Route::get('/setting', 'SettingController@setting')->name('setting');
Route::get('/', 'SettingController@index');
=======
Route::get('/home', 'PostController@home')->name('home')->middleware('auth');
Route::get('/', 'SettingController@index')->name('index');

Route::get('/post', 'PostController@post')->name('post')->middleware('auth');
Route::get('post-add', 'PostController@addForm')->name('post.add')->middleware('auth');
Route::post('post-add', 'PostController@saveAdd')->middleware('auth');
Route::get('post-edit-{id}', 'PostController@editForm')->name('post.edit')->middleware('auth');
Route::post('post-edit-{id}', 'PostController@saveEdit')->middleware('auth');
Route::get('post-remove/{id}', 'PostController@remove')->name('post.remove')->middleware('auth');

Route::get('/errorpost', 'ErrorpostController@errorpost')->name('errorpost')->middleware('auth');
Route::get('errorpost-remove/{id}', 'ErrorpostController@removeError')->name('errorpost.remove')->middleware('auth');

Route::get('/category', 'CategoryController@category')->name('category')->middleware('auth');
Route::get('category-add', 'CategoryController@addForm')->name('category.add')->middleware('auth');
Route::post('category-add', 'CategoryController@saveAdd')->middleware('auth');
Route::get('category-edit-{id}', 'CategoryController@editForm')->name('category.edit')->middleware('auth');
Route::post('category-edit-{id}', 'CategoryController@saveEdit')->middleware('auth');
Route::get('category-remove/{id}', 'CategoryController@remove')->name('category.remove')->middleware('auth');

Route::get('/doctor', 'DoctorController@doctor')->name('doctor')->middleware('auth');
Route::get('doctor-add', 'DoctorController@addForm')->name('doctor.add')->middleware('auth');
Route::post('doctor-add', 'DoctorController@saveAdd')->middleware('auth');
Route::get('doctor-edit-{id}', 'DoctorController@editForm')->name('doctor.edit')->middleware('auth');
Route::post('doctor-edit-{id}', 'DoctorController@saveEdit')->middleware('auth');
Route::get('doctor-remove/{id}', 'DoctorController@remove')->name('doctor.remove')->middleware('auth');

Route::get('/menu', 'MenuController@menu')->name('menu')->middleware('auth');
Route::get('menu-add', 'MenuController@addForm')->name('menu.add')->middleware('auth');
Route::post('menu-add', 'MenuController@saveAdd')->middleware('auth');
Route::get('menu-edit-{id}', 'MenuController@editForm')->name('menu.edit')->middleware('auth');
Route::post('menu-edit-{id}', 'MenuController@saveEdit')->middleware('auth');
Route::get('menu-remove/{id}', 'MenuController@remove')->name('menu.remove')->middleware('auth');

Route::get('/page', 'PageController@page')->name('page')->middleware('auth');
Route::get('page-add', 'PageController@addForm')->name('page.add')->middleware('auth');
Route::post('page-add', 'PageController@saveAdd')->middleware('auth');
Route::get('page-edit-{id}', 'PageController@editForm')->name('page.edit')->middleware('auth');
Route::post('page-edit-{id}', 'PageController@saveEdit')->middleware('auth');
Route::get('page-remove/{id}', 'PageController@remove')->name('page.remove')->middleware('auth');

Route::get('/comment', 'CommentController@comment')->name('comment')->middleware('auth');
Route::get('comment-edit-{id}', 'CommentController@editForm')->name('comment.edit')->middleware('auth');
Route::post('comment-edit-{id}', 'CommentController@saveEdit')->middleware('auth');
Route::get('comment-remove/{id}', 'CommentController@remove')->name('comment.remove')->middleware('auth');

Route::get('/contact', 'ContactController@contact')->name('contact')->middleware('auth');
Route::get('contact-remove/{id}', 'ContactController@remove')->name('contact.remove')->middleware('auth');

Route::get('/slide', 'SlideController@slide')->name('slide')->middleware('auth');
Route::get('slide-add', 'SlideController@addForm')->name('slide.add')->middleware('auth');
Route::post('slide-add', 'SlideController@saveAdd')->middleware('auth');
Route::get('slide-edit-{id}', 'SlideController@editForm')->name('slide.edit')->middleware('auth');
Route::post('slide-edit-{id}', 'SlideController@saveEdit')->middleware('auth');
Route::get('slide-remove/{id}', 'SlideController@remove')->name('slide.remove')->middleware('auth');

Route::get('/user', 'UserController@user')->name('user')->middleware('auth');
Route::get('/profile', 'UserController@profile')->name('profile')->middleware('auth');
Route::get('user-add', 'UserController@addForm')->name('user.add')->middleware('auth');
Route::post('user-add', 'UserController@saveAdd')->middleware('auth');
Route::get('user-edit-{id}', 'UserController@editForm')->name('user.edit')->middleware('auth');
Route::post('user-edit-{id}', 'UserController@saveEdit')->middleware('auth');
Route::get('user-remove/{id}', 'UserController@remove')->name('user.remove')->middleware('auth');

Route::get('/file', 'FileController@file')->name('file')->middleware('auth');
Route::get('file-add', 'FileController@addForm')->name('file.add')->middleware('auth');
Route::post('file-add', 'FileController@saveAdd')->middleware('auth');
Route::get('file-edit-{id}', 'FileController@editForm')->name('file.edit')->middleware('auth');
Route::post('file-edit-{id}', 'FileController@saveEdit')->middleware('auth');
Route::get('file-remove/{id}', 'FileController@remove')->name('file.remove')->middleware('auth');

Route::get('/service', 'ServiceController@service')->name('service')->middleware('auth');
Route::get('service-add', 'ServiceController@addForm')->name('service.add')->middleware('auth');
Route::post('service-add', 'ServiceController@saveAdd')->middleware('auth');
Route::get('service-edit-{id}', 'ServiceController@editForm')->name('service.edit')->middleware('auth');
Route::post('service-edit-{id}', 'ServiceController@saveEdit')->middleware('auth');
Route::get('service-remove/{id}', 'ServiceController@remove')->name('service.remove')->middleware('auth');

Route::get('/booking', 'BookingController@booking')->name('booking')->middleware('auth');
Route::get('booking-add', 'BookingController@addForm')->name('booking.add')->middleware('auth');
Route::post('booking-add', 'BookingController@saveAdd')->middleware('auth');
Route::get('booking-edit-{id}', 'BookingController@editForm')->name('booking.edit')->middleware('auth');
Route::post('booking-edit-{id}', 'BookingController@saveEdit')->middleware('auth');
Route::get('booking-remove/{id}', 'BookingController@remove')->name('booking.remove')->middleware('auth');

Route::get('/feedback', 'FeedbackController@feedback')->name('feedback')->middleware('auth');
Route::get('feedback-edit-{id}', 'FeedbackController@editForm')->name('feedback.edit')->middleware('auth');
Route::post('feedback-edit-{id}', 'FeedbackController@saveEdit')->middleware('auth');
Route::get('feedback-remove/{id}', 'FeedbackController@remove')->name('feedback.remove')->middleware('auth');

Route::get('/setting', 'SettingController@setting')->name('setting')->middleware('auth');
>>>>>>> Stashed changes
Route::get('/tin-tuc', 'SettingController@blog');
Route::get('/dich-vu', 'SettingController@service');
Route::get('/bac-si', 'SettingController@doctor');
Route::get('/lien-he', 'SettingController@contact');
Route::post('/tim-kiem', 'SettingController@search');
Route::get('/tai-khoan', 'SettingController@user')->name('tai-khoan');
<<<<<<< Updated upstream
Route::post('/chinh-sua-tai-khoan', 'SettingController@postSua');
Route::get('/chinh-sua-tai-khoan', 'SettingController@getSua')->name('edit-user');
Route::get('/tim-kiem-ho-so', 'SettingController@searchFile');
Route::post('/tim-kiem-ho-so', 'SettingController@postFile');
Route::get('/tin-tuc-{path}', 'SettingController@blogcate');
Route::get('/detail-{id}', 'SettingController@detail');
Route::get('/chi-tiet-bac-si-{id}', 'SettingController@detailDoctor');
Route::get('/chi-tiet-dich-vu-{id}', 'SettingController@detailService');
Route::get('/doi-mat-khau', 'SettingController@getPass');
// Route::get('/doi-mat-khau', 'SettingController@postPass');
Route::get('/lich-su-kham-{id}', 'SettingController@getHis');
Route::get('/chi-tiet-lich-su-{id}', 'SettingController@History');
Route::post('/comment-{id}', 'CommentController@postComment');

Route::get('setting-edit-{id}', 'SettingController@editForm')->name('setting.edit');
Route::post('setting-edit-{id}', 'SettingController@saveEdit');

Route::get('register', 'Auth\LoginController@registerForm')->name('register');
Route::post('register', 'Auth\LoginController@postRegister');
Route::get('login', 'Auth\LoginController@loginForm')->name('login');
Route::post('login', 'Auth\LoginController@postLogin');
=======
Route::post('/chinh-sua-tai-khoan-{id}', 'UserController@postSua');
Route::get('/chinh-sua-tai-khoan-{id}', 'UserController@getSua')->name('edit-user');
Route::get('/tim-kiem-ho-so', 'SettingController@searchFile');
Route::post('/tim-kiem-ho-so', 'SettingController@postFile');
Route::get('/tin-tuc-{path}', 'SettingController@blogcate');
Route::get('/detail-{id}', 'SettingController@detail')->name('detail');
Route::get('/chi-tiet-bac-si-{id}', 'SettingController@detailDoctor');
Route::get('/chi-tiet-dich-vu-{id}', 'SettingController@detailService');
Route::get('/doi-mat-khau-{id}', 'UserController@getSua')->name('edit-pass');
Route::post('/doi-mat-khau-{id}', 'UserController@postSua');
Route::get('/lay-lai-mat-khau', 'UserController@forgot')->name('lay-lai-mat-khau');
Route::post('/lay-lai-mat-khau', 'UserController@password');
Route::get('/lich-su-kham-{id}', 'SettingController@getHis');
Route::get('/chi-tiet-lich-su-{id}', 'SettingController@History')->name('chi-tiet-lich-su');
Route::post('/comment-{id}', 'CommentController@postComment');
Route::post('/', 'SettingController@postBooking')->name('index');
Route::get('/send-mail', 'MailSend@mailsend');
Route::post('/danh-gia-{id}', 'FeedbackController@postFeedback');
// Route::get('/bao-loi-bai-viet-{id}', 'SettingController@detail');
Route::post('/bao-loi-bai-viet-{id}', 'ErrorpostController@postError');
Route::post('/dang-ky-nhan-thong-tin', 'SettingController@postLienhe');
Auth::routes();

Route::get('setting-edit-{id}', 'SettingController@editForm')->name('setting.edit')->middleware('auth');
Route::post('setting-edit-{id}', 'SettingController@saveEdit')->middleware('auth');
>>>>>>> Stashed changes

Route::get('dang-nhap', 'Auth\LoginController@getDangnhap')->name('dang-nhap');
Route::post('dang-nhap', 'Auth\LoginController@postDangnhap');

Route::get('dang-ky', 'Auth\LoginController@getDangky')->name('dang-ky');
Route::post('dang-ky', 'Auth\LoginController@postDangky');

<<<<<<< Updated upstream
// Route::get('lay-lai-mat-khau', 'Auth\ForgotPasswordController@forgot')->name('lay-lai-mat-khau');
// Route::post('lay-lai-mat-khau', 'Auth\ForgotPasswordController@postForgot');

Route::post('/', 'SettingController@postBooking')->name('index');

Route::get('/send-mail', 'MailSend@mailsend');
Route::get('/lay-lai-mat-khau', 'MailSend@forgot');

=======
Route::get('cp-login', 'Auth\LoginController@loginForm')->name('cp-login');
Route::post('cp-login', 'Auth\LoginController@postLogin');
Auth::routes(['verify' => true]);
>>>>>>> Stashed changes
Route::get('logout', function(){
	Auth::logout();
	return redirect()->route('cp-login');
})->name('logout');

Route::get('dang-xuat', function(){
	Auth::logout();
	return redirect()->route('dang-nhap');
})->name('dang-xuat');

Route::get('forbidden', function(){
	return view('auth.403');
})->name('forbidden');

// admin

