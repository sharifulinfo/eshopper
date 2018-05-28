<section class="section bg_section"> 
	<div class="container">
		<div class="row">
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
				<h1>Category </h1> 
			</div>
		</div>

		<div class="row">
			<?php
		$i=1;
		foreach ($cate as $value) {  

			if ($i>=5) { $i=1;}
			$v=$value['cat_id'];
			$img=$value['cat_img'];
			if($i<=2){

				if ($v%2==0) {?>
					 <div class="col-md-6">
					 	<div class="category_item"> 
						 	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_image"> 
									<img class="img-responsive" src="<?php echo BASED_URL; ?>/uploads/<?php echo $img; ?>" alt="images" >
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_description"> 
									<h4><a href="product.html"><?php echo $value['cat_name']; ?></a></h4>
									<span>Product Item: 1,233 </span> 
									<?php 
									$result=$con_pag->subcategory_select($v);
										foreach ($result as $value) {?>  
									<p><span><i class="fa fa-check"></i></span> <?php echo $value['cat_name']; ?></p>
									<?php } ?>
								</div>
							</div> 
						</div> 
					</div> 
				<?php }else{?>
					 <div class="col-md-6">
					 	<div class="category_item"> 
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_description"> 
									<h4><a href="product.html"><?php echo $value['cat_name']; ?></a></h4>
									<span>Product Item: 1,233 </span> 
									<?php 
									$result=$con_pag->subcategory_select($v);
										foreach ($result as $value) {?>  
									<p><span><i class="fa fa-check"></i></span> <?php echo $value['cat_name']; ?></p>
									<?php } ?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_image"> 
									<img class="img-responsive" src="<?php echo BASED_URL; ?>/uploads/<?php echo $img; ?>" alt="images" >
								</div>
							</div>
						</div> 
					</div> 
				<?php }
				

			}else{
				if ($v%2==0) {?>
					 <div class="col-md-6">
						<div class="category_item">  
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_description"> 
									<h4><a href="product.html"><?php echo $value['cat_name']; ?></a></h4>
									<span>Product Item: 1,233 </span> 
									<?php 
									$result=$con_pag->subcategory_select($v);
										foreach ($result as $value) {?>  
									<p><span><i class="fa fa-check"></i></span> <?php echo $value['cat_name']; ?></p>
									<?php } ?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_image"> 
									<img class="img-responsive" src="<?php echo BASED_URL; ?>/uploads/<?php echo $img; ?>" alt="images" >
								</div>
							</div>
						</div> 
					</div> 
				<?php }else{?>
					 <div class="col-md-6">
					 	<div class="category_item"> 
						 	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_image"> 
									<img class="img-responsive" src="<?php echo BASED_URL; ?>/uploads/<?php echo $img; ?>" alt="images" >
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_description"> 
									<h4><a href="product.html"><?php echo $value['cat_name']; ?></a></h4>
									<span>Product Item: 1,233 </span> 
									<?php 
									$result=$con_pag->subcategory_select($v);
										foreach ($result as $value) {?>  
									<p><span><i class="fa fa-check"></i></span> <?php echo $value['cat_name']; ?></p>
									<?php } ?>
								</div>
							</div>
						
						</div> 
					</div> 
				<?php }
			}

	?>

			 
			 
		<?php $i++;} 
	?>
		</div>
	</div>
</section>