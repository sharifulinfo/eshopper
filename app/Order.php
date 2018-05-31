<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function shipment(){
    	return $this->belongsTo('App\Shipment');
    }

    public function customer(){
    	return $this->belongsTo('App\Customer');
    }
}
