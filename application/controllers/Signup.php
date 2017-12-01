<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('m_users');
	}
	public function index()
	{
		$this->load->view('Signup');
	}
	public function signup(){
	  $this->load->helper('form');
	  $this->load->library('form_validation');

		 $this->form_validation->set_rules('username', 'USERNAME','required');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('passconf','PASSWORD','required|matches[password]');
	  /*
	  $this->form_validation->set_rules(
	   'username', 'Username', 
	   'required|min_length[5]|max_length[12]|is_unique[user.username]',
	   array(
	    'required' => 'Required Username',
	    'min_length' => 'Min 5 characters',
	    'max_length' => 'Max 12 characters',
	    'is_unique' => 'Uername has been used' 
	   )
	  );
	 $this->form_validation->set_rules('email','EMAIL','required|valid_email',
		   array(
	    'required' => 'Required Email',
	    'min_length' => 'Min 5 characters',
	    'max_length' => 'Max 12 characters',
	    'is_unique' => 'Email has been used' 
	   )); 
	  $this->form_validation->set_rules('password', 'Password',
	   'required|min_length[6]|max_length[12]',
	   array(
	    'required' => 'You must provide a %s.',
	    'min_length' => 'Min 6 characters',
	    'max_length' => 'Max 12 characters'
	   )
	  );
	  $this->form_validation->set_rules('passconf', 'Password Confirmation','required|matches[password]',
	   array(
	    'required' => 'Confirm your password',
	    'matches' => 'Password not match'
	   )
	  );

	  */

	  if ($this->form_validation->run() === FALSE) {

	        $this->load->view('Signup');
	     
	     } else {

	        $this->m_users->register();
	      	$this->data['error'] = "*You can login now";
	   		$this->load->view('Login');
	   return;
	  }
	 }
}
