<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Booking;
use App\Doctor;
use App\Service;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddBookingRequest;
use App\Http\Requests\EditBookingRequest;
class BookingController extends Controller
{
    public $timestamps = false;

    public function booking(Request $request){
			$booking = Booking::all();	
		return view('booking.booking', [
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
    	return view('booking.add-booking');
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
        return view('booking.edit-booking', compact('model'));
    }

    public function saveEdit(EditBookingRequest $request){
        $model = Booking::find($request->id);
        $model->fill($request->all());
        $model->save();
        return redirect(route('booking'));
    }

}