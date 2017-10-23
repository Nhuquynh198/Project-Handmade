<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dangky extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Load model làm việc với nhà xuất bản
		$this->load->model("dangkyModel");
	}
	
	  public function index()
	{	
		
		$data["bang_kh"]=$this->dangkyModel->getAllKH();		
		//Tải view vào để hiện thị dữ liệu
		
		$this->template->load('fontend_quynh', 'contents' , 'taikhoan/dangky_add', $data);
	
		//$this->template->load('fontend_thay', 'contents' , 'nxb/nxb_view', $data);
		
		//$this->template->load('fontend_layout', 'contents' , 'nxb/nxb_view', $data);
	} 
	
	public function add()
	{	
		//Đoạn code sử thư viện kiểm tra dữ liệu nhập trên form có hợp lệ không
		$this->load->library("form_validation");
		$error_message = array('required' => '%s không được để trống.');		 
		$this->form_validation->set_rules('ho_khach_hang', 'First Name', 'required',$error_message);		
		$this->form_validation->set_rules('ten_khach_hang', 'Last Name', 'required',$error_message);		
		$this->form_validation->set_rules('email', 'Your Email', 'required',$error_message);		
		$this->form_validation->set_rules('ten_dang_nhap', 'User name', 'required',$error_message);
		$this->form_validation->set_rules('mat_khau', 'Password', 'required',$error_message);
		$this->form_validation->set_rules('dien_thoai', 'Your Telephone', 'required',$error_message);
		$this->form_validation->set_rules('dia_chi', 'Your Address', 'required',$error_message);
		
		//Mỗi thông báo lỗi được bao trong phần tử div
		$this->form_validation->set_error_delimiters('<div class="alert alert-success">', '</div>');
		
		if ($this->form_validation->run() == FALSE)	{					
			$this->template->load('fontend_quynh', 'contents' , 'taikhoan/dangky_add');	
		}
		else
		{
			//Lưu dữ liệu vào cơ sở dữ liệu
			$this->save();
			//Quay trở lại liệt kê danh sách nhà xuất bản
			redirect(site_url('dangky'));
		}
	}
	public function save($id=0)
	{
		$ngay_sinh = $this->input->post('nam_sinh')."-".$this->input->post('thang_sinh')."-".$this->input->post('ngay_sinh');
		$values = array(
			'ho_khach_hang'=>$this->input->post('ho_khach_hang'),
			'ten_khach_hang'=>$this->input->post('ten_khach_hang'),
			'email'=>$this->input->post('email'),
			'ten_dang_nhap'=>$this->input->post('ten_dang_nhap'),
			'mat_khau'=>$this->input->post('mat_khau'),
			'dien_thoai'=>$this->input->post('dien_thoai'),
			'dia_chi'=>$this->input->post('dia_chi'),
			'ngay_sinh'=>$ngay_sinh,			
			'gioi_tinh'=>$this->input->post('gioi_tinh'),
		);
		
		//Nếu $id=0 thì thực hiện chèn(thêm mới) với thông tin nxb trong mảng $values
		//Ngược lại,nếu khác 0 thì thực hiện cập nhật thông tin nxb tương ứng với id nhận được
		if($id==0)	
			$this->dangkyModel->insert($values);
		else
			$this->dangkyModel->update($values, $id);
	}
}