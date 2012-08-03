<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Membership extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('membership/user','',TRUE);
	}

	public function index(){

	}
	
	public function verify_login($password){
		$username = $this->input->post('username');
		$result = $this->user->login($username, $password);
		
		if($result != NULL){
			$sess_array = array();
			foreach($result as $row){
				$sess_array = array(
					'id' => $row->id,
					'username' => $row->username
				);
				$this -> session->set_userdata($sess_array);
			}
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	public function authenticate()
	{
		$this->form_validation->set_rules('username', 'lang:username','trim|required');
		$this->form_validation->set_rules('password', 'lang:password','trim|required|callback_verify_login');
		
		if($this->form_validation->run()==FALSE){
			$this->load->view('login_view');
		} else{
			$username = $this -> input -> post('username');
			$password = $this -> input -> post('password');
			
			if($this->verify_login($username, $password)){
				redirect('welcome', 'refresh');
			}else{
				$this->form_validation->set_message('verify_login', lang('verify_login'));
				$this->load->view('login_view');
			};
		}
	}
	
	public function sighUp(){
		$this->form_validation->set_rules('username', 'lang:username','trim|required');
		$this->form_validation->set_rules('password', 'lang:password','trim|required');
		
		if($this->form_validation->run()==FALSE){
			$this->load->view('registration_view');
		} else{
			redirect('welcome', 'refresh');
		}
	}
	
	public function close(){
		$this->session->sess_destroy();
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		redirect('login', 'refresh');
	}
}