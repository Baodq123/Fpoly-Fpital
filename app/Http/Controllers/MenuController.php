<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Menu;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddMenuRequest;
use App\Http\Requests\EditMenuRequest;
class MenuController extends Controller
{
    public $timestamps = false;

    public function menu(Request $request){
			$menu = Menu::all();	
		return view('menu.menu', [
				'dsMenu' => $menu
		]);
    }

    public function remove($id){

    	DB::beginTransaction();

    	try{
			$model = Menu::find($id);
			if($model){
				$model->delete();

                // DB::table('products')->where('cate_id', '=', $model->id)->delete();

    			DB::commit();
		    }
			
    	}catch(Exception $ex){
    
    		DB::rollback();
    	}
    	
		return redirect(route('menu'));
    }

    public function addForm(){
    	return view('menu.add-menu');
    }

     public function saveAdd(AddMenuRequest $request){

    	$model = new Menu();
    	
        $model->fill($request->all());

    	$model->save();

    	// Chuyển đường dẫn
    	return redirect()->route('menu');
    }

    public function editForm($id){
        $model = Menu::find($id);
        if(!$model){
            return redirect()->route('menu');
        }
        return view('menu.edit-menu', compact('model'));
    }

    public function saveEdit(EditCategoryRequest $request){
        $model = Menu::find($request->id);
        $model->fill($request->all());
        $model->save();
        return redirect(route('menu'));
    }

}