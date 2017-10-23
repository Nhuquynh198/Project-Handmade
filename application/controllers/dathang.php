<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dathang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model("dathangModel");
		//$this->load->model("phanloaiModel");
	}
	public function index()
	{
		
		$this->template->load('fontend_quynh', 'contents' , 'dathang/dathang_view');	
	}
}
?>