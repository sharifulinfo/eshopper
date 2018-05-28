<?php 
/**
* Test Class
*/
class Post extends DController{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function post(){
		$table 		 = "tbl_post";
		$cat 		 = "cat=2";
		$catmod = $this->load->model("PostModel");
		$data['post']=$catmod->allpost($table,$cat);
		$this->load->view('post',$data);
	}

	public function Details($id){ 
			$this->load->view('header'); 
			$data 		   = array(); 
			$ptable 	   = "tbl_post";
			$ctable 	   = "tbl_category"; 
			$posmod 	   = $this->load->model("PostModel");
			$data['posid'] = $posmod->getpostbyid($ptable,$ctable,$id);  
			$this->load->view('single',$data); 
			$this->load->view('footer');
	}
		 
}

 ?>