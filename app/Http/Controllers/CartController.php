<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addcart(Request $request){
    	//dd($request);
    	$data = \DB::table('products')->where('id',$request->id)->first();
    	// echo $data->product_img;
    	// exit();	
    	// dd($data);

    	$qnt = $request->qnt; 

    	$carts['cart_products'] = Cart::add(['id' => $data->id, 'name' => $data->product_name, 'qty' => $qnt, 'price' => $data->product_price, 'options' => ['img' => $data->product_img]]);

    	return redirect('/allcart');
    }
    public function allcart(){
    	return view('pages.cart');
    }
    public function deletecart($rowId){
    	Cart::remove($rowId);
    	return redirect('/allcart');
    }

    public function updatecart(Request $request){
    	$rowId = $request->rowId;
    	$qty = $request->quantity;
    	Cart::update($rowId,$qty);
    	return redirect('/allcart');
    }
}
