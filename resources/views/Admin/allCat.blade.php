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
			              <th>Category Name</th>
			              <th>Category Desc</th>
			              <th>Action</th>
			              <th>Status</th> 
			            </tr>
			          </thead>
			          <tfoot>
			            <tr>
			              <th>SL</th>
			              <th>Category Name</th>
			              <th>Category Desc</th>
			              <th>Action</th>
			              <th>Status</th> 
			            </tr>
			          </tfoot>
			          <tbody>
			          	@php
			          		$i = 1;
			          	@endphp
			          	@foreach ($result as $cat) 
				            <tr>
				              <td>{{$i}}</td>
				              <td>{{$cat->cat_name}}</td>
				              <td>{!!$cat->cat_desc!!}</td>
				              <td>
				              	<a href="{{url('/editcat/'.$cat->id)}}" class="btn-success" style="padding: 5px;margin:5px;">Edit</a>||<a href="{{url('/deletecat/'.$cat->id)}}" class="btn-danger" style="padding: 5px;margin:5px;">Delete</a>
				              </td>
				              <td>{{$cat->cat_status}}</td> 
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