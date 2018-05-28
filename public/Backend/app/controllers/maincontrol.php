<?php 
	/**
	* Index Controller
	*/
	class maincontrol extends DController	{
		 
		function __construct(){parent::__construct();}

		public function home(){ 
			$data 		  		= array(); 
			$ptable 	  		= "tbl_post";
			$cat 		  		= "cat=2";
			$posmod 	  		= $this->load->model("PostModel");
			$data['post'] 		= $posmod->allpost($ptable,$cat);  

			$cattabl	  		= 'tbl_category';
			$catmod  	  		= $this->load->model('CatModel');
			$data['cate'] 	   	= $catmod->catlist($cattabl);
			$data['model_obj'] 	= $catmod;
 
			$posmod 	  		= $this->load->model("DefaultModel");
			$data['sec_bg'] 	= $posmod;
			$data['socal']		= $posmod->socila(); 
			$data['user'] 		= $posmod->sr_select();
			$data['add']  		= $posmod->add_select();
			$data['con_info']	= $posmod->footer_con_info();
			$data['con_pag']	= $posmod; 
			$data['tag']		= $posmod->footer_page_tag_query();
			$this->load->view('header');
			$this->load->view('home',$data);
			$this->load->view('sidebar',$data);
			$this->load->view('section_close');
			$this->load->view('category_section',$data);
			$this->load->view('security_section',$data); 
			$this->load->view('footer',$data);
		} 
	}
 ?>