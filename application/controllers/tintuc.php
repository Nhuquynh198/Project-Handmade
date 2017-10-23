<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tintuc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Load model làm việc với nhà xuất bản
		$this->load->model("tintucModel");
	}
	
	public function index($page = 0)
	{	
		$this->load->library('pagination');

		$config['base_url'] = site_url('tintuc/index');
		$config['total_rows'] = $this->db->count_all('tintuc');
		$config['per_page'] = 6;
		
		
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
			
		$data["bang_tt"]=$this->tintucModel->getAllTT($config['per_page'],$page);		
		//Tải view vào để hiện thị dữ liệu
		//$this->template->load('master_layout', 'contents' , 'tintuc/tintuc_view', $data);
		$this->template->load('fontend_quynh', 'contents' , 'tintuc/tintuc_gt', $data);
	}
	
	
	public function add()
	{		
		//Đoạn code sử thư viện kiểm tra dữ liệu nhập trên form có hợp lệ không
		$this->load->library("form_validation");
		$error_message = array('required' => '%s không được để trống.');		 
		$this->form_validation->set_rules('tieu_de', 'tieu_de', 'required',$error_message);	
		$this->form_validation->set_rules('ngay_cap_nhat', 'ngay_cap_nhat', 'required',$error_message);		
		$this->form_validation->set_rules('nd_cap_nhat', 'nd_cap_nhat', 'required', $error_message);		
		$this->form_validation->set_rules('y_kien_phan_hoi', 'y_kien_phan_hoi', 'required', $error_message);			
		$this->form_validation->set_rules('hinh_minh_hoa', 'hinh_minh_hoa', 'required', $error_message);
		//Mỗi thông báo lỗi được bao trong phần tử div
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
		if ($this->form_validation->run() == FALSE)	{					
			$this->template->load('master_layout', 'contents' , 'tintuc/tintuc_add', $data);
				
		}
		else
		{
			$this->save();
			redirect(site_url('tintuc'));
		}
	}
	
	
	public function edit($mtt)
	{		
		//Đoạn code sử thư viện kiểm tra dữ liệu nhập trên form có hợp lệ không
		$this->load->library("form_validation");
		$error_message = array('required' => '%s không được để trống.');		 
		$this->form_validation->set_rules('tieu_de', 'tieu_de', 'required',$error_message);	
		$this->form_validation->set_rules('ngay_cap_nhat', 'ngay_cap_nhat', 'required',$error_message);		
		$this->form_validation->set_rules('nd_cap_nhat', 'nd_cap_nhat', 'required', $error_message);		
		$this->form_validation->set_rules('y_kien_phan_hoi', 'y_kien_phan_hoi', 'required', $error_message);			
		$this->form_validation->set_rules('hinh_minh_hoa', 'hinh_minh_hoa', 'required', $error_message);
		//Mỗi thông báo lỗi được bao trong phần tử div
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
		if ($this->form_validation->run() == FALSE)	
		{	
			$data["tt"]=$this->tintucModel->getTTById($mtt);				
			$this->template->load('master_layout', 'contents' , 'tintuc/tintuc_edit', $data);	
		}
		else
		{
			//Lưu dữ liệu vào cơ sở dữ liệu
			$this->save($mtt);
			//Quay trở lại liệt kê danh sách khách hàng
			redirect(site_url('quanlytintuc'));
		}
	}
	
	public function save($id=0)
	{
		$values = array(
			
			
			'tieu_de'=>$this->input->post('tieu_de'),
			'ngay_cap_nhat'=>$this->input->post('ngay_cap_nhat'),
			'nd_cap_nhat'=>$this->input->post('nd_cap_nhat'),
			'y_kien_phan_hoi'=>$this->input->post('y_kien_phan_hoi'),
			'hinh_minh_hoa'=>$this->input->post('hinh_minh_hoa')
		);
		
		//Nếu $id=0 thì thực hiện chèn(thêm mới) với thông tin nxb trong mảng $values
		//Ngược lại,nếu khác 0 thì thực hiện cập nhật thông tin nxb tương ứng với id nhận được
		if($id==0)	
			$this->tintucModel->insert($values);
		else
			$this->tintucModel->update($values, $id);
	}
	
	public function delete($mtt)
	{	
		$this->tintucModel->delete($mtt);
		redirect(site_url('tintuc'));
	}
public function chitiet($id=0)
	{
			$data["tt"]=$this->tintucModel-> getTTById($id);	
		$this->template->load('fontend_tt', 'contents' , 'tintuc/tintuc',$data);	
	}

	
}
