<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$config = array(
	'registration'
		    => array(
			   	array(
			   		'field' => 'surname',      
			   		'label' => 'lang:surname',  
			   		'rules' => 'trim|required' 
			   	),
			   	array(
			   		'field' => 'lastName',     
			   		'label' => 'lang:lastName',
			   		'rules' => 'trim|required' 
			   	),
			   	array(
			   		'field' => 'email',      
			   		'label' => 'lang:email',  
			   		'rules' => 'trim|required|valid_email' 
			   	),
			   	array(
			   		'field' => 'emailConfirmation',     
			   		'label' => 'lang:emailConfirmation',
			   		'rules' => 'trim|required|valid_email' 
			   	),
			   	array(
			   		'field' => 'username',      
			   		'label' => 'lang:username',  
			   		'rules' => 'trim|required' 
			   	),
			   	array(
			   		'field' => 'password',     
			   		'label' => 'lang:password',
			   		'rules' => 'trim|required' 
			   	),
			   	array(
			   		'field' => 'passwordConfirmation',     
			   		'label' => 'lang:passwordConfirmation',
			   		'rules' => 'trim|required' 
			   	)
		       ),
		       
	'login' => array(
			   	array(
			   		'field' => 'username',      
			   		'label' => 'lang:username',  
			   		'rules' => 'trim|required' 
			   	),
			   	array(
			   		'field' => 'password',      
			   		'label' => 'lang:password',  
			   		'rules' => 'trim|required|callback_verify_login' 
			   	)
				)
);
