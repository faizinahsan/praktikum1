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
    public function GetWhere($table,$where){
		$res=$this->db->get_where($table,$where); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res; // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array-
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
    	$idUser = $this->db
    	->select("File_User_idUser")
    	->where('idPaper',$idPaper)
    	->get("paper")
    	->row();
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
    public function GetCategories($idPaper){
    	$this->db->select('*');    
    	$this->db->from('paper');
    	$this->db->join('paper_has_kategori', 'paper.idPaper = paper_has_kategori.Paper_idPaper');
    	$this->db->join('kategori', 'kategori.idKategori = paper_has_kategori.Kategori_idKategori');
    	$this->db->where([
    		'paper_has_kategori.Paper_idPaper'=>$idPaper,
    	]);
    	$query = $this->db->get();
    	return $query->result_array();
    }
    public function GetLink($idPaper){
    	$this->db->select('namaFile,linkFile');    
    	$this->db->from('file');
    	$this->db->join('paper', 'file.idFile=paper.File_idFile');
    	$this->db->where([
    		'paper.idPaper'=>$idPaper,
    	]);
    	$query = $this->db->get();
    	return $query;
    }
}
 ?>
