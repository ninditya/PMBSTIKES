<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Jalur extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		$jalur = $this->db->get('jalur');

		return $jalur->result_array();
	}
}