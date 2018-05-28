<?php 
	$con=1;
	$data=$sec_bg->section_bg($con);

	foreach ($data as $value) {
		$sec_name = $value['sec_name'];
		$sec_img  = $value['sec_img'];
		$sec_con  = $value['sec_con'];
		$sec_desc = $value['sec_desc'];
		$sec_note = $value['sec_note'];
		 
	}

?>
<section class="section security_notice_section" style="background: url( <?php echo BASED_URL; ?>/uploads/<?php echo $sec_img; ?>)no-repeat 0px 0px;">
	<div class="container">
		<div class="row"> 
			<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
				<div class="security_notice">
					<p>" <span>A</span><?php echo $sec_desc; ?>" <i class="fa fa-twitter"></i></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="security_notice">
					<p>"<?php echo $sec_note; ?>"</p>
				</div>
			</div>
		</div>
	</div>
</section>