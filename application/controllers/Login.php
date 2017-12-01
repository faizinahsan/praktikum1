<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// load data from model
		$this->load->model('m_users');
	}
	public function index()
	{
		$this->load->view('Login');
	}
	public function aksi_login(){
		$username = $this->input->post('username');
    	$password = $this->input->post('password');
    	$where = array(
    		'username'=>$username,
    		'password'=>md5($password)
    		);
    	$cek = $this->m_users->cek_login("user",$where)->num_rows();
    	if ($cek > 0) {
    		$data_session=array(
    			'nama'=>$username,
    			'status'=>"login");
    		$this->session->set_userdata($data_session);
    		redirect(base_url('Home'));
    	}else{
    		echo "Username dan password salah";
    	}
	}
	function logout(){
    	$this->session->sess_destroy();
    	redirect(base_url('login'));
    }
}
