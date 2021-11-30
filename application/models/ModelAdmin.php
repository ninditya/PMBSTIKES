<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAdmin extends CI_Model
{
	private $_table = "admin";
	public $id;
	public $username;
	public $password;
	public $id_role;
	
    function cek_login($table,$where)
    {      
        return $this->db->get_where($table,$where);
    }
   	public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    //cek nip dan password dosen
    function admin($username,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    function mahasiswa($username,$password){
        $query=$this->db->query("SELECT * FROM berkas WHERE pmbid='$username' AND namalengkap='$password' LIMIT 1");
        return $query;
    }
}