<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Seleksi extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		$seleksi = $this->db->get('seleksi');

		return $seleksi->result_array();
	}
}