<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $table = 'posts';

    public function category(){
    	return $this->belongsTo('App\Category', 'cate_id', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    protected $fillable = [
    	'title', 'feature_images', 'description', 'slug', 'content', 'author',
    	'publish_date', 'status', 'cate_id', 'views'
    ];
}