<?php
class Blog extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		
		$data = array();
		$data['page_title'] = 'Blog | EShopper';
		$data['temp'] = 'user/blog';
		$this->load->view('user/index',$data); 
	}
}
?>