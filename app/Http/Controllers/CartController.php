<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addcart(Request $request){
    	//dd($request);
    	$data = \DB::table('products')->where('id',$request->id)->first();
    	dd($data);
    	return view('pages.cart');
    }
}
