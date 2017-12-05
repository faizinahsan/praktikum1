<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * summary
 */
class m_profilePage extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function GetFile($table){
		$res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array-
    }
   	public function GetWhere($table,$where){
		return $this->db->get_where($table,$where);
	}
    public function Insert($table,$data){
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
		return $res;
	}
    public function Insert_Batch($table,$data=array()){
        $res = $this->db->insert_batch($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
		return $res;
	}
	public function GetIdFile($nama){
		$fileId = $this->db
		->select("idFile")
		->where(
			[
				'namaFile'=>$nama
			]
		)
		->get("file")
		->row();
		return $fileId->idFile;	
	}
	public function GetIdPaper($namaFile){
		$paperId = $this->db
		->select("idPaper")
		->where(
			[
				'namaPaper'=>$namaFile
			]
		)
		->get("paper")
		->row();
		return $paperId->idPaper;	
	}
	public function GetJudulPaper($idUser){
		$data = $this->db->select("idPaper,namaPaper")->where('File_User_idUser',$idUser)->order_by('idPaper','ASC')->get('paper');
		return $data->result_array();	

	}
	// public function GetJudulWishlistPaper($idPaper=array()){
	// 	$data = $this->db->select("namaPaper")->where_in('idPaper',$idPaper)->get('paper');
	// 	return $data->result_array();	

	// }
	public function GetAuthor($idUser){
		$data = $this->db
		->select("username")
		->where(
			[
				'idUser'=>$idUser
			]
		)
		->get("user")
		->result_array();
		return $data;
	}
	// public function GetWishlist($idUser){
	// 	$data = $this->db->select("Paper_idPaper")
	// 	->where(
	// 		[
	// 			'User_IdUser'=>$idUser,
	// 			'isWishlist' => 1
	// 		]
	// 	)
	// 	->get("user_has_paper")
	// 	->result_array();
	// 	return $data;
	// }
	public function GetWishlist($idUser){
		$this->db->select('*');    
		$this->db->from('paper');
		$this->db->join('user_has_paper', 'paper.idPaper = user_has_paper.Paper_idPaper');
		$this->db->join('user', 'paper.File_User_idUser = user.idUser');
		$this->db->where('user_has_paper.User_IdUser',$idUser);
		$query = $this->db->get();
		return $query->result_array();
	}
}
 ?>
