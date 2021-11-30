<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Gelombang extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		$gelombang = $this->db->get('gelombang');

		return $gelombang->result_array();
	}
}