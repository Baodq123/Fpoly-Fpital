<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Booking extends Model
{
    protected $table = "booking";

    public function service(){
    	return $this->belongsTo('App\Service', 'service_id', 'id');
    }

    public function doctor(){
    	return $this->belongsTo('App\Post', 'doctor_id', 'id');
    }

    protected $fillable = [
<<<<<<< Updated upstream
    	'name', 'email', 'phone', 'date', 'time', 'service_id', 'doctor_id', 'status',
=======
    	'name', 'email', 'phone', 'date','time','service_id', 'doctor_id', 'note',
>>>>>>> Stashed changes
    ];
}