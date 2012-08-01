<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authenticate extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('membership/User',TRUE);
	}

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'lang:username','trim|required');
		$this->form_validation->set_rules('password', 'lang:password','trim|required');
		
		if($this->form_validation->run()==FALSE){
			$this->load->view('login_view');
		} else{
			redirect('welcome', 'refresh');
		}
	}
}