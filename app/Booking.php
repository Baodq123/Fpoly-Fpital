<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Booking extends Model
{
    protected $table = "booking";

    protected $fillable = [
    	'name', 'email', 'phone', 'publish_date', 'major', 'note',
    ];
}