<?php
Class Activation extends CI_Model {
	const TABLE_ACTIVATION ='activation';
	
	function create($userId, $key){
		$data = array(
			'code' => do_hash($key),
			'id_user' => $userId,
			'status'=>'A',
			'type'=>'A',
			'creation' => date("Y-m-d G:i:s")
		);
		$this->db->insert('activation', $data);
		$id = $this->db->insert_id();
		log_message('info', 'activation id '.$id);
		return $id;
	}
}
?>