 
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>New Shop</title>
			<link href="../css/bootstrap.css" rel="stylesheet">
			<link href="../css/menu.css" rel="stylesheet">
			<link href="../css/superfish.css" rel="stylesheet">
			<link href="../css/meanmenu.css" rel="stylesheet">
			<link href="../css/style.css" rel="stylesheet">
			<link href="../css/color.css" rel="stylesheet">
			
		<!-- font awesome this template -->
			<link href="fonts/css/font-awesome.css" rel="stylesheet">
			<link href="fonts/css/font-awesome.min.css" rel="stylesheet">
			
	</head>
	<body>
		<div class="navigation">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo">
							<a href="index.html">LOGO</a>
						</div>
					</div>
					<div class="col-sm-8">
						<nav id="#cssmenu">
							<ul class="sf-menu ">
								<li class="deeper current active"><a href="index.html">Home</a></li>  
								<li class="deeper parent"><a href="about_us.html">About Us</a></li> 
								<li class="deeper parent"><a href="blog.html">Blog</a></li> 
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</nav>
					</div>
				</div>	
			</div>
		</div>
<section class="bg_section">
	<div class="container">
		<?php 
			if (isset($msg)) {
				if ($msg==1) {
					echo "<span style='color:green;font-weight:bold;'> Category Added Successfully....... </span>";
				} else {
					echo "<span style='color:red;font-weight:bold;'> Category Added Not Successfull....... </span>";
				}
				
				
			}
		 ?>
		<form action="http://localhost/shop/Test/insertcategory" method="POST">
			<table>
				<tr>
					<td>Category Name</td>
					<td><input type="text" name="name" required="1"></td>
				</tr>
				<tr>
					<td>Category Title</td>
					<td><input type="text" name="title" required="1"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
</section>
 <div class="footer footer_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="footer_item">
					<h3>About Us</h3>
					<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. sectionsThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections</p>

				</div>	
			</div> 
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="footer_item">
					<h3>Menu Item</h3>
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">About</a></li>
						<li><a href="">Product</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Details</a></li>
						<li><a href="">Contact</a></li>
					</ul>

				</div>	
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="footer_item">
					<h3>Contact Info</h3> 
					<div class="w3-address-grid">
						<div class="w3-address-left">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="w3-address-right">
							<h6>Phone Number</h6>
							<p>+1 234 567 8901</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3-address-grid">
						<div class="w3-address-left">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="w3-address-right">
							<h6>Email Address</h6>
							<p>Email : mail@example.com</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3-address-grid">
						<div class="w3-address-left">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="w3-address-right">
							<h6>Location</h6>
							<p>Broome St, NY 10002,California, USA.</p>
						</div>
						<div class="clearfix"> </div>
					</div> 
				</div>	
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="footer_item tag_clude">
					<h3>Tag Clude</h3>
					<a href="#">Black</a>
					<a href="#">Electronic</a>
					<a href="#">Dress</a>
					<a href="#">Mobile</a>
					<a href="#">Laptop</a>
					<a href="#">Black</a> 
				</div>
			</div>
		</div>
		<div class="row"><div class="copywrite"><p> &copy; Broome St NY 10002 California USA. </p></div></div>	
	</div>
</div>
		
		
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="js/custom.js" type="text/javascript"></script>
		<script src="js/superfish.js" type="text/javascript"></script>
		<script src="js/jquery.meanmenu.js" type="text/javascript"></script>
	</body>
</html>
