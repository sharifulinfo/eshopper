@extends('Admin.adminMaster.adminLayout')
@section('adminContent')
<div class="col-md-10 col-lg-10">
	<div class="row">
		<div class="body_wrap">
			<h2>Create a Brand</h2> 
			<p>The use of these trademarks does not indibrande endorsement of the trademark holder by Font Awesome, nor vice versa.</p>
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
			              <th>Brand Name</th>
			              <th>Brand Desc</th>
			              <th>Action</th> 
			            </tr>
			          </thead>
			          <tfoot>
			            <tr>
			              <th>SL</th>
			              <th>Brand Name</th>
			              <th>Brand Desc</th>
			              <th>Action</th> 
			            </tr>
			          </tfoot>
			          <tbody>
			          	@php
			          		$i = 1;
			          	@endphp
			          	@foreach ($result as $brand) 
				            <tr>
				              <td>{{$i}}</td>
				              <td>{{$brand->brand_name}}</td>
				              <td>{!!$brand->brand_desc!!}</td>
				              <td>
				              	<a href="{{url('/editbrand/'.$brand->id)}}" class="btn-success" style="padding: 5px;margin:5px;">Edit</a>||<a href="{{url('/deletebrand/'.$brand->id)}}" class="btn-danger" style="padding: 5px;margin:5px;">Delete</a>
				              </td>  
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
