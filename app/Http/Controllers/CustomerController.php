<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function login(){
    	if(session()->get('customer_id') == ''){
    		return view('pages.login');
    	}
    	return view('pages.checkout');
    }

    public function logincheck(Request $login){
    	$this->validate($login,[ 
            'lemail' 	=> 'email|exists:customers,email',   
            'lpassword' 	=> 'required',  
        ]);
        $data = \DB::table('customers')->where('email',$login->lemail)->where('password',md5($login->lpassword))->first();

        if($data){
        	session()->put('customer_id',$data->id); 
        	session()->put('customer_name',$data->name); 
        	session()->put('customer_email',$data->email); 
        	return redirect('/shipping');
    	}else{
    		return redirect('/customerlogin');
    	}
    }	

    public function signup(Request $request){
    	 $this->validate($request,[
            'name'		=> 'required', 
            'email' 	=> 'email|unique:customers,email',   
            'password' 	=> 'required',  
        ]);

    	$data = array();

    	$data['name'] 		= $request->name; 
        $data['email'] 		= $request->email; 
        $data['password'] 	= md5($request->password);

        $getID = \DB::table('customers')->insertGetId($data);

        session()->put('customer_id',$getID); 
        session()->put('customer_name',$request->name); 
        session()->put('customer_email',$request->email); 
        
        	return redirect('/shipping');
        
    }

    public function shipping(){ 
    	if(session()->get('customer_id') == ''){
    		return redirect('customerlogin');
    	}
    	return view('pages.checkout');
    } 

    public function logout(){
        session()->forget(['customer_id','customer_name','customer_email']);
        return redirect ('/');
    }
}
