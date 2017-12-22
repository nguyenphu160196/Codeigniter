<?php
class Productdetails extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("baiviet_model");
		$this->load->library("cart");
	}
	function index()
	{
		$data = array();
		$data['page_title'] = 'Productdetails | EShopper';
		$data['temp'] = 'user/productdetails';
		$id = $this->uri->segment(4);
		$baiviet = $this->baiviet_model->get_info($id);
		$data['list'] = $baiviet;
		$this->session->set_flashdata('flash_cartR','Them san pham thanh cong');
		$this->load->view('user/index',$data); 
	}
	public function insert(){
		$id = $this->uri->segment(4);
		$baiviet = $this->baiviet_model->get_info($id);
		$title = $baiviet->tieu_de;
		$content = $baiviet->noi_dung;
		$price = $baiviet->gia_sp;
		$img = $baiviet->hinh_anh;
        $data=array(
            "id" =>$id,
            "name" =>$title,
            "content"=>$content,
            "img"=>$img,
            "price" => $price,
            "qty" => "1"
        );
        // Them san pham vao gio hang
        if($this->cart->insert($data)){
        	$this->session->set_flashdata('flash_cartR','Them san pham thanh cong');
        }else{
        	$this->session->set_flashdata('flash_cartW','Them san pham that bai');
        }  
        redirect(user_url('productdetails/index/'.$id));
	}	
}
?>