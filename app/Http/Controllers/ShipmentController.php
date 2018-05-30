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
            'mobile' 			=> 'required',  
            'payment_method' 	=> 'required',  
        ]);

    	$data = [
    		'full_name'				=> $request->full_name,
    		'email'					=> $request->email,
    		'address'				=> $request->address,
    		'mobile'				=> $request->mobile,
    		'payment_method'		=> $request->payment_method,
    		'customer_id'			=> $request->customer_id,
    	]; 

    	$done = \DB::table('shipments')->where('id',$request->shipment_id)->update($data);

    	// if($done){
    	// 	$order = [
    	// 		'product_id'	=>
    	// 	];
    	// 	\DB::table('')
    	// }
    	echo "done";
    	exit();



    }
    public function addship(Request $request){
    	echo "add";
    }
}
