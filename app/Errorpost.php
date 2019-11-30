<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Errorpost extends Model
{
    protected $table = "errorposts";
    
    public function category(){
    	return $this->belongsTo('App\Category', 'cate_id', 'id');
    }

    public function post(){
    	return $this->belongsTo('App\Post', 'post_id', 'id');
    }

    protected $fillable = [
    	'post_id', 'author','cate_id','publish_date'
    ];
}