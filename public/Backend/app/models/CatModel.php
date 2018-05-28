<?php 
/**
* Category Model
*/
class CatModel extends DModel{
	
	public function __construct(){parent::__construct();}

	public function catlist($table){
		$sql = "SELECT * FROM $table WHERE cat_type=1";   
		$stmt  = $this->db->prepare($sql); 
		$stmt->execute();
		return $stmt->fetchAll();    
	}
	public function cat_count($cat_id){
		$sql = "select * from tbl_post where cat = $cat_id"; 
		$stmt  = $this->db->prepare($sql);
		$stmt->execute();
		$num = $stmt->rowCount(); 
		return $num;
	}

	public function categorybyid($table,$id){
		return $this->db->catselect($table,$id);
	}  

	public function insertcat($table,$data=array()){
		return $this->db->insert($table, $data);
	} 

	public function catupdate($table, $data, $cond){
		return $this->db->update($table, $data, $cond);
	}

	public function catdelete($table,  $cond, $limit){
		return $this->db->delete($table,  $cond, $limit);
	}

	public function postlist($table,$cond){
		  return $this->db->postselect($table,$cond);
	}

	public function testcat(){
		return "Ok"; 
	}

	public function postby($table){
		$sql = "select * from $table";   
		$stmt  = $this->db->prepare($sql); 
		$stmt->execute();
		return $stmt->fetchAll();    
	}
	
}
 ?> 