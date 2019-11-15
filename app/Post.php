<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $table = 'posts';
    public function category(){
    	return $this->belongsTo('App\Category', 'cate_id', 'id');
    }

    protected $fillable = [
    	'title', 'description', 'content', 'author',
    	'publish_date', 'status', 'cate_id'
    ];
}