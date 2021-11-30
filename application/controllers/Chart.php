<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();

	    if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }
        
	    $this->load->model('model_mahasiswa');
   	}

	public function index()
	{
        $data['graph'] = $this->model_mahasiswa->graph();
		$this->load->view('chart.php', $data);
	}

	}
 ?>

