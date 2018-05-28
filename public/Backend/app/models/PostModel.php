<?php 
	/**
	* Post Model
	*/
	class PostModel extends DModel
	{
		
		public function __construct(){parent::__construct();}

		public function allpost($table,$cat){
			return $this->db->postselect($table,$cat);
		}

		public function blog_post_list($blog){
			$sql="SELECT * FROM $blog";
			return $this->db->blogpost_select($sql);
		}

		public function getpostbyid($ptable,$ctable,$id){
			$sql =" SELECT * FROM $ptable 
				WHERE $ptable.id=$id
			";
			return $this->db->blogpost_select($sql);
		}
		public function postby_person($post_by){
			$sql="SELECT * FROM tbl_user_sr WHERE id=$post_by";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function sidebarcall(){
			
		}


	}
 ?>