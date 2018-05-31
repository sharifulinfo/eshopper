@extends('Admin.adminMaster.adminLayout')
@section('adminContent')
<div class="col-md-10 col-lg-10">
	<div class="row">
		<div class="body_wrap">
			<h2>Manage all orders</h2> 
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
			              <th>Customer Name</th>
			              <th>Customer Mobile</th>
			              <th>Total Bill</th>
			              <th>Action</th> 
			            </tr>
			          </thead>
			          <tfoot>
			            <tr>
			              <th>SL</th>
			              <th>Customer Name</th>
			              <th>Customer Mobile</th>
			              <th>Total Bill</th>
			              <th>Action</th>
			            </tr>
			          </tfoot>
			          <tbody>
			          	@php
			          		$i = 1;
			          	@endphp 
			          	@foreach ($result as $order) 
				            <tr>
				              <td>{{$i}}</td>
				              <td>{{$order->shipment['full_name']}}</td>
				              <td>{{$order->shipment['mobile']}}</td>
				              <td>${{$order->order_amount}}</td>
				              <td>
				              	<a href="{{url('/orderdetail/'.$order->id)}}" class="btn-success" style="padding: 5px;margin:5px;">View details</a>||<a href="{{url('/deleteorder/'.$order->id)}}" class="btn-danger" style="padding: 5px;margin:5px;">Delete</a>
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