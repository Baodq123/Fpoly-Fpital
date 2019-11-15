<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\DB;
class ContactController extends Controller
{
    public $timestamps = false;

    public function contact(Request $request){
			$contact = Contact::all();	
		return view('contact.contact', [
				'dsContact' => $contact
		]);
    }

    public function remove($id){

    	DB::beginTransaction();

    	try{
			$model = Contact::find($id);
			if($model){
				$model->delete();

                // DB::table('products')->where('cate_id', '=', $model->id)->delete();

    			DB::commit();
		    }
			
    	}catch(Exception $ex){
    
    		DB::rollback();
    	}
    	
		return redirect(route('contact'));
    }

}