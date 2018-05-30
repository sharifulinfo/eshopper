<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shipment extends Model
{
    protected $fillable = ['full_name','email','address','zip','mobile','payment_method','customer_id'];
    public $timestamps = false;
}
