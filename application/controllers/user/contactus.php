<?php
class Contactus extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		
		$data = array();
		$data['page_title'] = 'Contact | EShopper';
		$data['temp'] = 'user/contactus';
		$this->load->view('user/index',$data); 
	}
}
?>