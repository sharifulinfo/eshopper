@extends('Admin.adminMaster.adminLayout')
@section('adminContent')
<div class="col-md-10 col-lg-10">
	<div class="row">
		<div class="body_wrap">
			<h2>All Product</h2> 
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
			              <th>Product Name</th>
			              <th>Product Img</th>
			              <th>Product Desc</th>
			              <th>Product Category</th>
			              <th>Product Brand</th>
			              <th>Product Price</th> 
			              <th>Product color</th> 
			              <th>Status</th> 
			              <th>Action</th>
			            </tr>
			          </thead>
			          <tfoot>
			            <tr>
			              <th>SL</th>
			              <th>Product Name</th>
			              <th>Product Img</th>
			              <th>Product Desc</th>
			              <th>Product Category</th>
			              <th>Product Brand</th>
			              <th>Product Price</th> 
			              <th>Product color</th> 
			              <th>Status</th> 
			              <th>Action</th> 
			            </tr>
			          </tfoot>
			          <tbody>
			          	@php
			          		$i = 1;
			          	@endphp
			          	@foreach ($result as $product) 
			          	@php
			          		$desc = str_limit($product->product_desc,150);
			          	@endphp
				            <tr>
				              <td>{{$i}}</td>
				              <td>{{$product->product_name}}</td>
				              <td> <img src="{{$product->product_img}}" height="100" width="150"></td>
				              <td>{{$desc}}</td>
				              <td>{{$product->category['cat_name']}}</td>
				              <td>{{$product->brand['brand_name']}}</td>
				              <td>{{$product->product_price}}</td>
				              <td>{{$product->product_color}}</td>
				              <td>Active</td>
				              <td>
				              	<a href="{{url('/editproduct/'.$product->id)}}" class="btn-success" style="padding: 5px;margin:5px;">Edit</a>||<a href="{{url('/deleteproduct/'.$product->id)}}" class="btn-danger" style="padding: 5px;margin:5px;">Delete</a>
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