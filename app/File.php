<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class File extends Model
{
    protected $table = "files";

    public function service(){
    	return $this->belongsTo('App\Service', 'service_id', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function doctor(){
    	return $this->belongsTo('App\Doctor', 'doctor_id', 'id');
    }

    protected $fillable = [
<<<<<<< Updated upstream
    	'name','code_patient','image','address','phone','date','note',
=======
    	'name','image','address','phone','date','note','email','kind_disease','doctor_id','code_patient','user_id','service_id'
>>>>>>> Stashed changes
    ];
}