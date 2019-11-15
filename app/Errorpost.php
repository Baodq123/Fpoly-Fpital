<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Errorpost extends Model
{
    protected $table = "errorposts";
    public function category(){
    	return $this->belongsTo('App\Category', 'cate_id', 'id');
    }

    protected $fillable = [
    	'title','author','cate_id','publish_date'
    ];
}