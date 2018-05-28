@extends('Admin.adminMaster.adminLayout')
@section('adminContent')
<div class="col-md-10 col-lg-10">
	<div class="row">
		<div class="body_wrap"> 
			<h2>Create a new Brand</h2> 
			<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p> 
			<div class="body_content">
				<form class="form-horizontal" action="{{route('storebrand')}}">
				  <div class="control-group">
				    <label class="control-label" for="inputEmail">Brand Name:</label>
				    <div class="controls">
				      <input type="text" id="inputEmail" name="brand_name" placeholder="Brand Name..." value="{{old('brand_name')}}">
				      <span class="text-danger">{{$errors->first('brand_name')}}	</span>
				    </div>
				  </div> 

				  	<div class="control-group">
					    <label class="control-label" for="inputPassword">Brand Description:</label>
					    <div class="controls">
					      <textarea rows="4" cols="50" name="brand_desc"> </textarea>
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
