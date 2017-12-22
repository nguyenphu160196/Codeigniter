<?php
class Cart extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library("cart");
		$this->load->model('baiviet_model');
	}
    function ajaxindex()
    {
        $data = array();
        $data['page_title'] = 'Cart | EShopper';
        $data['temp'] = 'user/minicart';
        $list = $this->baiviet_model->get_list();
        $data['list'] = $list;
        $cart=$this->cart->contents();
        $data['cart'] = $cart;
        $this->load->view('user/ajaxindex',$data);        
    }
	function index()
	{		
		$data = array();  
		$data['page_title'] = 'Cart | EShopper';
		$data['temp'] = 'user/cart';
		$list = $this->baiviet_model->get_list();
		$data['list'] = $list;
		$cart=$this->cart->contents();
		$data['cart'] = $cart;
		$this->load->view('user/index',$data);
	}
	public function show(){
        //Show thong tin chi tiet gio hang
        $data=$this->cart->contents();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
	}
	public function deleteOne(){
        $data=$this->cart->contents();
        $id = $this->uri->segment(4);
        foreach($data as $item){
            if($item['id'] == $id){
                $item['qty'] = 0;
                $delOne = array("rowid" => $item['rowid'], "qty" => $item['qty']);
            }
        }
        if($this->cart->update($delOne)){
        	$this->session->set_flashdata('flash_dellR','Xoa san pham thanh cong');
        }else{
        	$this->session->set_flashdata('flash_dellw','Xoa san pham that bai');
        }
        redirect(user_url('Cart/index'));
	}
	public function del(){
        $this->cart->destroy();
        echo "Done";
	}
	public function updateIncreace(){
        $data=$this->cart->contents();
        $id = $this->uri->segment(4);
        foreach($data as $item){
            if($item['id'] == $id){
                $item['qty'] += 1;
                $update = array("rowid" => $item['rowid'], "qty" => $item['qty']);
            }
        }
        if($this->cart->update($update)){
            $this->session->set_flashdata('flash_updR','Update san pham thanh cong');
        }else{
            $this->session->set_flashdata('flash_updw','Update san pham that bai');
        }
        redirect(user_url('Cart/index'));
	}
	public function updateDecreace(){
        $data=$this->cart->contents();
        $id = $this->uri->segment(4);
        foreach($data as $item){
            if($item['id'] == $id){
                $item['qty'] -= 1;
                $update = array("rowid" => $item['rowid'], "qty" => $item['qty']);
            }
        }
        if($this->cart->update($update)){
            $this->session->set_flashdata('flash_updR','Update san pham thanh cong');
        }else{
            $this->session->set_flashdata('flash_updw','Update san pham that bai');
        }
        redirect(user_url('Cart/index'));
	}
}
?>