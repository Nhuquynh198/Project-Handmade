<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tintucModel extends CI_Model
{
	var $tablename = "tintuc";
	
	public function __construct()
	{
		parent:: __construct();
	}
	
	public function getAllTT($limit=0,$start=0)
	{
		if($limit>0)
			$this->db->limit($limit, $start);
		$query = $this->db->get($this->tablename);
		return $query->result();
	}
	
	public function getTTById($mtt)
	{
		$this->db->where("MTT",$mtt);
		$query = $this->db->get($this->tablename);
		return $query->row();
	}
	
	public function insert($values)
	{
		if ($this->db->insert($this->tablename, $values))
			return true;
	}
	
	public function update($values,$mtt)
	{
		/*
			$data = array(
			'title' => $title,
			'name' => $name,
			'date' => $date
		);
		*/
		$this->db->where('MTT', $mtt);	
		if ($this->db->update($this->tablename, $values))
			return true;
	}
	
	public function delete($mtt)
	{
		$this->db->where('MTT', $mtt);	
		if ($this->db->delete($this->tablename))
			return true;
	}
}