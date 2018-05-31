<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name','email','password'];

    public function order(){
    	return $this->hasMany('App\Order');
    }
}
