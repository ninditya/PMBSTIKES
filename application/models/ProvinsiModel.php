<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class ProvinsiModel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
  
	public function provinsi()
	{
	    $this->db->order_by('name','ASC');
		$provinces = $this->db->get('provinces');


		return $provinces->result_array();
	}

	public function kabupaten($provId)
	{
		$kabupaten="<option value='0'>-- Pilih --</pilih>";

		$this->db->order_by('name', 'ASC');
		// $ide = $this->db->query("SELECT id FROM provinces WHERE name = $provId");
		$kab = $this->db->get_where('regencies', array('province_id' => $provId));

		foreach ($kab->result_array() as $data ) {
			$kabupaten .= "<option value='$data[name]'>$data[name]</option>";
		}

		return $kabupaten;
	}
}