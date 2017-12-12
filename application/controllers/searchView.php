<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class SearchView extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_searchView');
	}
	function search_keyword()
	{
	    $keyword = $this->input->get('keyword');
	    $data=$this->m_searchView->searchData($keyword);
	    $data = array(
	    	'data'=>$data
	    );
	    $this->load->view('searchView',$data);
	}
}

?>