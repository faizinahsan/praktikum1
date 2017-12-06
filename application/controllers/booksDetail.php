<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class booksDetail extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('m_bookDetail');
		$this->load->helper('download');
	}

	public function index()
	{
		$data['paper']= $this->m_bookDetail->GetBook($this->uri->segment(3));
		$data['user'] = $this->m_bookDetail->GetAuthor($this->uri->segment(3));
		$data['idPaper'] = $this->uri->segment(3);
		$data['kategori'] = $this->m_bookDetail->GetCategories($this->uri->segment(3));

// Yang diparsing si id paper
		$this->load->view('booksDetail',$data);
	}

	public function wishlist(){
		$userID = $this->session->userdata('idUser');
		$data = array(
			'User_idUser'=>$userID ,
			'Paper_idPaper'=> $this->uri->segment(3),
			'isWishlist'=>1,
			'isReadHistory'=>0
		);
		$dataPaper = array(
			'Paper_idPaper'=>$this->uri->segment(3),
			'User_idUser'=>$userID
		);
		$dataHistory = array(
			'User_idUser'=>$userID ,
			'Paper_idPaper'=> $this->uri->segment(3),
			'isWishlist'=>0,
			'isReadHistory'=>1
		);
		$cekHasPaper = $this->m_bookDetail->GetWhere('user_has_paper',$data)->num_rows();
		$cekHasHistory = $this->m_bookDetail->GetWhere('user_has_paper',$dataHistory)->num_rows();
		$cekUser = $this->m_bookDetail->GetWhere('user_has_paper',$dataPaper)->num_rows();
		if ($cekHasPaper == 0 && $cekUser == 0) {
			$this->db->insert('user_has_paper', $data);		
		redirect(base_url('index.php/booksDetail/index/'.$this->uri->segment(3)));

		}else{
			echo "<script>
			alert('Tidak Bisa dimasukan ke wishlist');
			</script>";
			header( "refresh:0.5;url=".base_url('index.php/booksDetail/index/'.$this->uri->segment(3)) );
		}
	}
	public function downloadFile(){
		$idPaper = $this->uri->segment(3);
		$path = $this->m_bookDetail->GetLink($idPaper)->row('linkFile');
		$pathContent = file_get_contents($path);
		$pathNama = $this->m_bookDetail->GetLink($idPaper)->row('namaFile');
		$userID = $this->session->userdata('idUser');
	// Nambahin ke Download History
		$dataInsert = array(
			'User_idUser'=>$userID ,
			'Paper_idPaper'=> $this->uri->segment(3),
			'isWishlist'=>0,
			'isReadHistory'=>1
		);
		$dataUpdate = array(
			'isWishlist'=>0,
			'isReadHistory'=>1
		);
		$where = array(
			'User_idUser'=>$userID,
			'Paper_idPaper'=>$this->uri->segment(3)
		);
		// ngecek user yg ingin ngedownload apakah sudahada didatabe?
		$cekHasPaper = $this->m_bookDetail->GetWhere('user_has_paper',$where)->num_rows();
		//$cekUser = $this->m_bookDetail->GetWhere('user_has_paper',$dataPaper)->num_rows();
		// ngecek untuk insert
		if ($cekHasPaper == 0 ) {
			$this->db->insert('user_has_paper', $dataInsert);		
		}
		else{
			$this->m_bookDetail->Update($where, $dataUpdate);		
		}
		force_download($pathNama,$pathContent);
		redirect(base_url('index.php/booksDetail/index/'.$this->uri->segment(3)));
	}
}
