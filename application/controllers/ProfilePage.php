<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilePage extends CI_Controller {

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
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->model('m_profilePage');
    }
	public function index()
	{
	    // $data = $this->m_profilePage->GetFile('file');
     //    // Kode ini digunakan untuk mengubah data yang sudah kita panggil dari model menjadi sebuah array.
     //    $data = array(
     //    	"data"=>$data
     //    );
        // Kode ini merupakan Kode memanggil View, namun kita menambahkan , $data untuk membawa data dari model ke dalam View, sehingga $data dalam view merupakan sebuah array yang berisi data dari model.
        $idUser = $this->session->userdata('idUser');
        $data= $this->m_profilePage->GetJudulPaper($idUser);
        $where = array("User_idUser"=>$idUser);
        $cek = $this->m_profilePage->GetWhere('user_has_paper',$where)->num_rows();
        if ($cek >0) {
        	// Memasukan hasil Paper_idPaper ke isWishlist
        	// $isWishlist = $this->m_profilePage->GetWishlist($idUser);
        	// $judulPaper = $this->m_profilePage->GetJudulWishlistPaper($isWishlist);
        	// Get idPaper from paper where Paper_idPaper from user_has_paper is equal to idPaper from paper
        	$judulPaper = $this->m_profilePage->GetWishlist($idUser);
        	$readHistory = $this->m_profilePage->GetHistory($idUser);
      	    $data = array(
        		'data'=>$data,
        		'judulPaper'=>$judulPaper,
        		'readHistory'=>$readHistory
        	);        	
        	$this->load->view('ProfilePage',$data);
         }
         // else{
      	 //    $data = array(
        // 		'data'=>$data
        // 	);        	
        
        // 	$this->load->view('ProfilePage',$data);
        // }


	}
	public function do_upload(){
		// setting konfigurasi upload
    	$config['upload_path']= './assets/uploads/';
    	 $config['allowed_types'] = 'pdf';
    	 $config['overwrite'] = TRUE;    	 
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('filePdf')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
        	// $this->load->library('session',$config);
            $result = $this->upload->data();
            $userID = $this->session->userdata('idUser');
            // echo "<pre>";
            // print_r($result);
            // echo "</pre>";
            $data = array(
            	"namaFile"=>$result['file_name'],
            	"linkFile"=>$result['full_path'],
            	"extensi"=>$result['file_ext'],
            	"User_idUser"=>$userID
            );
            $namaFile = array('namaFile'=>$result['file_name']);
        	$cekFileDiDB = $this->m_profilePage->GetWhere('file',$namaFile)->num_rows();
            if ($cekFileDiDB > 0) {
                        $namaFile = $result['file_name'];
                        $idFile = $this->m_profilePage->GetIdFile($namaFile);
                        $dataPaper = array(
                        	"namaPaper"=>$result['file_name'],
                        	"File_idFile"=>$idFile,
                        	"File_User_idUser"=>$userID
                        );	
                        // Mendapatkan Id Paper dari file
                        $idPaper = $this->m_profilePage->GetIdPaper($namaFile);
                        // Memasukan value kategori dari view ke kategori_list
                        $kategori_list = $this->input->post('kategori');
                        $arrIDpaper = array('Paper_idPaper'=>$idPaper);
                        // select data
                        $cekKategori = $this->m_profilePage->GetIdKategori($idPaper);
                        $banyakRowKat = $this->m_profilePage->GetWhere('user_has_paper',$arrIDpaper);
                        if ($banyakRowKat->num_rows>0) {
	                        // looping kategori untuk setiap array
	                        $banyakRowKat = $banyakRowKat->result_array();
	                        foreach ($banyakRowKat as $value) {
	                        	$data = array('Kategori_idKategori'=>$value['Kategori_idKategori']);
	                        	echo $data;
	                        	// $this->m_profilePage->Delete($data);
	                        }
	                        // $this->db->delete('paper_has_kategori', array('Paper_idPaper' => $idPaper));
	                        // $this->m_profilePage->Delete();
	                        // $this->m_profilePage->Delete($cekKategori);
	                        foreach($kategori_list as $value) {
	                 	        $data= array(
         	                		'Paper_idPaper' => $idPaper,
	            	                'Kategori_idKategori' => $value
	            	            );
	            	            // memasukan data ke tabel paper_has_kategori untuk setiap array yang di loop
	                        $this->m_profilePage->Insert('paper_has_kategori',$data);
                        }
               		}            
               	redirect('profilePage');
            }else{

            	$this->m_profilePage->Insert('file',$data);
                     $namaFile = $result['file_name'];
                     $idFile = $this->m_profilePage->GetIdFile($namaFile);
                     $dataPaper = array(
                     	"namaPaper"=>$result['file_name'],
                     	"File_idFile"=>$idFile,
                     	"File_User_idUser"=>$userID
                     );	
                     $this->m_profilePage->Insert('paper',$dataPaper);
                     // Mendapatkan Id Paper dari file
                     $idPaper = $this->m_profilePage->GetIdPaper($namaFile);
                     // Memasukan value kategori dari view ke kategori_list
                     $kategori_list = $this->input->post('kategori');
                     // looping kategori untuk setiap array
                     foreach($kategori_list as $value) {
              	        $data= array(
         	                'Paper_idPaper' => $idPaper,
         	                'Kategori_idKategori' => $value
         	            );
         	            // memasukan data ke tabel paper_has_kategori untuk setiap array yang di loop
                     $this->m_profilePage->Insert('paper_has_kategori',$data);
                     } 	
			}
		
        }
	}
}
