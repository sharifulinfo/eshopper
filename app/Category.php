<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['cat_name','cat_desc','cat_status','cat_parent'];
    public $timestamps = false;

    public function product(){
    	return $this->hasMany('App\Product');
    }
}
