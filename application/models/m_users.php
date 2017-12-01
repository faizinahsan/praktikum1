<?php 
// m_users = model for users
class m_users extends CI_Model{
	// public function __construct(){
	// 	$this->load->database();
	// }
	public function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
}
 ?>
