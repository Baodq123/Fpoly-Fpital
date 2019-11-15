<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class RateService extends Model
{
    protected $table = "rateservices";

    protected $fillable = [
    	'name', 'email', 'service', 'rate', 'content', 'status',
    ];
}