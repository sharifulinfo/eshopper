@extends('Admin.adminMaster.adminLayout')
@section('adminContent')
<div class="col-md-10 col-lg-10">
	<div class="row">
		<div class="body_wrap"> 
			<h2>Create a new Product</h2> 
			<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p> 
			<div class="body_content">
				<form class="form-horizontal" action="{{route('storeproduct')}}" method="post" enctype="multipart/form-data">
				  <div class="control-group"> 
				    <label class="control-label" for="inputEmail">Product Name:</label>
				    <div class="controls">
				      <input type="text" id="inputEmail" name="product_name" placeholder="Product Name..." value="{{old('product_name')}}">
				      <span class="text-danger">{{$errors->first('product_name')}}	</span>
				    </div>
				  </div> 
				  	<div class="control-group">
					    <label class="control-label" for="inputPassword">Product Img:</label>
					    <div class="controls">
					      <input type="file" name="product_img">
					    </div>
				  	</div>

				  	<div class="control-group">
					    <label class="control-label" for="inputPassword">Product Description:</label>
					    <div class="controls">
					      <textarea rows="4" cols="50" name="product_desc">{{old('product_desc')}} </textarea>
					     <span class="text-danger">{{$errors->first('product_desc')}}	</span>

					    </div>
				  	</div>
				  	<div class="control-group">
					    <label class="control-label" for="inputPassword">Category:</label>
					    <div class="controls"> 
						  <select class="form-control selectbox" id="sel1" name="category_id">
						  	@php
                                $cats = $cats = DB::table('categories')->get();
                            @endphp
                            @foreach ($cats as $cat) 
						    	<option value="{{$cat->id}}">{{$cat->cat_name}}</option> 
						    @endforeach
						  </select> 
						  <span class="text-danger">{{$errors->first('category_id')}}	</span>
					    </div>
				  	</div> 
				  	<div class="control-group">
					    <label class="control-label" for="inputPassword">Brand:</label>
					    <div class="controls"> 
						  <select class="form-control selectbox" id="sel1" name="brand_id">
						  	@php
                                $cats = DB::table('brands')->get();
                            @endphp
                            @foreach ($cats as $cat) 
						    	<option value="{{$cat->id}}">{{$cat->brand_name}}</option> 
						    @endforeach 
						  </select> 
						  <span class="text-danger">{{$errors->first('brand_id')}}	</span>
					    </div>
				  	</div>
				  	<div class="control-group"> 
					    <label class="control-label" for="inputEmail">Product Price:</label>
					    <div class="controls">
					      <input type="text" id="inputEmail" name="product_price" placeholder="Product Price" value="{{old('product_price')}}">
					      <span class="text-danger">{{$errors->first('product_price')}}	</span>
					    </div>
					 </div>
					 <div class="control-group"> 
					    <label class="control-label" for="inputEmail">Product Color:</label>
					    <div class="controls">
					      <input type="text" id="inputEmail" name="product_color" placeholder="Product Coler" value="{{old('product_color')}}">
					      <span class="text-danger">{{$errors->first('product_color')}}	</span>
					    </div>
					 </div>
					 <div class="control-group"> 
					    <label class="control-label" for="inputEmail">Product Status:</label>
					    <div class="controls">
					    	<label><input type="checkbox" value="1" name="product_status"></label>
					    </div>
					 </div>   

				  	{{csrf_field()}}

					<div class="control-group">
					    <div class="controls"> 
					      <button type="submit" class="btn">Save</button>
					    </div>
					 </div>
				</form> 
			</div> 
			 
		</div>
	</div> 
</div> 
@endsection
