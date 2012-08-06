<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		$filename = 'application/views/static_page/'.$page.'.php';
		if( !file_exists($filename)){
			show_404();
		}
		$data['title'] = ucfirst($page); //capitalise the first letter
		
		$this->load->view('static_page/'.$page, $data);
	}
}