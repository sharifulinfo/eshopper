<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');//->except('slides');
    } 

     
    
    //Admin options
    public function allslider(){
    		$data['result'] = \App\Slider::all(); 
             return view('Admin/allSlider',$data);
    	}
        public function addslider(){
        	return view('Admin.addSlider');
        }
    
        public function storeslider(Request $request){
        	$this->validate($request,[
                'slider_name'	=> 'required', 
                'slider_desc' 	=> 'required',
                'slider_button'	=> 'required',
            ]);
    
             $data = array();
    
	            $data['slider_name'] 	= $request->slider_name; 
	            $data['slider_desc'] 	= $request->slider_desc;  
	            $data['slider_button'] 	= $request->slider_button;  
	    
	            if ($request->hasFile('slider_img') && $request->slider_img->isValid()) {
	        	 $file = $request->file('slider_img');
	        	 $imagePath = $request->slider_img->store('');
	        	 $imagePath = url('Frontend/images/sliders/').'/'.$imagePath; 
	        	 $data['slider_img'] = $imagePath;

	        	$request->slider_img->move(public_path('Frontend/images/sliders/'),$imagePath);
	    	}else{
	    		$data['slider_img'] = url('Frontend/images/sliders/').'/no-slider.jpg';
	    	}

	    	$done = \DB::table('sliders')->insert($data); 
	        if($done){
	            return redirect('/allslider')->with('msg','Slider Added Successfully..!');
	        }
        }
    
        public function editslider($id){
        	$data['result'] = \App\Slider::find($id);  
            return view('Admin/editSlider',$data);
        }

        public function updateslider(Request $request){
        	$this->validate($request,[
                'slider_name'	=> 'required', 
                'slider_desc' 	=> 'required',
                'slider_button'	=> 'required',
            ]);
    
             $data = array();
    
	            $data['slider_name'] 	= $request->slider_name; 
	            $data['slider_desc'] 	= $request->slider_desc;  
	            $data['slider_button'] 	= $request->slider_button;  
	            $slider_id	= $request->s_id;  
	    
	        if ($request->hasFile('slider_img') && $request->slider_img->isValid()) {
	        	 $file = $request->file('slider_img');
	        	 $imagePath = $request->slider_img->store('');
	        	 $imagePath = url('Frontend/images/sliders/').'/'.$imagePath; 
	        	 $data['slider_img'] = $imagePath;

	        	$request->slider_img->move(public_path('Frontend/images/sliders/'),$imagePath);
	        	$dd = explode('sliders/',$request->img); 
            	unlink('Frontend/images/sliders/'.$dd[1]);
	    	}else{
	    		$data['slider_img'] = $request->img;
	    	} 
	    	$done = \DB::table('sliders')->where('id',$slider_id)->update($data); 
	        if($done){
	            return redirect('/allslider')->with('msg','Slider Updated Successfully..!');
	        }
        }
    
        // public function updateslider(Request $request){ 
        //     ->validate($request,[
        //         'slider_name'  => 'required', 
        //         'slider_desc'  => 'required', 
        //     ]);
    
        //      = array();
    
        //     ['slider_name']   = $request->slider_name; 
        //     ['slider_desc']   = $request->slider_desc; 
        //      = $request->id; 
    
        //     if ($request->hasFile('slider_img') && $request->slider_img->isValid()) {
        //          = $request->file('slider_img');
        //           = $request->slider_img->store('');
        //           = url('Frontend/images/shop/').'/'.; 
        //          ['slider_img'] = ;
    
        //         $request->slider_img->move(public_path('Frontend/images/shop/'),);
        //     }else{
        //         ['slider_img'] = $request->old_img;
        //     }
    
        //      = \DB::table('sliders')->where('id', )->update(); 
        //     if(){
        //         return redirect('/allslider')->with('msg','slider Updated Successfully..!');
        //     }
        // }
    
        // public function deleteslider(){
        //      = \DB::table('sliders')->where('id', )->delete(); 
        //     if(){
        //         return redirect('/allslider')->with('msg','slider Deleted Successfully..!');
        //     } 
        // }
    
}
