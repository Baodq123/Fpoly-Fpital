<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{
    protected $table = "comments";

    public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function post(){
    	return $this->belongsTo('App\Post', 'post_id', 'id');
    }

    protected $fillable = [
    	'user_id', 'message', 'post_id', 'status',
    ];
}