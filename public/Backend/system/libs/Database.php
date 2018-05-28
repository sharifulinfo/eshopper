<?php 
/**
* Data base Class
*/
	class Database extends PDO
	{
		
		public function __construct($dsn, $user, $pass){parent::__construct($dsn, $user, $pass);}

		public function select($sql, $data=array(), $fetchstyle = PDO::FETCH_ASSOC ){ 
			$stmt  	= $this->prepare($sql);  
			foreach ($data as $key => $value) {
				$stmt->bindparam($key, $value);
			} 
			return $stmt->execute();
			return $stmt->fetchAll($fetchstyle); 
		}

		public function catselect($table, $id){  
			$sql 	= "SELECT * FROM $table WHERE id=:id";
			$stmt	= $this->prepare($sql);
			$stmt->bindparam(':id',$id);
			$stmt->execute();
			return $stmt->fetchAll(); 
		}

		public function insert($table, $data){
			$keys 	= implode(",", array_keys($data));
			$values = ":".implode(", :", array_keys($data)); 
			$sql 	= "INSERT INTO $table($keys) VALUES($values)";
			$stmt 	= $this->prepare($sql); 
			foreach ($data as $keys => $values) {
					$stmt->bindparam(":$keys", $values);
				} 
			return $stmt->execute(); 
		}

		public function update($table, $data, $cond){
			$updatekey 		= NULL;
			foreach ($data as $keys => $values) {
				$updatekey .= "$keys=:$keys,";
				}
			$updatekey 		= rtrim($updatekey, ',');
			$sql 			= "UPDATE $table SET $updatekey WHERE $cond";
			$stmt 	 		= $this->prepare($sql);

			foreach ($data as $keys => $values) {
				$stmt->bindparam(":$keys", $values);
				}
			return $stmt->execute(); 
		}

		public function delete($table,  $cond, $limit){
			$sql = "DELETE FROM $table WHERE $cond LIMIT $limit";
			return $this->exec($sql);
		}

		public function postselect($table,$cond){
			$sql= "SELECT * FROM $table WHERE $cond"; 
			$stmt=$this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function user_select(){
			$sql="SELECT * FROM tbl_user_sr";
			$stmt = $this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function social_link(){
			$sql="SELECT * FROM tbl_social";
			$stmt = $this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function select_add(){
			$sql="SELECT * FROM tbl_add";
			$stmt = $this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}


		public function blogpost_select($sql){
			$stmt = $this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
		public function section_backround($sql){
			$stmt = $this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
		public function default_select_query($sql){
			$stmt = $this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
		public function sub_cat_select($sql){
			
			$stmt  = $this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}

}
?>