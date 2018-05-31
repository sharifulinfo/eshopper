<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    
    public function updateship(Request $request){
    	$this->validate($request,[
            'full_name'			=> 'required', 
            'email' 			=> 'required|email',   
            'address' 			=> 'required',  
            'zip'	 			=> 'required',  
            'mobile' 			=> 'required',  
            'payment_method' 	=> 'required',  
        ]);

    	$data = [
    		'full_name'				=> $request->full_name,
    		'email'					=> $request->email,
    		'address'				=> $request->address,
    		'zip'					=> $request->zip,
    		'mobile'				=> $request->mobile,
    		'payment_method'		=> $request->payment_method,
    		'customer_id'			=> $request->customer_id,
    	];  
    	$done = \DB::table('shipments')->where('id',$request->shipment_id)->update($data);
    	if($done){
	    	$order = [
	    		'customer_id'		=> $request->customer_id,
	    		'shipment_id'		=> $request->shipment_id,
	    		'order_amount'		=> \Cart::total(),
	    	];

	    	$order_id = \DB::table('orders')->insertGetId($order);

	    	if($order_id){
		    	$cart_products = \Cart::content();

		    	foreach($cart_products as $product){
		    		$orderDateils = [
		    			'product_id'		=> $product->id,
		    			'product_order_qty'	=> $product->qty,
		    			'order_id'			=> $order_id,
		    		];

		    		$done = \DB::table('orderdetails')->insertGetId($orderDateils);
		    	}
	    		if($done){ 
	    			\Cart::destroy();
	    			if($request->payment_method == 'Handcash'){
	    				return redirect ('/')->with('msg','Your order is successcfully completed. We will contact you soon.');
	    			}elseif ($request->payment_method == 'bKash') {
	    				return redirect ('/')->with('msg','01969516500 this is our bkash number. Please payment for order conformation. Thanks');
	    			}elseif ($request->payment_method == 'Paypal') {
	    				return redirect ('/')->with('msg','Sorry!, our paypal is not working recently. Please confrom your order to Handcash or bKash. Thanks');
	    			} 	
	    		} 
		    }	
	    }  
    }
    public function addship(Request $request){
    	$this->validate($request,[
            'full_name'			=> 'required', 
            'email' 			=> 'required|email',   
            'address' 			=> 'required',  
            'zip'	 			=> 'required',  
            'mobile' 			=> 'required',  
            'payment_method' 	=> 'required',  
        ]);

    	$data = [
    		'full_name'				=> $request->full_name,
    		'email'					=> $request->email,
    		'address'				=> $request->address,
    		'zip'					=> $request->zip,
    		'mobile'				=> $request->mobile,
    		'payment_method'		=> $request->payment_method,
    		'customer_id'			=> $request->customer_id,
    	];  
    	$shipment_id = \DB::table('shipments')->insertGetId($data);
    	if($shipment_id){
	    	$order = [
	    		'customer_id'		=> $request->customer_id,
	    		'shipment_id'		=> $shipment_id,
	    		'order_amount'		=> \Cart::total(),
	    	];

	    	$order_id = \DB::table('orders')->insertGetId($order);

	    	if($order_id){
		    	$cart_products = \Cart::content();

		    	foreach($cart_products as $product){
		    		$orderDateils = [
		    			'product_id'		=> $product->id,
		    			'product_order_qty'	=> $product->qty,
		    			'order_id'			=> $order_id,
		    		];

		    		$done = \DB::table('orderdetails')->insertGetId($orderDateils);
		    	}
	    		if($done){ 
	    			\Cart::destroy();
	    			if($request->payment_method == 'Handcash'){
	    				return redirect ('/')->with('msg','Your order is successcfully completed. We will contact you soon.');
	    			}elseif ($request->payment_method == 'bKash') {
	    				return redirect ('/')->with('msg','01969516500 this is our bkash number. Please payment for order conformation. Thanks');
	    			}elseif ($request->payment_method == 'Paypal') {
	    				return redirect ('/')->with('msg','Sorry!, our paypal is not working recently. Please confrom your order to Handcash or bKash. Thanks');
	    			} 	
	    		} 
		    }	
	    }
    }
}
