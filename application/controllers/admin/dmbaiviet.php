<?php
class Dmbaiviet extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('dmbaiviet_model');
	}
	function ajaxindex()
	{
		$data = array();
		$data['page_title'] = '';
		$list = $this->dmbaiviet_model->get_list();
		$data['list'] = $list; 
		$data['temp'] = 'admin/danhmuc/xemdanhmuc';
		$this->load->view('admin/AjaxIndex',$data); 
	}
	function themdm()
	{
		
		$data = array();
		$data['temp'] = 'admin/danhmuc/themdanhmuc';
		if($this->input->post())
		{
			$this->form_validation->set_rules('title','Tên danh mục','required');
			if($this->form_validation->run())
			{
				$tendm = $this->input->post('title');
				$input = array('ten_dm'=>$tendm);
				$this->dmbaiviet_model->create($input);
				$this->session->set_flashdata('flash_mess','Đã thêm thành công');
			}
		}
		$this->load->view('admin/index',$data); 
	}
	function xemdm()
	{
		$data = array();
		$data['temp'] = 'admin/danhmuc/xemdm';
		$list = $this->dmbaiviet_model->get_list();
		$data['list'] = $list; 
		$this->load->view('admin/index',$data);
	}
	function suadm()
	{
		$data = array();
		$data['temp'] = 'admin/danhmuc/suadm';
		$id = $this->uri->segment(4);
		$row = $this->dmbaiviet_model->get_info($id);
		$data['row'] = $row;
		if($this->input->post())
		{
			$this->form_validation->set_rules('title','Tên danh mục','required');
			if($this->form_validation->run())
			{
				$tendm = $this->input->post('title');
				$input = array('ten_dm'=>$tendm);
				$this->dmbaiviet_model->update($id,$input);
				$this->session->set_flashdata('flash_mess','Đã sửa thành công');
				$row->ten_dm = $tendm;
				redirect(admin_url('dmbaiviet/themdm'));
			}
		}
		$this->load->view('admin/index',$data);
	}
	function xoadm()
	{
		$id = $this->uri->segment(4);
		$row = $this->dmbaiviet_model->delete($id);
		$this->session->set_flashdata('flash_mess','Đã xóa thành công');
		redirect(admin_url('dmbaiviet/themdm'));
	}
		
}
?>