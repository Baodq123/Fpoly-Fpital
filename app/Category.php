<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $table = "categories";
    public function posts(){
    	return $this->hasMany('App\Post', 'cate_id');
    }
    public function errorpost(){
    	return $this->hasMany('App\Errorpost', 'cate_id');
    }

    protected $fillable = [
    	'name', 'path',
    ];
}