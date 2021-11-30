<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct(){
        parent::__construct();
    
        if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }

        $this->load->model('model_Pengumuman');
    }

    public function index(){
        //$this->load->view('view_home');
        $this->testGetData();
    }

    public function initUpload()
    {
        $config['upload_path'] = './upload/Pengumuman/';
        $config['allowed_types'] = '*';
        //$config['max_size']     = 5242880000000000000;
        //print_r($config);
        $this->load->library('upload', $config);
        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
        $this->upload->initialize($config);
        
    }

    public function initFtp()
    {
        $this->load->library('ftp');
        $config['hostname'] = '192.168.78.128';
        $config['username'] = 'root';
        $config['password'] = '123160175';
        $config['debug']    = TRUE;
        $this->ftp->connect($config);
    }

    public function testGetData()
    {
        $data = $this->model_Pengumuman->selectAllData();
        $this->initFtp();
        foreach ($data as $temp) {
            $this->ftp->download('/mnt/Admin/'.$temp['berkas'],'C:/xampp/htdocs/pmbstikes/pmbstikes/upload/Pengumuman/'.$temp['berkas'],'auto');
        }
        $this->load->view("Pengumuman/view_pengumuman",array(
            'data' => $data
        ));
        $this->ftp->close();
    }

    public function mahasiswa()
    {
        $data = $this->model_Pengumuman->selectAllData();
        $this->initFtp();
        foreach ($data as $temp) {
            $this->ftp->download('/mnt/Admin/'.$temp['berkas'],'C:/xampp/htdocs/pmbstikes/pmbstikes/upload/Pengumuman/'.$temp['berkas'],'auto');
        }
        $this->load->view("Pengumuman/view_pengumuman_mahasiswa",array(
            'data' => $data
        ));
        $this->ftp->close();
    }

    public function delete($id)
    {
        $data = $this->model_Pengumuman->cek_delete('list_pengumuman', array('id' => $id));
        $berkasjudul = $data->result_array()[0]['berkas'];
        $this->initFtp();
        $res = $this->ftp->delete_file('/mnt/Admin/'.$berkasjudul);
        if($res)
        {
            $res = $this->model_Pengumuman->deleteData('list_pengumuman', array('id' => $id));
            redirect(base_url('index.php'));
        }
    }

    public function testUpData()
    {
        $this->initUpload();
        
        $dt['judul'] = $this->input->post('judul');
        $dt['admin'] = $this->input->post('admin');
        $dt['berkas'] = $this->input->post('berkas');
        $berkasjudul = $_FILES["berkas"]["name"];
        
        //echo $_FILES["song"]["type"]."<== ini typenya <br>";
        if (!$this->upload->do_upload('berkas')) {
            echo $this->upload->display_errors();
            var_dump($_FILES);
            print_r($dt);
        }else{
            // echo 'success <br>';
            // var_dump($_FILES);
            $berkasjudul = str_replace(" ", "_", $berkasjudul);
            $this->initFtp();
            $goUpload = $this->ftp->upload('C:/xampp/htdocs/pmbstikes/pmbstikes/upload/Pengumuman/'.$berkasjudul,'/mnt/Admin/'.$berkasjudul,'auto');
            if ($goUpload) {
                $list_data = array(
                    'judul' => $dt['judul'],
                    'admin' => $dt['admin'],
                    'berkas' => $berkasjudul
                );
                //var_dump($list_data);
                
                if($this->model_Pengumuman->insertData('list_pengumuman',$list_data) > 0) {
                    $data_view = $this->model_Pengumuman->selectAllData();
                    $this->load->view("Pengumuman/view_pengumuman",array(
                        'data' => $data_view
                    ));
                }else{
                    echo 'gagal insert';
                }
            }else{
                echo 'gagal upload ftp';
            }
            $this->ftp->close();
            //unlink('C:/xampp/htdocs/pmbstikes/pmbstikes/upload/Pengumuman/'.$berkasjudul);
        }
    }
}

?> 
    