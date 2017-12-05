<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * summary
 */
class m_categories extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
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
