@extends('master')
@section('content')  
@include('pages.inc.sidebar')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="#">
							<input type="email" placeholder="Email-Address" />
							<input type="password" placeholder="password" /> 
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="{{ route('signup') }}" method="post">
							{{csrf_field()}}
							<input type="text" placeholder="Name" name="name" value="{{old('name')}}" />
							 <span class="text-danger">{{$errors->first('name')}}	</span>
							<input type="text" placeholder="Email Address" name="email" value="{{old('email')}}"  />
							 <span class="text-danger">{{$errors->first('email')}}	</span>
							<input type="password" placeholder="Password" name="password"/>
							 <span class="text-danger">{{$errors->first('password')}}</span>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
@endsection