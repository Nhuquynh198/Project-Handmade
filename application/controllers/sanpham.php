<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sanpham extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model("sanphamModel");
		$this->load->model("phanloaiModel");
	}
	
	public function index($page = 0)
	{	
		$this->load->library('pagination');

		$config['base_url'] = site_url('sanpham/index');
		$config['total_rows'] = $this->db->count_all('san_pham');
		$config['per_page'] =24;
		
		
		$config['full_tag_open'] = '<nav aria-label="Page navigation" class="text-center"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$data["phantrang"]= $this->pagination->create_links();
		
		
		$data["bang_phan_loai"] = $this->phanloaiModel->getAllPL();
		$data["bang_sp"]=$this->sanphamModel->getAllSP($config['per_page'],$page);		
		//Tải view vào để hiện thị dữ liệu
		
		//$this->template->load('master_layout', 'contents' , 'sanpham/sanpham_view', $data);
	
		//$this->template->load('fontend_thay', 'contents' , 'nxb/nxb_view', $data);
		
		$this->template->load('fontend_layout', 'contents' , 'sanpham/gioithieu_view', $data);
	}
	
	public function phanloai($mcl)
	{
		$data["bang_phan_loai"] = $this->phanloaiModel->getAllPL();
		$data["bang_sp"] = $this->sanphamModel->getSPByMCL($mcl);
		
		$this->template->load('fontend_layout', 'contents' , 'sanpham/gioithieu_view', $data);	
	}
	
	public function dathang()
	{
		
		$this->template->load('fontend_quynh', 'contents' , 'dathang/dathang_view');	
	}
	
	public function edit($msp)
	{		
		//Đoạn code sử thư viện kiểm tra dữ liệu nhập trên form có hợp lệ không
		$this->load->library("form_validation");
		$error_message = array('required' => '%s không được để trống.');		 
		$this->form_validation->set_rules('Ten_san_pham', 'Tên sản phẩm', 'required',$error_message);			
		$this->form_validation->set_rules('Gia_ban', 'Giá bán', 'required',$error_message);
		//Mỗi thông báo lỗi được bao trong phần tử div
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data["sanpham"]=$this->sanphamModel->getSPById($msp);		
			$this->template->load('master_layout', 'contents' , 'sanpham/sanpham_edit', $data);	
		}
		else
		{
			//Lưu dữ liệu vào cơ sở dữ liệu
			$this->save($msp);
			//Quay trở lại liệt kê danh sách nhà xuất bản
			redirect(site_url('sanpham'));
		}
	}
	
	public function save($id=0)
	{
		$values = array(
			'Ten_san_pham'=>$this->input->post('Ten_san_pham'),
			'Gia_ban'=>$this->input->post('Gia_ban')
		);
		

		//Nếu $id=0 thì thực hiện chèn(thêm mới) với thông tin nxb trong mảng $values
		//Ngược lại,nếu khác 0 thì thực hiện cập nhật thông tin nxb tương ứng với id nhận được
		if($id==0)	
			$this->sanphamModel->insert($values);
		else
			$this->sanphamModel->update($values, $id);
	}
	
	public function delete($msp)
	{	
		$this->sanphamModel->delete($msp);
		redirect(site_url('sanpham'));
	}
}
