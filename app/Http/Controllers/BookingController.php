<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Booking;
use App\Doctor;
use App\Service;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddBookingRequest;
class BookingController extends Controller
{
  public $timestamps = false;

  public function booking(Request $request){
   $booking = Booking::all();	
   return view('service.booking', [
    'dsBooking' => $booking
  ]);
 }

 public function remove($id){

   DB::beginTransaction();

   try{
     $model = Booking::find($id);
     if($model){
      $model->delete();

                // DB::table('products')->where('cate_id', '=', $model->id)->delete();

      DB::commit();
    }
  }catch(Exception $ex){
    DB::rollback();
  }
  return redirect(route('booking'));
}

public function addForm(){
  $doctors = Doctor::all();
  $services = Service::all();
   return view('service.add-booking', compact('doctors','services'));
}

public function saveAdd(AddBookingRequest $request){

 $model = new Booking();

 $model->fill($request->all());

 $model->save();

    	// Chuyển đường dẫn
 return redirect()->route('booking');
}

public function editForm($id){
  $model = Booking::find($id);
  if(!$model){
    return redirect()->route('booking');
  }
  $doctors = Doctor::all();
  $services = Service::all();
  return view('service.edit-booking', compact('model', 'doctors', 'services'));
}

public function saveEdit(AddBookingRequest $request){
  $model = Booking::find($request->id);
  $model->fill($request->all());
  $model->save();
  return redirect(route('booking'));
}

}