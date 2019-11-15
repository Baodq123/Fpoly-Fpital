<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\RateService;
use App\Service;
use Illuminate\Support\Facades\DB;

class RateserviceController extends Controller
{
  public $timestamps = false;

  public function rateservice(Request $request){
    $rateservice = RateService::all();
    return view('service.rateservice', [
      'dsDanhGiaDV' => $rateservice
    ]); 
  }

  public function remove($id){
    DB::beginTransaction();
    try{
     $model = RateService::find($id);
     if($model){
      $model->delete();
      DB::commit();
    }
  } catch(Exception $ex){
        // ghi log lỗi lại
    DB::rollback();
  }

  return redirect(route('rateservice'));
}

public function editForm($id){
  $model = RateService::find($id);
  if(!$model){
    return redirect()->route('rateservice');
  }
  return view('service.edit-rateservice', compact('model'));
}

public function saveEdit(Request $request){
  $model = RateService::find($request->id);
  $model->fill($request->all());
  $model->save();
  return redirect(route('rateservice'));
}

}