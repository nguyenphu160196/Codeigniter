<?php
class Baiviet extends My_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('baiviet_model');
		$this->load->model('dmbaiviet_model');
	}
	function ajaxindex()
	{
		$data = array();
		$data['page_title'] = '';
		$list = $this->baiviet_model->get_list();
		$data['list'] = $list; 
		$data['temp'] = 'admin/baiviet/xembaiviet';
		$this->load->view('admin/AjaxIndex',$data); 
	}
	function ajaxindex2()
	{
		$data = array();
		$data['page_title'] = '';
		$list = $this->baiviet_model->get_list();
		$data['list'] = $list; 
		$data['temp'] = 'admin/baiviet/thembaiviet';
		$this->load->view('admin/AjaxIndex',$data); 
	}
	function thembai()
	{
		$this->load->model('dmbaiviet_model');
		$listdm = $this->dmbaiviet_model->get_list();
		$data = array();
		$data['temp'] = 'admin/baiviet/thembaiviet';
		$data['listdm'] = $listdm;
		if($this->input->post())
		{
			$this->form_validation->set_rules('title','tiêu đề bài viết','required');
			$this->form_validation->set_rules('price','giá sản phẩm','required');
			$this->form_validation->set_rules('content','Nội dung bài viết','required');
			$this->form_validation->set_rules('img','Hình ảnh bài viết','required');
			$this->form_validation->set_rules('cat','Danh mục bài viết','required');
			if($this->form_validation->run())
			{
				$title = $this->input->post('title');
				$price = $this->input->post('price');
				$content = $this->input->post('content');
				$img = $this->input->post('img');
				$cat = $this->input->post('cat');
				$input = array('tieu_de'=>$title, 'gia_sp'=>$price,'noi_dung'=>$content,'hinh_anh'=>$img,'id_dm'=>$cat);
				$this->baiviet_model->create($input);
				$this->session->set_flashdata('flash_mess','Đã thêm thành công');
			}
		}
		$this->load->view('admin/index',$data);
	}
	function xembai()
	{
		$data = array();
		$data['temp'] = 'admin/baiviet/xembaiviet';
		$list = $this->baiviet_model->get_list();
		$data['list'] = $list;
		$this->load->view('admin/index',$data);
	}
	function suabai()
	{
		$id = $this->uri->segment(4);
		$baiviet = $this->baiviet_model->get_info($id);
		$this->load->model('dmbaiviet_model');
		$listdm = $this->dmbaiviet_model->get_list();
		$data = array();
		$data['temp'] = 'admin/baiviet/suabaiviet';
		$data['baiviet'] = $baiviet;
		$data['listdm'] = $listdm;
		if($this->input->post())
		{
			$this->form_validation->set_rules('title','tiêu đề bài viết','required');
			$this->form_validation->set_rules('price','giá sản phẩm','required');
			$this->form_validation->set_rules('content','Nội dung bài viết','required');
			$this->form_validation->set_rules('img','Hình ảnh bài viết','required');
			$this->form_validation->set_rules('cat','Danh mục bài viết','required');
			if($this->form_validation->run())
			{
				$title = $this->input->post('title');
				$price = $this->input->post('price');
				$content = $this->input->post('content');
				$img = $this->input->post('img');
				$cat = $this->input->post('cat');
				$input = array('tieu_de'=>$title,'gia_sp'=>$price,'noi_dung'=>$content,'hinh_anh'=>$img,'id_dm'=>$cat);
				$this->baiviet_model->update($id,$input);
				$this->session->set_flashdata('flash_mess','Đã sửa thành công');
				$title = $baiviet->tieu_de;
				$price = $baiviet->gia_sp;
				$content = $baiviet->noi_dung;
				$img = $baiviet->hinh_anh;
				redirect(admin_url('baiviet/xembai'));
			}
		}
		$this->load->view('admin/index',$data);
	}
	function xoabai()
	{
		$id = $this->uri->segment(4);
		$row = $this->baiviet_model->delete($id);
		$this->session->set_flashdata('flash_mess','Đã xóa thành công');
		redirect(admin_url('baiviet/xembai'));
	}
}
?>