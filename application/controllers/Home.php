<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
        parent::__construct();
    
        if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }
    }
 
    function index(){
        $this->load->view('home/index');
    }

    function mahasiswa()
    {
        $this->load->view('home/mahasiswa');
    }

}