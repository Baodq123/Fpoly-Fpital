<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class RateDoctor extends Model
{
    protected $table = "ratedoctors";

    public function doctor(){
    	return $this->hasMany('App\Doctor', 'name');
    }
    protected $fillable = [
    	'name', 'email','doctor','major','rate','content','status',
    ];
}