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
			log_message('info', 'user authenticated: ' . $username);
			return $query -> result();
		} else {
			return NULL;
		}
	}
	
	function createPerson($data){
		$this->db->insert(self::TABLE_PERSON, $data);
		$id = $this->db->insert_id();
		log_message('info', 'create id '.$id);
		return  $id;
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
	
	function activeUser($username){
		$data = array(
			$activated => date("Y-m-d G:i:s")
		);
		$this->db->update(self::TABLE_USER, $data, 'username = ' . $username);
	}
	
	function userActivated($username){
		$this->db->select()->from(self::TABLE_USER)->where('username = ' . "'" . $username . "'")->where('activated is not null', null);
		$query = $this -> db -> get();
		
		if($query -> num_rows == 1){
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
?>