 <section class="">
	<div class="slider_section ">
		<div id="myCarousel7" class="carousel slide"> 
		  	<div class="carousel-inner">
		    	<div class="active item"> 
			    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    		<div class="row">
							<div class="slider_item">
								<div class="carousel_slider_item"> 
								 	<a href="single.html"><img class="img-responsive" src="images/topslider/main2.png" alt="images" ></a> 
								</div>
								<div class="carousel_slider_item_text">
									<h4><a href="single.html">Latest Post item name</a></h4>
								</div>
					    	</div>
					    </div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="row">
							<div class="slider_item">
								<div class="carousel_slider_item">  
									<a href="single.html"><img class="img-responsive" src="images/topslider/main5.png" alt="images" ></a> 
								</div>
								<div class="carousel_slider_item_text">
									<h4><a href="single.html">Latest Post item name</a></h4>
								</div>
					    	</div>
					    </div>
					</div> 
		    	</div> 
			    <div class="item"> 
			    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    		<div class="row">
							<div class="slider_item">
								<div class="carousel_slider_item"> 
								 	<a href="single.html"><img class="img-responsive" src="images/topslider/main4.png" alt="images" ></a> 
								</div>
								<div class="carousel_slider_item_text">
									<h4><a href="single.html">Latest Post item name</a></h4>
								</div>
					    	</div>
					    </div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="row">
							<div class="slider_item">
								<div class="carousel_slider_item">  
									<a href="single.html"><img class="img-responsive" src="images/topslider/main5.png" alt="images" ></a> 
								</div>
								<div class="carousel_slider_item_text">
									<h4><a href="single.html">Latest Post item name</a></h4>
								</div>
					    	</div>
					    </div>
					</div> 
			    </div>
			    <div class="item"> 
			    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			    		<div class="row">
							<div class="slider_item">
								<div class="carousel_slider_item"> 
								 	<a href="single.html"><img class="img-responsive" src="images/topslider/main6.png" alt="images" ></a> 
								</div>
								<div class="carousel_slider_item_text">
									<h4><a href="single.html">Latest Post item name</a></h4>
								</div>
					    	</div>
					    </div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="row">
							<div class="slider_item">
								<div class="carousel_slider_item">  
									<a href="single.html"><img class="img-responsive" src="images/topslider/main9.png" alt="images" ></a> 
								</div>
								<div class="carousel_slider_item_text">
									<h4><a href="single.html">Latest Post item name</a></h4>
								</div>
					    	</div>
					    </div>
					</div> 
			    </div> 
		 	</div>
		  
		  <a class="carousel-control left cur_left" href="#myCarousel7" data-slide="prev"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
		  <a class="carousel-control right cur_left" href="#myCarousel7" data-slide="next"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
		</div>
	</div>
</section> 
 

<section class="section post_section">
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 ">
		<?php if (!empty($post)) {?>  

		<div class="row"> 
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="section_heading"><h2>CHICKEN SANDWICH</h2><a href="product.html">view all post</a></div></div>
			<div id="myCarousel4" class="carousel slide"> 
			  	<div class="carousel-inner">

				    
				    	<?php 
				    		$i=1;
				    		$x=1;
				    		$num = count($post); 
							foreach ($post as $value) { 
								if($i==1){?>
									<div class="<?php if($x==1){echo 'active';} ?>  item">
								<?php }
						?> 
					    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					    	 	<div class="row">
									<div class="post_item">
										<div class="post_item_image"> 
											<a href="#"><img class="img-responsive" src="images/category/category<?php echo $i;?>.png" alt="images" ></a> 
										</div>
										<div class="post_item_description">  
											<h4><a href="<?php echo BASED_URL; ?>/Post/Details/<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></h4> 
										</div> 
									</div>
								</div>
							</div>
							<?php if($i==3){
								echo "</div>";
								$i=0;
								$x=0;
							} ?>
						 
				    	<?php $i++; }?>	  
						 
				     
			  	</div> 
			  	<a class="carousel-control left" href="#myCarousel4" data-slide="prev"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
			  	<a class="carousel-control right" href="#myCarousel4" data-slide="next"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
			</div>  
		</div>

		<?php } ?>

		<div class="row"> 
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="section_heading">
					<h2>CHICKEN SANDWICH</h2>
					<a href="product.html">view all post</a>
				</div>
			</div>
			<div id="myCarousel3" class="carousel slide"> 
			  	<div class="carousel-inner"> 
				    	<?php 
				    		$i=1;
				    		$x=1;
				    		$num = count($post); 
							foreach ($post as $value) { 
								if($i==1){?>
									<div class="<?php if($x==1){echo 'active';} ?>  item">
								<?php }
						?> 
					    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					    	 	<div class="row">
									<div class="post_item">
										<div class="post_item_image"> 
											<a href="#"><img class="img-responsive" src="images/category/category<?php echo $i;?>.png" alt="images" ></a> 
										</div>
										<div class="post_item_description">  
											<h4><a href="<?php echo BASED_URL; ?>/Post/Details/<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></h4> 
										</div> 
									</div>
								</div>
							</div>
							<?php if($i==3){
								echo "</div>";
								$i=0;
								$x=0;
							} ?>
						 
				    	<?php $i++; } 

				    	?>  
			  	</div> 
			  	<a class="carousel-control left" href="#myCarousel3" data-slide="prev"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
			  	<a class="carousel-control right" href="#myCarousel3" data-slide="next"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
			</div>  
		</div>  
	</div>
	 <!-- _______________________________Sidebar column Start _________________________________ -->
	 
	
 



 

