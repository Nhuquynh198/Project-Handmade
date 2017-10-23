<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tieudeModel extends CI_Model
{
	var $tablename = "tin_tuc";
	
	public function __construct()
	{
		parent:: __construct();
	}
	
	public function getAllTD($limit=0,$start=0)
	{
		if($limit>0)
			$this->db->limit($limit, $start);
			
		//$query = $this->db->get($this->tablename);
		$sql = "SELECT MTT, tieu_de, ngay_cap_nhat, nd_cap_nhat, noi_dung, noi_dung1, noi_dung_2, noi_dung_3, noi_dung_4, y_kien_phan_hoi, hinh_minh_hoa, hinh_1, hinh_2 FROM tin_tuc";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	
}
?>