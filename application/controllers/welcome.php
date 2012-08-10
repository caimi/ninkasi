<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		if( $this->session->userdata('id') == NULL ){
			$this->load->view('login_view');
			redirect('login','refresh');
		}
		$this->template->load('ninkasi', 'welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */