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
		if($this->form_validation->run('login')==FALSE){ //verify form_validation.php 
			$this->template->load('ninkasi', 'login_view');
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
				$this->template->load('ninkasi', 'login_view');
				//$this->load->view('login_view', $data);
			};
		}
	}
	
	public function signUp(){
		
		if($this->form_validation->run('registration')==FALSE){
			$this->template->load('ninkasi', 'registration_view');
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
				//$this->sendActivationMail($person['email'], $key);
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

	public function sendActivationMail($email, $key){
		$this->load->library('email');

		$this->email->from($this->config->item('activation_email'), $this->config->item('activation_name'));
		$this->email->to($email); 
		
		$this->email->subject($this->config->item('activation_subject'));
		$this->email->message('Bem vindo. ative sua conta clicando no link abaixo: http:\\\\localhost\\beer\\registration\\confirm\\'.$key);	
		
		$this->email->send();
		
		echo $this->email->print_debugger();
	}

	public function send(){
		$email = $this -> input -> post('email');
		$key = $this -> input -> post('key');
		echo $this->config->item('activation_email').'<br>';
		echo $this->config->item('activation_subject').'<br>';
		echo $this->config->item('activation_name').'<br>';
		//$this->sendActivationMail($email, $key);	
	}
}