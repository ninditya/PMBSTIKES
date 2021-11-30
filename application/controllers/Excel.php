<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Excel extends CI_Controller {
    //constructor class Excel
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }

        $this->load->helper('url');
        $this->load->model('model_mahasiswa');
    }
    
    public function index()
    {
        $data = array( 'title' => 'DATA CALON MAHASISWABARU', 'mahasiswa' => $this->model_mahasiswa->getAll());
        $this->load->view('view_excel',$data);
    }
 
    //export ke dalam format excel
    public function export_excel()
    {
        $data = array( 'title' => 'DATA CALON MAHASISWABARU', 'mahasiswa' => $this->model_mahasiswa->getAll());
        $this->load->view('view_laporanexcel',$data);
    }
 }