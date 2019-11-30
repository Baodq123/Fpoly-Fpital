<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Comment;
use App\User;
use App\Post;
use Illuminate\Support\Facades\DB;
class CommentController extends Controller
{
    public $timestamps = false;

    public function comment(Request $request){
			$comment = Comment::all();	
		return view('comment.comment', [
				'dsComment' => $comment
		]);
    }

    public function remove($id){

    	DB::beginTransaction();

    	try{
			$model = Comment::find($id);
			if($model){
				$model->delete();

                // DB::table('products')->where('cate_id', '=', $model->id)->delete();

    			DB::commit();
		    }
			
    	}catch(Exception $ex){
    
    		DB::rollback();
    	}
    	
		return redirect(route('comment'));
    }

    public function editForm($id){
        $model = Comment::find($id);
        $posts = Post::all();
        $users = User::all();
        if(!$model){
            return redirect()->route('comment');
        }
        return view('comment.edit-comment', compact('model', 'posts',' users'));
    }

    public function saveEdit(Request $request){
        $model = Comment::find($request->id);
        $model->fill($request->all());
        $model->save();
        return redirect(route('comment'));
    }

}