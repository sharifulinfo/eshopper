<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['brand_name','brand_desc','brand_status'];
    public $timestamps = false;

    public function product(){
    	return $this->hasMany('App\Product');
    }
}
