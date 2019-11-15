<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Account extends Model
{
    protected $table = "accounts";

    protected $fillable = [
    	'username', 'name', 'password', 'image', 'email', 'phone', 'rule',
    ];
}