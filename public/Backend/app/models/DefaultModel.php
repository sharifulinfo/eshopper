<?php 
/**
* DefaultModel Model
*/
class DefaultModel extends DModel{
	
	public function __construct(){parent::__construct();}

	public function socila(){
		return $this->db->social_link();
	} 

	public function sr_select(){
		return $this->db->user_select();
	} 
	public function add_select(){
		return $this->db->select_add();
	}
	public function section_bg($con){
		$sql="SELECT * FROM tbl_sec_setting WHERE sec_con=$con";
		return $this->db->section_backround($sql);
	}

	public function footer_con_info(){
		$sql = "SELECT * FROM tbl_contactinfo";
		return $this->db->default_select_query($sql);
	}
	public function footer_page_query($pag_id){
		$sql = "SELECT * FROM tbl_page WHERE pag_con=$pag_id";
		return $this->db->default_select_query($sql);
	}
	public function footer_page_tag_query(){
		$sql = "SELECT * FROM tbl_post";
		return $this->db->default_select_query($sql);
	}
	public function footer_menu($pag_id){
		$sql = "SELECT * FROM tbl_page WHERE pag_menu=$pag_id";
		return $this->db->default_select_query($sql);
	}

	public function subcategory_select($cat_id){
		$sql = "select * from tbl_category where cat_sub = $cat_id"; 
		return $this->db->sub_cat_select($sql);
	}

}
 ?> 