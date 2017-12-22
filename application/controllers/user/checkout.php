<?php
class Checkout extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		
		$data = array();
		$data['page_title'] = 'Checkout | EShopper';
		$data['temp'] = 'user/checkout';
		$this->load->view('user/index',$data); 
	}
}
?>