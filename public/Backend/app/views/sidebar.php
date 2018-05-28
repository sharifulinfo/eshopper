<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="sidebar_wrap"> 
			

			<div class="sidebar_content">
				<div class="search_rapper">
					<div class="sidebar_content">
						<form method="POST" action="#">
							<input id="search" autocapitalize="none" autocomplete="off"   autofocus="" name="search_query" tabindex="0" spellcheck="false" placeholder="Search" aria-label="Search"     style="outline: medium none currentcolor;" class="ytd-searchbox" type="text" >
		 
							<button id="search-icon-legacy" class="sidebar_search_button" aria-label="Search"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>

		 

			
			<?php if (!empty($socal)) {?> 
			<div class="sidebar_content">
				<div class="sidebar_heading"> <h4>Follow us</h4> </div>  
				<div class="post_comment"> 
					<?php 
						foreach ($socal as $value) {
							$class = $value['class'];
					 ?>
						<span><a href="<?php echo $value['link'] ?>"><i class="fa <?php echo $class; ?>"> <?php echo $value['scl_name'] ?> </i> </a> </span>
					<?php } ?>  
				</div>  
			</div>
			<?php } ?>

			<?php if (!empty($user)) {?> 
			<div class="sidebar_content">
				<div class="sidebar_heading"> <h4>Top Sales Person of our site</h4> </div>  
				<table>
					<?php 
						foreach ($user as $value) { 
							$social1 = $value['social1'];
							$social2 = $value['social2'];
							$social3 = $value['social3'];
							$social4 = $value['social4']; 
					 ?>
					<tr>
						<td><a href="profile.html"><img class="img-responsive" src="uploads/<?php echo $value['img']; ?>" alt="images" ></a></td>
						<td>
							<h5><a href="profile.html"><?php echo  $value['name'];?></a></h5>
							<p>Sale: <span>435 </span></p>
							<span class="product_reating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half-o"></i> 
							</span>
							<p>
								<?php 
								if(!empty($social1)) {
									echo '<a href="'.$social1.'"><i class="fa fa-facebook"></i></a>';
								}
								if(!empty($social2)) {
									echo '<a href="'.$social2.'"><i class="fa fa-skype"></i></a>';
								}
								if(!empty($social4)) {
									echo '<a href="'.$social4.'"><i class="fa fa-google-plus"></i></a>';
								}
								if(!empty($social3)) {
									echo '<a href="'.$social3.'"><i class="fa fa-twitter"></i></a>';
								}


								?> 
								 
							</p>
						</td>
					</tr>
					 <?php } ?>
					 
				</table>
			</div>
			<?php } ?>
			<?php if (!empty($cate)) {?> 
			<div class="sidebar_content"> 
				<div class="sidebar_heading"> <h4>Category</h4> </div>  
				<ul>
					<?php
						foreach ($cate as $value) {  
							$v 	 = $value['cat_id']; 
							$num = $model_obj->cat_count($v);	
					?> 
					<li><a href="product.html"><?php echo $value['cat_name']; ?></a> <span><?= $num?></span></li>  
					<?php } ?> 
				</ul>
			</div>
			<?php } ?>
			<?php if (!empty($add)) {?> 
			<div class="sidebar_content">
				<?php
					foreach ($add as $value) {
					$position=$value['add_position'];  
					if($position=='sidebar_bottom') {	
				?>

				<a href="<?php echo $value['add_link']; ?>"><img class="img-responsive" src="images/<?php echo $value['add_img']; ?>" alt="images"></a>
				<?php } } ?>
			</div>
			<?php } ?>
		</div>
	</div>