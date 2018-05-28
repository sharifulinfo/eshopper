@extends('Admin.adminMaster.adminLayout')
@section('adminContent')
<div class="col-md-10 col-lg-10">
	<div class="row">
		<div class="body_wrap"> 
			<h2>Update Slider</h2> 
			<p>The use of these trademarks does not indislidere endorsement of the trademark holder by Font Awesome, nor vice versa.</p> 
			<div class="body_content">
				<form class="form-horizontal" action="{{route('updateslider')}}" method="post" enctype="multipart/form-data">
				  <div class="control-group">
				    <label class="control-label" for="inputEmail">Slider Name:</label>
				    <div class="controls">
				      <input type="text" id="inputEmail" name="slider_name" placeholder="Slider Name..." value="{{$result->slider_name}}">
				      <span class="text-danger">{{$errors->first('slider_name')}}	</span>
				    </div>
				  </div> 
				  <input type="hidden" name="img" value="{{$result->slider_img}}">
				  <input type="hidden" name="s_id" value="{{$result->id}}">

				  <div class="control-group">
				    <label class="control-label" for="inputEmail">Slider Img:</label>
				    <div class="controls">
				  		<img src="{{$result->slider_img}}" height="200" width="150"> 
				      <input type="file" id="inputEmail" name="slider_img" value="{{old('slider_img')}}">
				      <span class="text-danger">{{$errors->first('slider_img')}}</span>
				    </div>
				  </div>

				  <div class="control-group">
				    <label class="control-label" for="inputEmail">Slider Button:</label>
				    <div class="controls">
				      <input type="text" id="inputEmail" name="slider_button" placeholder="Slider button..." value="{{$result->slider_button}}">
				      <span class="text-danger">{{$errors->first('slider_button')}}	</span>
				    </div>
				  </div>

				  	<div class="control-group">
					    <label class="control-label" for="inputPassword">slideregory Description:</label>
					    <div class="controls">
					      <textarea rows="4" cols="50" name="slider_desc"> {{$result->slider_desc}} </textarea>
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
