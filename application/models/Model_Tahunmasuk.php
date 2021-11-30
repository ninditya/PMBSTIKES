<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Tahunmasuk extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		$this->db->order_by('tahunmasuk','DESC');
		$tahunmasuk = $this->db->get('tahunmasuk');

		return $tahunmasuk->result_array();
	}
}