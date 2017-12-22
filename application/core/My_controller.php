<?php 
	class My_controller extends CI_Controller
	{
		//biến gửi dữ liệu
		public $data =array();
		function __construct()
		{
			//ke thua CI_Controller
			parent::__construct();
			$this->check_login();
		}
		private function check_login()
		{
			//lay ra gia tri cua controller
			$controller = $this->uri->segment(2);
			$controller = strtolower($controller);
			$login = $this->session->userdata('login');		

			// neu admin chua dang nhap thi chi cho vao trang login
			// neu chua ton tai session login va controller khong phai login
			if(!$login && $controller!= 'login')
			{
				redirect(admin_url('login/index'));
			}
			if($login && $controller == 'login')
			{
				redirect(admin_url('home/index'));
			}
		}
	}
?>