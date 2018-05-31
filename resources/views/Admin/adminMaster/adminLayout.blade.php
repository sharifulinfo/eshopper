<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
   
    <title>Action HTML</title>

    <!--[if (gt IE 8) | (IEMobile)]><!--> 
    <link rel="stylesheet" href="{{url('Backend')}}/css/csmenu.css">
    <link rel="stylesheet" href="{{url('Backend')}}/css/bootstrap.css">
	<link rel="stylesheet" href="{{url('Backend')}}/css/bootstrap-select.css"> 
	<link rel="stylesheet" href="{{url('Backend')}}/css/style.css">  

  	 
  	<!-- Page level plugin CSS-->
  	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  	<!-- Custom styles for this template-->
  	<link href="{{url('Backend')}}/css/sb-admin.css" rel="stylesheet">

	<link rel="stylesheet" href="font/css/font-awesome.css" />
	<link rel="stylesheet" href="font/css/font-awesome.min.css" />
	
 
 
</head>
<body>
<section>
	
</section>
<section>
	<div class="col-md-12 col-lg-12">
		<div class="row">
			<div class="desh_bord_top_menu">
				<div class="col-md-4">
					<a href="index.html">Logo</a>
				</div> 
				<div class="col-md-8">
					<div class="top_menu">
						<ul>
							<li><a href="{{ route('logout') }}">Logout </a></li>
							<li>|</li>
							<li><img src="{{url('Backend')}}/../images/profile_img.jpg"><span>{{ Auth::user()->name }} </span> </li> 
						</ul>
					</div>
				</div> 
			</div> 
		</div>
	</div>
</section> 
<section>
	<div class="col-md-12 col-lg-12">
		<div class="row">
			<div class="desh_bord_top_menu desh_bord_top_menu_"> 
			 	<ul class="short_link"> 
			 		<li><i class="fa fa-wordpress"></i> <a href=""> Theme</a></li>
			 		<li><i class="fa fa-user"></i> <a href="">User Profile</a></li>
			 		<li><i class="fa fa-barcode"></i> <a href="">Change Password</a></li>
			 		<li><i class="fa fa-envelope"></i> <a href="">Inbox</a></li>
			 		<li><i class="fa fa-plus"></i> <a href="">Add User</a></li>
			 		<li><i class="fa fa-list-ul"></i> <a href="">User List</a></li>
			 		<li><i class="fa fa-globe"></i> <a href="">Visit Website</a></li>
			 	</ul>
				 
			</div> 
		</div>
	</div>
</section> 
<section>
	<div class="col-md-2 col-lg-2">
		<div class="row" style="min-height: 615px; background: #303030;"> 
			<div class="bdfood_admin_menu">
			<!-- ================== Manu html Start ======================= -->
				<div class="menu"> 
					<nav id="nav" role="navigation">
						<div class="menu-wrap">
							<div class="block">  
								<div class="action-menu">	
									<div id="cssmenu">
										<ul>
										   <li class="active"><a class="home" href='index.html'><i class="fa fa-home"></i> <span> Dashboard</span></a>
										   <li><a class="home" href='#'><i class="fa fa-group"></i> <span> Profile</span></a>
											   
										   </li>
										   <li class="has-sub"><a class="product" href='#'><i class="fa fa-th-large"></i> <span> Categories</span></a>
											  <ul class="sub-ul">
												 <li><a href="{{url('/addcat')}}">New Category</a></li> 
												 <li><a href="{{url('/allcat')}}">All Categories</a></li>  
											  </ul>
										   </li> 
										   <li class="has-sub"><a class="product" href='#'><i class="fa fa-th-large"></i> <span> Brands</span></a>
											  <ul class="sub-ul">
												 <li><a href="{{url('/addbrand')}}">New Brand</a></li> 
												 <li><a href="{{url('/allbrand')}}">All Brands</a></li>  
											  </ul>
										   </li>

										   <li class="has-sub"><a class="product" href='#'><i class="fa fa-th-large"></i> <span>Prodects</span></a>
											  <ul class="sub-ul">
												 <li><a href="{{url('/addproduct')}}">Add New Product</a></li> 
												 <li><a href="{{url('/allproduct')}}">All Products</a></li>  
											  </ul>
										   </li>

										   <li class="has-sub"><a class="product" href='#'><i class="fa fa-th-large"></i> <span>Sliders</span></a>
											  <ul class="sub-ul">
												 <li><a href="{{url('/addslider')}}">Add New slider</a></li> 
												 <li><a href="{{url('/allslider')}}">All sliders</a></li>  
											  </ul>
										   </li>
										   <li class="has-sub"><a class="product" href='#'><i class="fa fa-th-large"></i> <span>Manage Orders</span></a>
											  <ul class="sub-ul">
												 <li><a href="{{url('/allorder')}}">All Orders</a></li>
											  </ul>
										   </li>
										   
										   <li class="last"><a class="contact-menu" href="#">Contact Info</a></li>
										   <li class="last"><a class="contact-menu" href="#">Social Link</a></li>
										    
										     
										   
										</ul>
									</div>  
								</div>
								 
							</div>
						</div>
					</nav>
					
				</div>	
				<!-- ================== Manu html Exit ======================= -->
			</div> 
		</div> 
	</div>
	@yield('adminContent')
</section>
 
<section>
	<footer>
	<p>Copyright 2014 : Action Design By :	 <a href="http://hezy.org/superduper/">Hezy Theme</a> And Developed By : <a href="http://www.themeskanon.com">Themeskanon</a></p>
	</footer>
</section>				
	 

 


<script src="{{url('Backend')}}/js/jquery.js"></script>
<script src="{{url('Backend')}}/js/script.js"></script>
<script src="{{url('Backend')}}/js/bootstrap/bootstrap.min.js"></script>
<script src="{{url('Backend')}}/js/bootstrap/bootstrap-select.js"></script>
<script src="{{url('Backend')}}/js/responsive-menu/modernizr.js"></script>
<script src="{{url('Backend')}}/js/responsive-menu/main.js"></script>
<script src="{{url('Backend')}}/js/wow.min.js"></script>
<script src="{{url('Backend')}}/js/custom.js"></script>
<script src="{{url('Backend')}}/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

  
<!-- Page level plugin JavaScript-->
<script src="{{url('Backend')}}/vendor/datatables/jquery.dataTables.js"></script>
<script src="{{url('Backend')}}/vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="{{url('Backend')}}/js/panel_js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="{{url('Backend')}}/js/panel_js/sb-admin-datatables.min.js"></script>
</body>
</html>