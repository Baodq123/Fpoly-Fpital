<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\RateDoctor;
use App\Doctor;
use Illuminate\Support\Facades\DB;

class RatedoctorController extends Controller
{
  public $timestamps = false;

  public function ratedoctor(Request $request){
    $ratedoctor = RateDoctor::all();
    return view('doctor.ratedoctor', [
      'dsDanhGiaBS' => $ratedoctor
    ]); 
  }

  public function removeRatedoctor($id){
    DB::beginTransaction();
    try{
     $model = RateDoctor::find($id);
     if($model){
      $model->delete();
      DB::commit();
    }
  } catch(Exception $ex){
        // ghi log lỗi lại
    DB::rollback();
  }

  return redirect(route('ratedoctor'));
}

public function editForm($id){
  $model = RateDoctor::find($id);
  if(!$model){
    return redirect()->route('doctor');
  }
  return view('doctor.edit-ratedoctor', compact('model'));
}

public function saveEdit(Request $request){
  $model = RateDoctor::find($request->id);
  $model->fill($request->all());
  $model->save();
  return redirect(route('ratedoctor'));
}

}