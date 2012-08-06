<?php
Class User extends CI_Model {
	const TABLE_USER ='user';
	const TABLE_PERSON = 'person';
	
	function login($username, $password){
		$this -> db -> select();
		$this -> db -> from(self::TABLE_USER);
		$this -> db -> where('username = ' . "'" . $username . "'");
		$this -> db -> where('password = ' . "'" . $password . "'");
		$this -> db -> limit(1);
		
		$query = $this -> db -> get();
		
		if($query -> num_rows == 1){
			return $query -> result();
		} else {
			return NULL;
		}
	}
	
	function createPerson($data){
		$this->db->insert(self::TABLE_PERSON, $data);
	}
	
	function createUser($data){
		$this->db->insert(self::TABLE_USER,$data);
	}
	
	function getPerson($data){
		$this -> db -> select()->from(self::TABLE_PERSON)->where($data)->limit(1);
		$query = $this -> db -> get();
		
		if($query -> num_rows == 1){
			return $query -> row();
		} else {
			return NULL;
		}
	}
}
?>