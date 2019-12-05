<?php



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

Route::get('/user', 'UserController@user')->name('user');
Route::get('user-add', 'UserController@addForm')->name('user.add');
Route::post('user-add', 'UserController@saveAdd');
Route::get('user-edit-{id}', 'UserController@editForm')->name('user.edit');
Route::post('user-edit-{id}', 'UserController@saveEdit');
Route::get('user-remove/{id}', 'UserController@remove')->name('user.remove');

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

Route::get('/booking', 'BookingController@booking')->name('booking');
Route::get('booking-add', 'BookingController@addForm')->name('booking.add');
Route::post('booking-add', 'BookingController@saveAdd');
Route::get('booking-edit-{id}', 'BookingController@editForm')->name('booking.edit');
Route::post('booking-edit-{id}', 'BookingController@saveEdit');
Route::get('booking-remove/{id}', 'BookingController@remove')->name('booking.remove');

Route::get('/feedback', 'FeedbackController@feedback')->name('feedback');
Route::get('feedback-edit-{id}', 'FeedbackController@editForm')->name('feedback.edit');
Route::post('feedback-edit-{id}', 'FeedbackController@saveEdit');
Route::get('feedback-remove/{id}', 'FeedbackController@remove')->name('feedback.remove');

Route::get('/setting', 'SettingController@setting')->name('setting');
Route::get('setting-edit-{id}', 'SettingController@editForm')->name('setting.edit');
Route::post('setting-edit-{id}', 'SettingController@saveEdit');