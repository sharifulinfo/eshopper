<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');//->except('index','single');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }


//Admin Options

    public function allbrand(){
        $data['result'] = \App\Brand::all(); 
         return view('Admin/allBrand',$data);
    }

     public function addbrand(){
         return view('Admin/addBrand');
    }
    public function storebrand(Request $request){
        $this->validate($request,[
            'brand_name' => 'required',
            'brand_desc' => 'required'
        ]);

        $result = new Brand([
            'brand_name' => $request->brand_name,
            'brand_desc'  => $request->brand_desc,
            'brand_status' => 1
        ]);
        $done = $result->save(); 
        if($done){
            return redirect('/allbrand')->with('msg','Brand Added Successfully..!');
        }
    }
    public function editbrand($id){
        $data['result'] = \App\Brand::find($id);  
        return view('Admin/editBrand',$data);
    }
    public function updatebrand(Request $request){
        $u = \App\Brand::find($request->id);
        $this->validate($request,[
            'brand_name' => 'required',
            'brand_desc' => 'required'
        ]);
        $u->fill([
            'brand_name' => $request->brand_name,
            'brand_desc'  => $request->brand_desc,
            'brand_status'  => 0
        ]);
        $done = $u->save();
        if($done){
            return redirect('/allbrand')->with('msg','Brand Updated Successfully..!');
        }
    }

    public function deletebrand($id){
        $succ = \App\Brand::destroy($id);
        if($succ){
            return redirect('/allbrand')->with('msg','Brand Deleted Successfully..!');
        } 
    }
}
