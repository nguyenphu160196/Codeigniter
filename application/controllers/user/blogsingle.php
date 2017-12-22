<?php
class Blogsingle extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		
		$data = array();
		$data['page_title'] = 'Blogsingle | EShopper';
		$data['temp'] = 'user/blogsingle';
		$this->load->view('user/index',$data); 
	}
}
?>