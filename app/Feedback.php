<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Feedback extends Model
{
    protected $table = "feedback";

    public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function service(){
    	return $this->belongsTo('App\Service', 'service_id', 'id');
    }

    public function doctor(){
    	return $this->belongsTo('App\Doctor', 'doctor_id', 'id');
    }

    protected $fillable = [
    	'user_id', 'service_id', 'doctor_id', 'rate', 'message', 'status'
    ];
}