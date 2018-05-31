<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $fillable = ['product_id','product_order_qty','order_id'];
    public $timestamps = false;
}
