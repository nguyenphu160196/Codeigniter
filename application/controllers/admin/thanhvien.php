<?php
class Thanhvien extends My_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('thanhvien_model');
	}
	function ajaxindex()
	{
		$data = array();
		$data['page_title'] = '';
		$list = $this->thanhvien_model->get_list();
		$data['list'] = $list; 
		$data['temp'] = 'admin/thanhvien/xemthanhvien';
		$this->load->view('admin/AjaxIndex',$data); 
	}
	function ajaxindex2()
	{
		$data = array();
		$data['page_title'] = '';
		$list = $this->thanhvien_model->get_list();
		$data['list'] = $list; 
		$data['temp'] = 'admin/thanhvien/themthanhvien';
		$this->load->view('admin/AjaxIndex',$data); 
	}
	function themtv()
	{
		$data = array();
		$data['temp'] = 'admin/thanhvien/themthanhvien';
		if($this->input->post())
		{
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('username','Tên tài khoản','required');
			$this->form_validation->set_rules('password','Mật khẩu','required');
			$this->form_validation->set_rules('confirmpassword','Xác nhận mật khẩu','required');
			if($this->form_validation->run())
			{
				$email= $this->input->post('email');
				$tendn = $this->input->post('username');
				$matkhau = $this->input->post('password');
				$xnmatkhau = $this->input->post('confirmpassword');
				if($matkhau==$xnmatkhau){				
					$input = array('email'=>$email,'tai_khoan'=>$tendn,'mat_khau'=>$matkhau);
					$this->thanhvien_model->create($input);
					$this->session->set_flashdata('flash_mess','Đã thêm thành công');
				}
				else
				{
					$this->session->set_flashdata('flash_cp','Xác nhận mật khẩu chưa đúng');
				}
			}
		}
		$this->load->view('admin/index',$data);
	}
	function xemtv()
	{
		$data = array();
		$data['temp'] = 'admin/thanhvien/xemthanhvien';
		$list = $this->thanhvien_model->get_list();
		$data['list'] = $list;
		$this->load->view('admin/index',$data);
	}
	function suatv()
	{
		$data = array();
		$data['temp'] = 'admin/thanhvien/suathanhvien';
		$id = $this->uri->segment(4);
		$row = $this->thanhvien_model->get_info($id);
		$data['row'] = $row;
		if($this->input->post())
		{
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('username','Tên tài khoản','required');
			$this->form_validation->set_rules('password','Mật khẩu','required');
			$this->form_validation->set_rules('confirmpassword','Xác nhận mật khẩu','required');
			if($this->form_validation->run())
			{
				$email= $this->input->post('email');
				$tendn = $this->input->post('username');
				$matkhau = $this->input->post('password');
				$xnmatkhau = $this->input->post('confirmpassword');
				if($matkhau==$xnmatkhau){				
					$input = array('email'=>$email,'tai_khoan'=>$tendn,'mat_khau'=>$matkhau);
					$this->thanhvien_model->update($id,$input);
					$this->session->set_flashdata('flash_mess','Đã sửa thành công');
				}
				else
				{
					$this->session->set_flashdata('flash_cp','Xác nhận mật khẩu chưa đúng');
				}
			}
		}
		$this->load->view('admin/index',$data);
	}
	function xoatv()
	{
		$id = $this->uri->segment(4);
		$row = $this->thanhvien_model->delete($id);
		$this->session->set_flashdata('flash_mess','Đã xóa thành công');
		redirect(admin_url('thanhvien/xemtv'));
	}
	function trangthai()
	{
		$data = array();
		$id = $this->uri->segment(4);
		$this->session->set_flashdata('flash_tt','Thay đổi trạng thái thành công');
		redirect(admin_url('thanhvien/xemtv'));
	}
}
?>