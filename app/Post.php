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
    	'title', 'description','slug', 'feature_image', 'content', 'author',
    	'publish_date', 'status', 'views', 'cate_id'
    ];
}