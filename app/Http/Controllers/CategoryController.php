<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        // $data['result'] = \App\Category::all(); 
        // return view('pages/content',$data);
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }



//Admin Options
    public function allcat(){
        $data['result'] = \App\Category::all(); 
         return view('Admin/allCat',$data);
    }

    public function addcat(){
         return view('Admin/addCat');
    }
    public function storecat(Request $request){
        $this->validate($request,[
            'cat_name' => 'required',
            'cat_desc' => 'required'
        ]);

        $result = new Category([
            'cat_name' => $request->cat_name,
            'cat_desc'  => $request->cat_desc,
            'cat_status' => 0
        ]);
        $done = $result->save(); 
        if($done){
            return redirect('/allcat')->with('msg','Category Added Successfully..!');
        }
    }
    public function editcat($id){
        $data['result'] = \App\Category::find($id);  
        return view('Admin/editCat',$data);
    }
    public function updatecat(Request $request){
        $u = \App\Category::find($request->id);
        $this->validate($request,[
            'cat_name' => 'required',
            'cat_desc' => 'required'
        ]);
        $u->fill([
            'cat_name' => $request->cat_name,
            'cat_desc'  => $request->cat_desc,
            'cat_status'  => $request->cat_status,
        ]);
        $done = $u->save();
        if($done){
            return redirect('/allcat')->with('msg','category Updated Successfully..!');
        }
    }

    public function deletecat($id){
        $succ = \App\Category::destroy($id);
        if($succ){
            return redirect('/allcat')->with('msg','Category Deleted Successfully..!');
        } 
    }
}
