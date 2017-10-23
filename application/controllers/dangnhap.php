<?php
session_start();
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dangnhap extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Load model làm việc với nhà xuất bản
		$this->load->model("dangnhapModel");
	}
	
	public function index()
	{	
		
		$data["bang_kh"]=$this->dangnhapModel->getAllKH();		
		//Tải view vào để hiện thị dữ liệu
		
		$this->template->load('fontend_quynh', 'contents' , 'taikhoan/dangnhap_add', $data);
	
		//$this->template->load('fontend_thay', 'contents' , 'nxb/nxb_view', $data);
		
		//$this->template->load('fontend_layout', 'contents' , 'nxb/nxb_view', $data);
	}
	
	public function add()
	{		
		//Đoạn code sử thư viện kiểm tra dữ liệu nhập trên form có hợp lệ không
		$this->load->library("form_validation");
		$error_message = array('required' => '%s không được để trống.');		 
		$this->form_validation->set_rules('first_name', 'First Name', 'required',$error_message);		
		$this->form_validation->set_rules('last_name', 'Last Name', 'required',$error_message);		
		$this->form_validation->set_rules('user_name', 'User Name', 'required',$error_message);		
		//$this->form_validation->set_rules('birthday', 'Birthday', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required',$error_message);
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required',$error_message);
		$this->form_validation->set_rules('phone', 'Phone Number', 'required',$error_message);
		$this->form_validation->set_rules('address', 'Address', 'required',$error_message);
		//Mỗi thông báo lỗi được bao trong phần tử div
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
		if ($this->form_validation->run() == FALSE)	{					
			$this->template->load('fontend_quynh', 'contents' , 'taikhoan/dangnhap_add');	
		}
		else
		{
			//Lưu dữ liệu vào cơ sở dữ liệu
			$this->save();
			//Quay trở lại liệt kê danh sách nhà xuất bản
			redirect(site_url('dangnhap'));
		}
	}
}