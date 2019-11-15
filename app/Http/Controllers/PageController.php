<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddPageRequest;
use App\Http\Requests\EditPageRequest;
class PageController extends Controller
{
    public $timestamps = false;

    public function page(Request $request){
			$page = Page::all();	
		return view('page.page', [
				'dsTrang' => $page
		]);
    }

    public function remove($id){

    	DB::beginTransaction();

    	try{
			$model = Page::find($id);
			if($model){
				$model->delete();

                // DB::table('products')->where('cate_id', '=', $model->id)->delete();

    			DB::commit();
		    }
			
    	}catch(Exception $ex){
    
    		DB::rollback();
    	}
    	
		return redirect(route('page'));
    }

    public function addForm(){
    	return view('page.add-page');
    }

     public function saveAdd(AddPageRequest $request){

    	$model = new Page();
    	
        $model->fill($request->all());

    	$model->save();

    	// Chuyển đường dẫn
    	return redirect()->route('page');
    }

    public function editForm($id){
        $model = Page::find($id);
        if(!$model){
            return redirect()->route('page');
        }
        return view('page.edit-page', compact('model'));
    }

    public function saveEdit(EditPageRequest $request){
        $model = Page::find($request->id);
        $model->fill($request->all());
        $model->save();
        return redirect(route('page'));
    }

}