<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas extends CI_Controller {

	public function __construct(){
        parent::__construct();
    
        if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }

        $this->load->model('Model_berkas');
    }

    public function index(){
        //$this->load->view('view_home');
        $this->testGetData();
    }

    public function initUpload1()
    {
        $config['upload_path'] = './upload/kk/';
        $config['allowed_types'] = '*';
        //$config['max_size']     = 5242880000000000000;
        //print_r($config);
        $this->load->library('upload', $config);
        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
        $this->upload->initialize($config);
    }

    public function initUpload2()
    {
        $config['upload_path'] = './upload/ijazah/';
        $config['allowed_types'] = '*';
        //$config['max_size']     = 5242880000000000000;
        //print_r($config);
        $this->load->library('upload', $config);
        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
        $this->upload->initialize($config);
    }

    public function initUpload3()
    {
        $config['upload_path'] = './upload/skck/';
        $config['allowed_types'] = '*';
        //$config['max_size']     = 5242880000000000000;
        //print_r($config);
        $this->load->library('upload', $config);
        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
        $this->upload->initialize($config);
    }

    public function initUpload4()
    {
        $config['upload_path'] = './upload/pernyataan/';
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
        $data = $this->Model_berkas->selectAllData();
        $this->initFtp();
        foreach ($data as $temp) {
            $this->ftp->download('/mnt/Admin/'.$temp['kk'],'C:/xampp/htdocs/pmbstikes/pmbstikes/upload/kk/'.$temp['kk'],'auto');
            $this->ftp->download('/mnt/Admin/'.$temp['ijazah'],'C:/xampp/htdocs/pmbstikes/pmbstikes/upload/ijazah/'.$temp['ijazah'],'auto');
            $this->ftp->download('/mnt/Admin/'.$temp['skck'],'C:/xampp/htdocs/pmbstikes/pmbstikes/upload/skck/'.$temp['skck'],'auto');
            $this->ftp->download('/mnt/Admin/'.$temp['pernyataan'],'C:/xampp/htdocs/pmbstikes/pmbstikes/upload/pernyataan/'.$temp['pernyataan'],'auto');
        }
        $this->load->view("Berkas/view_berkas",array(
            'data' => $data
        ));
        $this->ftp->close();
    }


     public function testUpData()
    {
        $this->initUpload1();
        $this->initUpload2();
        $this->initUpload3();
        $this->initUpload4();
        $dt['pmbid'] = $this->input->post('pmbid');
        $dt['namalengkap'] = $this->input->post('namalengkap');
        $dt['pilihanprodi'] = $this->input->post('pilihanprodi');
        $dt['jalur'] = $this->input->post('jalur');
        $dt['kk'] = $this->input->post('kk');
        $berkaskk = $_FILES["kk"]["name"];
        $dt['ijazah'] = $this->input->post('ijazah');
        $berkasijazah = $_FILES["ijazah"]["name"];
        $dt['skck'] = $this->input->post('skck');
        $berkasskck = $_FILES["skck"]["name"];
        $dt['pernyataan'] = $this->input->post('pernyataan');
        $berkaspernyataan = $_FILES["pernyataan"]["name"];
        
        //echo $_FILES["song"]["type"]."<== ini typenya <br>";
        if (!$this->upload->do_upload('kk') && !$this->upload->do_upload('ijazah') && !$this->upload->do_upload('skck') && !$this->upload->do_upload('pernyataan')) {
            echo $this->upload->display_errors();
            var_dump($_FILES);
            print_r($dt);
        }else{
            // echo 'success <br>';
            // var_dump($_FILES);
            $berkaskk = str_replace(" ", "_", $berkaskk);
            $berkasijazah = str_replace(" ", "_", $berkasijazah);
            $berkasskck = str_replace(" ", "_", $berkasskck);
            $berkaspernyataan = str_replace(" ", "_", $berkaspernyataan);
            $this->initFtp();
            $goUpload1 = $this->ftp->upload('C:/xampp/htdocs/pmbstikes/pmbstikes/upload/kk'.$berkaskk,'/mnt/Admin/'.$berkaskk,'auto');
            $goUpload2 = $this->ftp->upload('C:/xampp/htdocs/pmbstikes/pmbstikes/upload/ijazah/'.$berkasijazah,'/mnt/Admin/'.$berkasijazah,'auto');
            $goUpload3 = $this->ftp->upload('C:/xampp/htdocs/pmbstikes/pmbstikes/upload/skck/'.$berkasskck,'/mnt/Admin/'.$berkasskck,'auto');
            $goUpload4 = $this->ftp->upload('C:/xampp/htdocs/pmbstikes/pmbstikes/upload/pernyataan/'.$berkaspernyataan,'/mnt/Admin/'.$berkaspernyataan,'auto');
            if ($goUpload1 && $goUpload2 && $goUpload3 && $goUpload4) {
                $list_data = array(
                    'pmbid' => $dt['pmbid'],
                    'namalengkap' => $dt['namalengkap'],
                    'pilihanprodi' => $dt['pilihanprodi'],
                    'jalur' => $dt['jalur'],
                    'kk' => $berkaskk,
                    'ijazah' => $berkasijazah,
                    'skck' => $berkasskck,
                    'pernyataan' => $berkaspernyataan
                );
                //var_dump($list_data);
                
                if($this->Model_berkas->insertData('berkas',$list_data) > 0) {
                    $data_view = $this->Model_berkas->selectAllData();
                    $this->load->view("Berkas/view_berkas",array(
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