<?php
class Error extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{		
		$data = array();
		$data['page_title'] = '404ERROR | EShopper';
		$data['temp'] = 'user/404';
		$this->load->view('user/index',$data); 
	}
}
?>