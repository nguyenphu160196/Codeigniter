<?php
class Home extends My_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('baiviet_model');
		$this->load->model('dmbaiviet_model');
		$this->load->model('thanhvien_model');
	}
	function index()
	{
		$data = array();
		$data['temp'] = 'admin/home';
		$sumbv = $this->baiviet_model->get_total();
		$data['sumbv'] = $sumbv;
		$sumdm = $this->dmbaiviet_model->get_total();
		$data['sumdm'] = $sumdm;
		$sumtv = $this->thanhvien_model->get_total();
		$data['sumtv'] = $sumtv;
		$this->load->view('admin/index',$data); 
	}
	function logout()
	{
		if($this->session->userdata('login'))
		{
			$this->session->unset_userdata('login');
			redirect(admin_url('login/index'));
		}
	}
}
?>