<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class m_searchView extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function searchData($keyword)
	{
		return $this->db->select('*')->like('namaPaper',$keyword)->get('paper')->result_array();
	}
	public function GetBook($idCategories){
		$this->db->select('*');    
		$this->db->from('paper');
		$this->db->join('paper_has_kategori', 'paper.idPaper = paper_has_kategori.Paper_idPaper');
		$this->db->join('kategori', 'paper_has_kategori.kategori_idKategori = kategori.idKategori');
		$this->db->join('user', 'paper.File_User_idUser = user.idUser');
		$this->db->where([
			'paper_has_kategori.kategori_idKategori'=>$idCategories,
		]);
		$query = $this->db->get();
		return $query->result_array();
	}
}
 ?>