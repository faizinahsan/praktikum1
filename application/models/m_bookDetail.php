<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * summary
 */
class m_bookDetail extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function GetBook($idPaper){
    	$data= array();
    	$option = array('idPaper'=>$idPaper);
    	$res=$this->db->get_where('paper',$option,1);
    	if ($res->num_rows() > 0) {
    		$data = $res->row_array();
    	}
    	$res->free_result();
    	return $data;
    }
    public function GetAuthor($idPaper){
    	// $idUser = $this->db
    	// ->select("File_User_idUser")
    	// ->where('idPaper',$idPaper)
    	// ->get("paper")
    	// ->row();
	  	// $idUser= $this->db->select('File_User_idUser');
	  	// $idUser= $this->db->from('paper');
    // 	$idUser= $this->db->where('idPaper',$idPaper);
    	$userTable=$this->db->get_where('user',array('idUser'=>$idUser->File_User_idUser));
    	return $userTable->row();
    }
    public function GetUser($nama){
    	$userId = $this->db
		->select("idUser")
		->where(
			[
				'username'=>$nama
				]
		)
		->get("user")
		->row();
		return $userId->idUser;
    }
}
 ?>
