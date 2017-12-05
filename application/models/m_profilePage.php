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
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
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
		$data = $this->db
		->select("idPaper","namaPaper")
		->where(
			[
				'File_User_idUser'=>$idUser
			]
		)
		->get("paper")
		->result_array();
	}
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
	}
}
 ?>
