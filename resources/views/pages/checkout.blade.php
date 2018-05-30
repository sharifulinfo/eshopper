@extends('master')
@section('content')  
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
			<div class="checkout-options"> 
				<h3>Hello, {{ucfirst(session()->get('customer_name'))}}</h3>
				<p>Checkout options</p> 
			</div><!--/checkout-options--> 

			<div class="shopper-informations">
				<div class="row"> 
					<div class="col-sm-4">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-two">
								@php
									$id = session()->get('customer_id');
									$haveExist = DB::table('shipments')->where('customer_id',$id)->first(); 
								@endphp
								@if ($haveExist)
								<form action="{{ route('updateshipment') }}" method="post">
									<input type="text" placeholder="Full Name" value="{{$haveExist->full_name}}" name="full_name">
									<span class="text-danger">{{$errors->first('full_name')}}</span>
									<input type="text" placeholder="Email" value="{{$haveExist->email}}" name="email">   
									<span class="text-danger">{{$errors->first('email')}}</span>
									<input type="text" placeholder="Address" value="{{$haveExist->address}}" name="address">  
									<span class="text-danger">{{$errors->first('address')}}</span>
									<input type="text" placeholder="Zip / Postal Code *" value="{{$haveExist->zip}}" name="zip">  
									<input type="text" placeholder="Mobile Phone" value="{{$haveExist->mobile}}" name="mobile">
									<span class="text-danger">{{$errors->first('mobile')}}</span> 
									<select name="payment_method">
										<option selected>Payment method</option>
										<option value="Handcash">Handcash</option>
										<option value="bKash">bKash</option>
										<option value="Paypal">Paypal</option> 
									</select>
									<span class="text-danger">{{$errors->first('payment_method')}}</span> 
									{{csrf_field()}}
									<input type="hidden" name="customer_id" value="{{$id}}">
									<input type="hidden" name="shipment_id" value="{{$haveExist->id}}">
									<input type="submit" name="submit" value="Submit">
								</form>	
								@else 
								<form action="{{ route('addshipment') }}" method="post">
									<input type="text" placeholder="Full Name" value="{{session()->get('customer_name')}}" name="full_name">
									<span class="text-danger">{{$errors->first('full_name')}}</span>
									<input type="text" placeholder="Email" value="{{session()->get('customer_email')}}" name="email">  
									<span class="text-danger">{{$errors->first('email')}}</span> 
									<input type="text" placeholder="Address" value="{{old('address')}}" name="address">  
									<span class="text-danger">{{$errors->first('address')}}</span>
									<input type="text" placeholder="Zip / Postal Code *" value="{{old('zip')}}" name="zip">  
									<input type="text" placeholder="Mobile Phone" value="{{old('mobile')}}" name="mobile">
									<span class="text-danger">{{$errors->first('mobile')}}</span> 
									<select name="payment_method">
										<option selected>Payment method</option>
										<option value="Handcash">Handcash</option>
										<option value="bKash">bKash</option>
										<option value="Paypal">Paypal</option> 
									</select>
									<span class="text-danger">{{$errors->first('payment_method')}}</span> 
									{{csrf_field()}}
									<input type="hidden" name="customer_id" value="{{$id}}">
									<input type="submit" name="submit" value="Submit">
								</form>	
								@endif
							</div>
						</div>
					</div> 
					<div class="col-sm-8 clearfix">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td> 
							<td class="price"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td class="total">Action</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						 
						@php
							$cart_products = Cart::content();
						@endphp
						@foreach($cart_products as $product)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{$product->options->img}}" alt="" height="110" width="110"></a>
							</td> 
							<td></td>
							<td class="cart_price">
								<p>${{$product->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$product->qty}}" autocomplete="off" size="2" readonly="1"> 
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">${{$product->total}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{url('deletecart/'.$product->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr> 
						@endforeach

						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>${{Cart::subtotal()}}</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>${{Cart::tax()}}</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>${{Cart::total()}}</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div> 

		</div>					
				</div>
			</div>
			
	</section> <!--/#cart_items-->

@endsection