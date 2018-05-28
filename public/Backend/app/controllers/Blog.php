<?php 
	/**
	* Blog page 
	*/
	class Blog extends DController
	{
		
		public function __construct()
		{
		parent::__construct(); 
		$data=array();
		$table		  = "tbl_post";
		$blog		  = "tbl_blog";
		$cat 		  = "cat=2";
		$catmod 	  = $this->load->model("PostModel"); 
		$data['model_obj'] = $catmod;
		$data['data'] = $catmod->allpost($table,$cat);

		$data['blog'] = $catmod->blog_post_list($blog);

		$posmod 	  = $this->load->model("DefaultModel");
		$data['sec_bg'] = $posmod;
		$data['socal']= $posmod->socila(); 
		$data['user'] = $posmod->sr_select();
		$data['add']  = $posmod->add_select();
		 
		$this->load->view('header');
		$this->load->view('breadcrumb_sec',$data);

		$this->load->view('blog',$data); 
		$this->load->view('sidebar',$data);
		$this->load->view('sec_con_row_clo');
		$this->load->view('security_section',$data);
		$this->load->view('footer');
		}

		public function catById(){
		$data 		= array();
		$table		= 'tbl_category';
		$id 		= 1;
		$catmod 	= $this->load->model('CatModel');
		$data['cat']= $catmod->categorybyid($table,$id);
		$this->load->view('catbyid',$data);
		}

		public function post(){ 
		$table 		 = "tbl_post";
		$cat 		 = "cat=2";
		$catmod 	 = $this->load->model("PostModel");
		$data['post']=$catmod->allpost($table,$cat);
		$this->load->view('post',$data);
		} 

	}
?>