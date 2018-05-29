<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function login(){
    	return view('pages.login');
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

        dd($data);
    }
}
