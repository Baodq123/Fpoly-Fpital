<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class History extends Model
{
    protected $table = "histories";

    public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    protected $fillable = [
    	'user_id','code_patient', 'address','date','kind_desease','name','phone','doctor','status'  
    ];
}