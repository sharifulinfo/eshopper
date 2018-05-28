@extends('Admin.adminMaster.adminLayout')
@section('adminContent')
<div class="col-md-10 col-lg-10">
	<div class="row">
		<div class="body_wrap"> 
			<h2>Update Category</h2> 
			<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p> 
			<div class="body_content">
				<form class="form-horizontal" action="{{route('updatecat')}}">
				  <div class="control-group">
				    <label class="control-label" for="inputEmail">Caregory Name:</label>
				    <div class="controls">
				      <input type="text" id="inputEmail" name="cat_name" placeholder="Caregory Name..." value="{{$result->cat_name}}">
				      <span class="text-danger">{{$errors->first('cat_name')}}	</span>
				    </div>
				  </div> 
				  <input type="hidden" name="id" value="{{$result->id}}">
				  <input type="hidden" name="cat_status" value="{{$result->cat_status}}">
				  	<div class="control-group">
					    <label class="control-label" for="inputPassword">Category Description:</label>
					    <div class="controls">
					      <textarea rows="4" cols="50" name="cat_desc">{{$result->cat_desc}}</textarea>
					    </div>
				  	</div>
				  	{{csrf_field()}}

					<div class="control-group">
					    <div class="controls"> 
					      <button type="submit" class="btn">Update</button>
					    </div>
					 </div>
				</form> 
			</div> 
			 
		</div>
	</div> 
</div> 
@endsection
