<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sanphamModel extends CI_Model
{
	var $tablename = "san_pham";
	
	public function __construct()
	{
		parent:: __construct();
	}
	
	public function getAllSP($limit=0,$start=0)
	{
		if($limit>0)
			$this->db->limit($limit, $start);
		
		$query = $this->db->get($this->tablename);
		return $query->result();
	}
	
	public function getSPById($msp)
	{
		$this->db->where("ma_san_pham",$msp);
		$query = $this->db->get($this->tablename);
		return $query->row();
	}
	
	public function getSPByMCL($machungloai, $limit=0,$start=0)
	{
		if($limit>0)
			$this->db->limit($limit, $start);
		
		$this->db->where("MCL",$machungloai);
		$query = $this->db->get($this->tablename);
		return $query->result();
	}
	
	public function insert($values)
	{
		if ($this->db->insert($this->tablename, $values))
			return true;
	}
	
	public function update($values,$msp)
	{
		/*
			$data = array(
			'title' => $title,
			'name' => $name,
			'date' => $date
		);
		*/
		$this->db->where('ma_san_pham', $msp);	
		if ($this->db->update($this->tablename, $values))
			return true;
	}
	
	public function delete($msp)
	{
		$this->db->where('ma_san_pham', $msp);	
		if ($this->db->delete($this->tablename))
			return true;
	}
	
}