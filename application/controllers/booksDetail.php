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
	}

	public function index()
	{
		$data['paper']= $this->m_bookDetail->GetBook($this->uri->segment(3));
		$data['user'] = $this->m_bookDetail->GetAuthor($this->uri->segment(3));
		$data['idPaper'] = $this->uri->segment(3);


// Yang diparsing si id paper
		$this->load->view('booksDetail',$data);
	}

	public function wishlist(){
		$userID = $this->session->userdata('idUser');
		$data = array(
			'User_idUser'=>$userID ,
			'Paper_idPaper'=> $this->uri->segment(3),
			'isWishlist'=>1
		);
		$this->db->insert('user_has_paper', $data);
		redirect(base_url('index.php/booksDetail/index/'.$this->uri->segment(3)));
	}
}
