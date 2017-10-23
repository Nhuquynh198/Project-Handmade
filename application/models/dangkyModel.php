<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dangkyModel extends CI_Model
{
	var $tablename = "khach_hang";
	
	public function __construct()
	{
		parent:: __construct();
	}
	
	public function getAllKH($limit=0, $start=0)
	{
		if($limit>0)
			$this->db->limit($limit, $start);
		$this->db->select( $this->tablename.".*, if( `gioi_tinh` =0, 'Nữ', 'Nam' ) AS phai")	;
		$this->db->from($this->tablename);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getKHById($mkh)
	{
		$this->db->where("MKH",$mkh);
		$query = $this->db->get($this->tablename);
		return $query->row();
	}
	
	public function insert($values)
	{
		if ($this->db->insert($this->tablename, $values))
			return true;
	}
	
	public function update($values,$mkh)
	{
		/*
			$data = array(
			'title' => $title,
			'name' => $name,
			'date' => $date
		);
		*/
		$this->db->where('MKH', $mkh);	
		if ($this->db->update($this->tablename, $values))
			return true;
	}
	
	public function delete($mkh)
	{
		$this->db->where('MKH', $mkh);	
		if ($this->db->delete($this->tablename))
			return true;
	}
}