<?php 
	/**
	* Category Controller
	*/
	class Category extends DController
	{
		
		function __construct(){parent::__construct();}

		public function categorylist(){
			$data 		= array();
			$table		= 'tbl_category';
			$catmod  	= $this->load->model('CatModel');
			$data['cat']=$catmod->catlist($table);
			$this->load->view('tbl_category',$data);
		}

		public function catById(){
			$data 		= array();
			$table		= 'tbl_category';
			$id 		= 1;
			$catmod 	= $this->load->model('CatModel');
			$data['cat']= $catmod->categorybyid($table,$id);
			$this->load->view('catbyid',$data);
		}
		 

		public function insertcategory(){
			$query=array();
			$name 		= $_POST['name'];
			$title 		= $_POST['title'];
			$data 		= array(
				'name'	=> $name,
				'title'	=> $title
			);
			$table		= 'tbl_category';
			$catmod  	= $this->load->model('CatModel');  
			$result 	= $catmod->insertcat($table,$data);
			$mdata		= array();
			if ($result==1) {
				$mdata['msg']="1";
			} else {
				$mdata['msg']="0";
			}
			$this->load->view('addcat', $mdata); 
		}

		public function addcat(){
			$this->load->view('addcat'); 
		}
		public function updatecat(){
			$data 		= array();
			$table		= 'tbl_category';
			$id 		= 5;
			$catmod 	= $this->load->model('CatModel');
			$data['cat']= $catmod->categorybyid($table,$id);
			$this->load->view('catupdate',$data);
			//$this->load->view('catupdate'); 
		}

		public function CategoryUpdate(){
			$table = "tbl_category"; 
			$id 		= $_POST['id'];
			$name 		= $_POST['name'];
			$title 		= $_POST['title'];
			$cond = "id=$id";
			$data 		= array(
				'name'	=> $name,
				'title'	=> $title
			); 
			$catmodel 	= $this->load->model('CatModel');
			$result 	= $catmodel->catupdate($table, $data, $cond); 
			$mdata		= array();
			if ($result==1) {
				$mdata['msg']="1";
			} else {
				$mdata['msg']="0";
			}
			$this->load->view('catupdate', $mdata); 
		}

		public function categorydelete(){
			$table 	 = "tbl_category";
			$cond 	 = "id=35";
			$limit 	 = 1;
			$catmodel=$this->load->model("CatModel");
			$catmodel->catdelete($table,  $cond, $limit);
		}


	}
 ?>