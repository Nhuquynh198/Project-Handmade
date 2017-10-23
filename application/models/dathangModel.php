<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dathangModel extends CI_Model
{
	var $tablename = "don_dat_hang";
	
	public function __construct()
	{
		parent:: __construct();
	}
}