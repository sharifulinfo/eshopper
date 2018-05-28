@extends('Admin.adminMaster.adminLayout')
@section('adminContent')
<div class="col-md-10 col-lg-10">
	<div class="row">
		<div class="body_wrap">
			<h2>Create a New Page</h2> 
			<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>
			@if (session('msg'))
	            <div class="alert alert-success">
	                {{ session('msg') }}
	            </div>
	        @endif
			<div class="body_content"> 
			    <div class="card-body">
			      <div class="table-responsive">
			        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			          <thead>
			            <tr>
			              <th>SL</th>
			              <th>Slider Name</th>
			              <th>Slider Desc</th>
			              <th>Slider Img</th>
			              <th>Slider Button</th>
			              <th>Action</th>
			              <th>Status</th> 
			            </tr>
			          </thead>
			          <tfoot>
			            <tr>
			              <th>SL</th>
			              <th>Slider Name</th>
			              <th>Slider Desc</th>
			              <th>Slider Img</th>
			              <th>Slider Button</th>
			              <th>Action</th>
			              <th>Status</th>  
			            </tr>
			          </tfoot>
			          <tbody>
			          	@php
			          		$i = 1;
			          	@endphp
			          	@foreach ($result as $slider) 
				            <tr>
				              <td>{{$i}}</td>
				              <td>{{$slider->slider_name}}</td>
				              <td>{!!$slider->slider_desc!!}</td>
				              <td><img src="{{$slider->slider_img}}" height="150" width="125"></td>
				              <td>{{$slider->slider_button}}</td>
				              <td>
				              	<a href="{{url('/editslider/'.$slider->id)}}" class="btn-success" style="padding: 5px;margin:5px;">Edit</a>||<a href="{{url('/deleteslider/'.$slider->id)}}" class="btn-danger" style="padding: 5px;margin:5px;">Delete</a>
				              </td>
				              <td>{{$slider->slider_status}}</td> 
				            </tr>
				            @php
				            	$i++;
				            @endphp
			            @endforeach 
			          </tbody>
			        </table>
			      </div>
			    </div> 
			</div>  
		</div>
	</div> 
</div> 

@endsection