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

Route::get('/home', 'PostController@home')->name('home')->middleware('auth');

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
Route::get('setting-edit-{id}', 'SettingController@editForm')->name('setting.edit')->middleware('auth');
Route::post('setting-edit-{id}', 'SettingController@saveEdit')->middleware('auth');

Route::get('login', 'Auth\LoginController@loginForm')->name('login');
Route::post('login', 'Auth\LoginController@postLogin');
Auth::routes(['verify' => true]);
Route::get('logout', function(){
	Auth::logout();
	return redirect()->route('login');
})->name('logout');

Route::get('forbidden', function(){
	return view('auth.403');
})->name('forbidden');

// admin

