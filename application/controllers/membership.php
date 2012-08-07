<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Membership extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('membership/user','',TRUE);
		$this->load->model('membership/activation','',TRUE);
	}

	public function index(){

	}
	
	public function verify_login($password){
		$username = $this->input->post('username');
		$result = $this->user->login($username, do_hash($password));
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
				if($this->user->userActivated($username)){
					redirect('welcome', 'refresh');
				} else {
					redirect('pages/view/about', 'refresh');
				}
			}else{
				$this->form_validation->set_message('verify_login', lang('verify_login'));
				$data = array(
					'username'=>$username
				);
				$this->load->view('login_view', $data);
			};
		}
	}
	
	public function signUp(){
		$this->form_validation->set_rules('surname', 'lang:surname','trim|required');
		$this->form_validation->set_rules('lastName', 'lang:lastName','trim|required');
		$this->form_validation->set_rules('email', 'lang:email','trim|required|valid_email');
		$this->form_validation->set_rules('emailConfirmation', 'lang:emailConfirmation','trim|required|valid_email');
		$this->form_validation->set_rules('username', 'lang:username','trim|required');
		$this->form_validation->set_rules('password', 'lang:password','trim|required');
		$this->form_validation->set_rules('passwordConfirmation', 'lang:passwordConfirmation','trim|required');
		
		if($this->form_validation->run()==FALSE){
			$data = array(
				'surname'=> $this -> input -> post('surname'),
				'lastname'=>$this -> input -> post('lastName'),
				'email'=>$this -> input -> post('email'),
				'emailConfirmation'=>$this -> input -> post('emailConfirmation'),
				'username'=>$this -> input -> post('username')
			);
			$this->load->view('registration_view', $data);
		} else{
			$person = array(
				'surname'=> $this -> input -> post('surname'),
				'lastname'=>$this -> input -> post('lastName'),
				'email'=>$this -> input -> post('email'),
				'creation' => date("Y-m-d G:i:s")
			);
			
			$this->db->trans_start();
				$id_person = $this->user->createPerson($person);
				$user = array(
					'username' => $this -> input -> post('username'),
					'password' => do_hash($this -> input -> post('password')),
					'id_person' => $id_person,
					'creation' => date("Y-m-d G:i:s")
				);
				$id_user = $this->user->createUser($user);
				$key=do_hash( 
					$this -> input -> post('username').
					$this -> input -> post('email').date("Y-m-d G:i:s").'09051974' );
				$this->activation->create($id_user, $key);
			$this->db->trans_complete(); 
			
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