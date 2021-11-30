<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Pewawancara extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		$this->db->order_by('nama','ASC');
		$pewawancara = $this->db->get('pewawancara');

		return $pewawancara->result_array();
	}
}