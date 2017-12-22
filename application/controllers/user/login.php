<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{

		$data = array();
		$data['page_title'] = 'Login | EShopper';
		$data['temp'] = 'user/login';
		$this->load->view('user/index',$data); 
	}
}
?>