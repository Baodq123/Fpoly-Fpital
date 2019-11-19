<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    public $timestamps = false;

    public function comment(Request $request){
			$comment = Comment::all();	
		return view('comment.comment', [
				'dsComment' => $comment
		]);
    }

    public function postComment($id, Request $request) {
        $cates = Category::all();
        $post_id = $id;
        $detail = Post::find($id)->where('id', 'post_id')->get();
        $comment = new Comment;
        $comment->post_id = $post_id;
        $comment->user_id = Auth::user()->id;
        $comment->message = $request->message;
        $comment->status = 0;
        $comment->save();

        return redirect("detail-{$id}", compact('cates'));
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
        if(!$model){
            return redirect()->route('comment');
        }
        return view('comment.edit-comment', compact('model'));
    }

    public function saveEdit(Request $request){
        $model = Comment::find($request->id);
        $model->fill($request->all());
        $model->save();
        return redirect(route('comment'));
    }

}