<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class khachhang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Load model làm việc với kh
		$this->load->model("khachhangModel");
	}
	
	public function index($page = 0)
	{
		$this->load->library('pagination');

		$config['base_url'] = site_url('khachhang/index');
		$config['total_rows'] = $this->db->count_all('khach_hang');
		$config['per_page'] = 10;
		
		
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
		
		$query = $this->db->get("khach_hang");
		$data["bang_kh"]=$this->khachhangModel->getAllKH($config['per_page'],$page);	
		//$data["bang_kh"] = $query->result();
		$this->template->load('master_layout','contents','khachhang/khachhang_view',$data);
	}
	//
	public function add()
	{		
		//Đoạn code sử thư viện kiểm tra dữ liệu nhập trên form có hợp lệ không
		$this->load->library("form_validation");
		$error_message = array('required' => '%s không được để trống.');		 
		$this->form_validation->set_rules('Ho_khach_hang', 'Họ khách hàng', 'required',$error_message);	
		$this->form_validation->set_rules('Ten_khach_hang', 'Tên khách hàng', 'required',$error_message);		
		$this->form_validation->set_rules('Dien_thoai', 'Điện thoại', 'required', $error_message);		
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email',array('required'=>'%s Không được để trống !', 'valid_email'=>'Bạn nhập sai dạng địa chỉ email'));		
		$this->form_validation->set_rules('Dia_chi', 'Địa chỉ', 'required', $error_message);
		//Mỗi thông báo lỗi được bao trong phần tử div
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
		
	}
	
	public function edit($mkh)
	{		
		//Đoạn code sử thư viện kiểm tra dữ liệu nhập trên form có hợp lệ không
		$this->load->library("form_validation");
		$error_message = array('required' => '%s không được để trống.');		 
		$this->form_validation->set_rules('Ho_khach_hang', 'Họ khách hàng', 'required',$error_message);	
		$this->form_validation->set_rules('Ten_khach_hang', 'Tên khách hàng', 'required',$error_message);		
		$this->form_validation->set_rules('Dien_thoai', 'Điện thoại', 'required', $error_message);		
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email',array('required'=>'%s Không được để trống !', 'valid_email'=>'Bạn nhập sai dạng địa chỉ email'));		
		$this->form_validation->set_rules('Dia_chi', 'Địa chỉ', 'required', $error_message);
		//Mỗi thông báo lỗi được bao trong phần tử div
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
		if ($this->form_validation->run() == FALSE)	
		{
			$data["kh"]=$this->khachhangModel->getKHById($mkh);
			$this->template->load('master_layout', 'contents' , 'khachhang/khachhang_edit', $data);	
		}
		else
		{
			//Lưu dữ liệu vào cơ sở dữ liệu
			$this->save($mkh);
			//Quay trở lại liệt kê danh sách khách hàng
			redirect(site_url('khachhang'));
		}
	}
	
	public function save($id=0)
	{
		$values = array(
			'Ho_khach_hang'=>$this->input->post('Ho_khach_hang'),
			'Ten_khach_hang'=>$this->input->post('Ten_khach_hang'),
			'Dien_thoai'=>$this->input->post('Dien_thoai'),
			'Email'=>$this->input->post('Email'),
			'Dia_chi'=>$this->input->post('Dia_chi')
		);
		
		//Nếu $id=0 thì thực hiện chèn(thêm mới) với thông tin nxb trong mảng $values
		//Ngược lại,nếu khác 0 thì thực hiện cập nhật thông tin nxb tương ứng với id nhận được
		if($id==0)	
			$this->khachhangModel->insert($values);
		else
			$this->khachhangModel->update($values, $id);
	}
	
	public function delete($mkh)
	{
		$this->khachhangModel->delete($mkh);
		redirect(site_url('khachhang'));	
	}
}