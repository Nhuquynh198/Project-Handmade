<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chudeModel extends CI_Model
{
	var $tablename = "chu_de";
	
	public function __construct()
	{
		parent:: __construct();
	}
	
	public function getAllChude($limit=0,$start=0)
	{
		if($limit>0)
			$this->db->limit($limit, $start);
			
		//$query = $this->db->get($this->tablename);
		$sql = "SELECT MCD, Ten_chu_de, (select count(*) from sach where sach.MCD = chu_de.MCD) as so_luong_dau_sach FROM chu_de WHERE 1";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function getChudeById($mcd)
	{
		$this->db->where("MCD",$mcd);
		$query = $this->db->get($this->tablename);
		return $query->row();
	}
	
	
}
?>