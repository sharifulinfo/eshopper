<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
 	public function allorder(){
 		$data['result'] = \App\Order::all();  
         return view('Admin/allOrder',$data);
 	}

 	public function orderdetail($id){
 		// $users = DB::table('users')
   //          ->join('contacts', 'users.id', '=', 'contacts.user_id')
   //          ->join('orders', 'users.id', '=', 'orders.user_id')
   //          ->select('users.*', 'contacts.phone', 'orders.price')
   //          ->get();

 		$data['result'] = \DB::table('orders')
 			->join('orderdetails','orderdetails.order_id','=','orders.id')  
 			->join('products','orderdetails.product_id','=','products.id')
 			->join('shipments','shipments.id','=','orders.shipment_id')  
 			->join('customers','customers.id','=','orders.customer_id') 
 			->select('customers.name','customers.email', 'orders.order_amount', 'orderdetails.product_order_qty','shipments.full_name','shipments.address','shipments.mobile','products.product_name','products.product_price','products.product_img') 
 			 
 			->get();
 			dd($data); 
 		return view('Admin.orderDetails',$data);
 	}
}
