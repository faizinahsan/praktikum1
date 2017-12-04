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
	public function GetWhere($nama){
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
}
 ?>
