<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
class CategoryController extends Controller
{
    public $timestamps = false;
    public function category(Request $request){
			$category = Category::all();	
		return view('category.category', [
				'dsDanhMuc' => $category
		]);
    }

    public function remove($id){

    	DB::beginTransaction();

    	try{
			$model = Category::find($id);
			if($model){
				$model->delete();

                // DB::table('products')->where('cate_id', '=', $model->id)->delete();

    			DB::commit();
		    }
			
    	}catch(Exception $ex){
    
    		DB::rollback();
    	}
    	
		return redirect(route('category'));
    }

    public function addForm(){
    	return view('category.add-category');
    }

     public function saveAdd(AddCategoryRequest $request){

    	$model = new Category();
    	
        $model->fill($request->all());

    	$model->save();

    	// Chuyển đường dẫn
    	return redirect()->route('category');
    }

    public function editForm($id){
        $model = Category::find($id);
        if(!$model){
            return redirect()->route('category');
        }
        return view('category.edit-category', compact('model'));
    }

    public function saveEdit(EditCategoryRequest $request){
        $model = Category::find($request->id);
        $model->fill($request->all());
        $model->save();
        return redirect(route('category'));
    }

}