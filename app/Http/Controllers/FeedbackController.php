<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Feedback;
use App\Service;
use App\Doctor;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
  public $timestamps = false;

  public function feedback(Request $request){
    $feedback = Feedback::all();
    return view('service.feedback', [
      'dsFeedback' => $feedback
    ]); 
  }

  public function postFeedback($id, Request $request) {
    $feedback = new Feedback;
    $feedback->user_id = Auth::user()->id;
    $feedback->service_id = $request->service_id;
    $feedback->doctor_id = $request->doctor_id;
    $feedback->message = $request->message;
    $feedback->status = 0;
    $feedback->rate = $request->rate;
    $feedback->save();

    return view('site.thank');
}

  public function remove($id){
    DB::beginTransaction();
    try{
     $model = Feedback::find($id);
     if($model){
      $model->delete();
      DB::commit();
    }
  } catch(Exception $ex){
        // ghi log lỗi lại
    DB::rollback();
  }

  return redirect(route('feedback'));
}

public function editForm($id){
  $model = Feedback::find($id);
  if(!$model){
    return redirect()->route('feedback');
  }
  $services = Service::all();
  $doctors = Doctor::all();
  $users = User::all();
  return view('service.edit-feedback', compact('model', 'services', 'doctors', 'users'));
}

public function saveEdit(Request $request){
  $model = Feedback::find($request->id);
  $model->fill($request->all());
  $model->save();
  return redirect(route('feedback'));
}

}