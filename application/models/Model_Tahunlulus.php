<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Tahunlulus extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		$this->db->order_by('tahunlulus','DESC');
		$tahunlulus = $this->db->get('tahunlulus');

		return $tahunlulus->result_array();
	}
}