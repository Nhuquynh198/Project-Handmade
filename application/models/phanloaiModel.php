<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class phanloaiModel extends CI_Model
{
	var $tablename = "phan_loai";
	
	public function __construct()
	{
		parent:: __construct();
	}
	
	public function getAllPL($limit=0,$start=0)
	{
		if($limit>0)
			$this->db->limit($limit, $start);
			
		//$query = $this->db->get($this->tablename);
		$sql = "SELECT MCL, ten_ma_loai_san_pham, (select count(*) from san_pham where san_pham.MCL = phan_loai.MCL) as so_luong_sp_da_phan_loai FROM phan_loai WHERE 1";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function getPLById($mcl)
	{
		$this->db->where("MCL",$mcl);
		$query = $this->db->get($this->tablename);
		return $query->row();
	}
	
	
}
?>