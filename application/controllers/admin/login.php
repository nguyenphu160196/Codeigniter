<?php 
	class Login extends My_controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('thanhvien_model');
		}
		function index()
		{			
			 if($this->input->post())
			{
				//goi den ham kiem tra dang nhap check_login
				$this->form_validation->set_rules('login','login','callback_check_login');	
				if($this->form_validation->run())
				{
					$taikhoan = $this->input->post('user');
					//neu form da chay dung thi se tao 1 session cho admin
					$this->session->set_userdata('login',$taikhoan);
					redirect(admin_url('home/index'));
				}		
			}
			$this->load->view('admin/login');
		}
		//so sanh tai khoan trong csdl,tra ve gia tri true false 
		function check_login()
		{
			$taikhoan = $this->input->post('user');
			$matkhau = $this->input->post('pass');
			$where = array('tai_khoan'=>$taikhoan,'mat_khau'=>$matkhau);
			if($this->thanhvien_model->check_exists($where))
			{
				return true;
			}
			else
			{
				return false;
			}
		}		
	}
?>