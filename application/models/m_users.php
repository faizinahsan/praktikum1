<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// m_users = model for users
class m_users extends CI_Model{
	// public function __construct(){
	// 	$this->load->database();
	// }
	public function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
	public function register(){
		$this->load->helper('url');
		$data = array(
	        'username' => $this->input->post('username'),
	        'password' => md5( $this->input->post('password') ),
			'eMail' => $this->input->post('email'),
    	);
	
		return $this->db->insert('user', $data);
	}
}
 ?>
