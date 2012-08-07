<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function index(){
		$data = array(
			'surname'=> '',
			'lastname'=>'',
			'email'=>'',
			'emailConfirmation'=>'',
			'username'=>''
		);
		$this->load->view('registration_view', $data);
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */