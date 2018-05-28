

<section class="section bg_section"> 
	<div class="container">
		<div class="row"> 
			<div class="col-lg-9 col-md-9 col-sm-9 col-xm-12">
				<div class="row">

					 	<?php foreach ($blog as $value) { 
					 		$text = $value['post_desc'];
					 		$date = $value['post_date'];

					 		if(strlen($text)>200){
					 			$text = substr($text, 0, 250);
					 		} 

					 		$post_by = $value['post_by'];
 							$num = $model_obj->postby_person($post_by);	

 							foreach ($num as $key) {
 								$name = $key['name'];
 								$id   = $key['id'];
 							}

					 	?>

					<div class="blog_item">
						<div class="col-lg-5 col-md-5 col-sm-5 col-xm-12"> 
							<div class="row">
								<a href="<?php echo BASED_URL; ?>/Post/Details/<?php echo  $key['id']; ?>"><img src="<?php echo BASED_URL; ?>/uploads/<?php echo $value['post_img']; ?>"></a>
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xm-12">
							<div class="blog_item_wrap"> 
								<a href="<?php echo BASED_URL; ?>/Post/Details/<?php echo $key['id']; ?>"><h3><?php echo $value['post_name']; ?></h3></a>
								<p><span><i class="fa fa-pencil-square-o"></i></span> Post by: 
										<a href="<?php echo BASED_URL; ?>/Post/Details/<?php echo  $id ?>"><?php echo $name; ?></a></p> 
								<p><span><?php echo $value['post_date']; ?></p> 

								 
								<p><?php echo $text; ?> ...</p>
								<div class="post_comment">
									<a href="<?php echo BASED_URL; ?>/Post/Details/<?php echo  $key['id']; ?>"><span><i class="fa fa-comments"></i></span>Comments 2 </a> 
									
									<span><a href="www.facebook.com"><i class="fa fa-twitter"> Tweet</i> </a> </span>
									<span><a href="www.facebook.com"><i class="fa fa-google-plus"> Share</i></a></span>
									<span><a href="www.facebook.com"><i class="fa fa-facebook"> Share</i></a> </span> 
								</div>  
							</div>  
						</div>  
					</div>
 
					 <?php } ?> 
					 
				</div>
			</div>
			<!-- __________________________________ sidebar start here ____________________________________________ -->
 	
			 
		
 
 
