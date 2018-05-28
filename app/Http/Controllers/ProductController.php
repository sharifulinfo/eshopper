<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function __construct(){
        $this->middleware('auth')->except('index','categories','brands','productdetail');
    }



    public function categories($id){ 
        $data['result'] = \DB::table('products')->where('category_id',$id)->get(); 
        return view('pages.categories',$data);
    }
    public function brands($id){ 
        $data['result'] = \DB::table('products')->where('brand_id',$id)->get(); 
        return view('pages.brands',$data);
    }


    public function index(){
        $data['result'] = \App\Product::all();//paginate(); 
        return view('pages.content',$data);
    }

    public function productdetail($id){
        $data['result'] = \App\Product::find($id);
        return view('pages.productdetail',$data);
    }






//backend options
	public function allproduct(){
		$data['result'] = \App\Product::all(); 
         return view('Admin/allProduct',$data);
	}
    public function addproduct(){
    	return view('Admin.addProduct');
    }

    public function storeproduct(Request $request){
    	$this->validate($request,[
            'product_name'	=> 'required', 
            'product_desc' 	=> 'required',
            'category_id' => 'required',
            'brand_id' 	=> 'required',
            'product_price' => 'required|integer',
            'product_color' => 'required',  
        ]);

        $data = array();

        $data['product_name'] 	= $request->product_name; 
        $data['product_desc'] 	= $request->product_desc; 
        $data['category_id'] 	= $request->category_id; 
        $data['brand_id'] 		= $request->brand_id; 
        $data['product_price'] 	= $request->product_price; 
        $data['product_color'] 	= $request->product_color; 
        $data['product_status'] = $request->product_status; 

        if ($request->hasFile('product_img') && $request->product_img->isValid()) {
        	$file = $request->file('product_img');
        	 $imagePath = $request->product_img->store('');
        	 $imagePath = url('Frontend/images/shop/').'/'.$imagePath; 
        	 $data['product_img'] = $imagePath;

        	$request->product_img->move(public_path('Frontend/images/shop/'),$imagePath);
    	}else{
    		$data['product_img'] = url('Frontend/images/shop/').'/no-image.jpg';
    	}

    	$done = \DB::table('products')->insert($data); 
        if($done){
            return redirect('/allproduct')->with('msg','Product Added Successfully..!');
        }
    }

    public function editproduct($id){
    	$data['result'] = \App\Product::find($id);  
        return view('Admin/editProduct',$data);
    }

    public function updateproduct(Request $request){ 
        $this->validate($request,[
            'product_name'  => 'required', 
            'product_desc'  => 'required',
            'category_id' => 'required',
            'brand_id'  => 'required',
            'product_price' => 'required|numeric',
            'product_color' => 'required',  
        ]);

        $data = array();

        $data['product_name']   = $request->product_name; 
        $data['product_desc']   = $request->product_desc; 
        $data['category_id']    = $request->category_id; 
        $data['brand_id']       = $request->brand_id; 
        $data['product_price']  = $request->product_price; 
        $data['product_color']  = $request->product_color; 
        $data['product_status'] = $request->product_status; 
        $id = $request->id; 

        if ($request->hasFile('product_img') && $request->product_img->isValid()) {
            $file = $request->file('product_img');
             $imagePath = $request->product_img->store('');
             $imagePath = url('Frontend/images/shop/').'/'.$imagePath; 
             $data['product_img'] = $imagePath;

            $request->product_img->move(public_path('Frontend/images/shop/'),$imagePath);
            $dd = explode('shop/',$request->old_img);
            //dd($dd);
            unlink('Frontend/images/shop/'.$dd[1]);
        }else{
            $data['product_img'] = $request->old_img;
        }

        $done = \DB::table('products')->where('id', $id)->update($data); 
        if($done){
            return redirect('/allproduct')->with('msg','Product Updated Successfully..!');
        }
    }

    public function deleteproduct($id){
        $done = \DB::table('products')->where('id', $id)->delete(); 
        if($done){
            return redirect('/allproduct')->with('msg','Product Deleted Successfully..!');
        } 
    }
}
