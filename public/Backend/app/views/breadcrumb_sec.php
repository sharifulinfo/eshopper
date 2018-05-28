<?php 
	$con=2;
	$data=$sec_bg->section_bg($con); 
	foreach ($data as $value) {
		$sec_name = $value['sec_name'];
		$sec_img  = $value['sec_img'];
		$sec_con  = $value['sec_con'];
		$sec_desc = $value['sec_desc'];
		$sec_note = $value['sec_note']; 
	}

?>
<section class="section breadcrumb_section" style="background: url( <?php echo BASED_URL; ?>/uploads/<?php echo $sec_img; ?>)no-repeat 0px 0px;">
	<div class="container">
		<div class="row">
			<div class="about_us_breadcrumb"> 
				<ul class="breadcrumb">
				  <li><a href="#">Home</a> <span class="divider">>></span></li> 
				  <li class="active"><span>Blog</span></li>
				</ul>
				<p><?php echo $sec_desc; ?></p>
			</div> 
		</div>
	</div>
</section>