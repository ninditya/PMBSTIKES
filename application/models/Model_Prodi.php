<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Prodi extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		$prodi = $this->db->get('prodi');

		return $prodi->result_array();
	}
}