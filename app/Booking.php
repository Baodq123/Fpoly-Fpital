<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Booking extends Model
{
    protected $table = "booking";

    public function doctor(){
    	return $this->belongsTo('App\Doctor', 'doctor_id', 'id');
    }
    
    public function service(){
    	return $this->belongsTo('App\Service', 'service_id', 'id');
    }

    protected $fillable = [
    	'name', 'email', 'phone', 'date', 'service_id', 'doctor_id', 'note',
    ];
}