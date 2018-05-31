@extends('Admin.adminMaster.adminLayout')
@section('adminContent')
<div class="col-md-10 col-lg-10">
	<div class="row">
		<div class="body_wrap">
			<h2>Order Details</h2> 
			<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>
			@if (session('msg'))
	            <div class="alert alert-success">
	                {{ session('msg') }}
	            </div>
	        @endif 
	    	<section>
	    		<div class="row">
	    			<div class="col-lg-4">
					   <p>Customer information</p>
	    				<table class="table table-bordered">
					      <thead>
					        <tr> 
					          <th>Customer Name</th>
					          <th>email</th> 
					        </tr>
					      </thead>
					      <tbody> 
					        <tr>
					          <td>{{$result->name}}</td>
					          <td>{{$result->email}}</td> 
					        </tr> 
					    </table>
	    			</div>
	    			<div class="col-lg-8">
	    				<p>Shipping information</p>
	    				<table class="table table-bordered">
					      <thead>
					        <tr> 
					          <th>Receiver Name</th>
					          <th>Address</th> 
					          <th>Mobile</th>  
					        </tr>
					      </thead>
					      <tbody> 
					        <tr>
					          <td>{{$result->full_name}}</td>
					          <td>{{$result->address}}</td>
					          <td>{{$result->mobile}}</td>
					        </tr>
					        <tr> 
					      </tbody>
					    </table>
	    			</div>
	    		</div>
	    	</section>
	    	<section>
	    		<p>Order information</p>
	    		<table class="table">
			      <thead>
			        <tr>
			          <th>SL</th>
			          <th>Order Id</th>
			          <th>Product Name</th>
			          <th>Product Price</th>
			          <th>Product Quantity</th>
			          <th>Subtotal</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr class="active">
			          <td>1</td>
			          <td>02</td>
			          <td>Jamla pantn</td>
			          <td>200</td>
			          <td>2</td>
			          <td>400</td>
			        </tr> 
			        <tr class="success">
			          <td colspan="5">Total</td> 
			          <td>400</td>
			        </tr> 
			      </tbody>
			    </table>
	    	</section>   
		</div>
	</div> 
</div> 

@endsection