<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class History extends Model
{
    protected $table = "histories";

    public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function doctor(){
    	return $this->belongsTo('App\Doctor', 'doctor_id', 'id');
    }

    public function service(){
    	return $this->belongsTo('App\Service', 'service_id', 'id');
    }

    protected $fillable = [
    	'user_id','service_id','code_patient', 'address','date','kind_desease','name','phone','doctor_id','status'  
    ];
}