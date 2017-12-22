<?php
class Shop extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$data = array();
		$data['page_title'] = 'Shop | EShopper';
		$data['temp'] = 'user/shop';
		$this->load->view('user/index',$data); 
	}
}
?>