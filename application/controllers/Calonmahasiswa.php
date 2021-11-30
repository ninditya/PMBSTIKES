<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Calonmahasiswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    
        $this->load->model('ProvinsiModel');
        $this->load->model('model_mahasiswa');
        $this->load->model('model_wawancara');
        $this->load->model('model_ujikes');
        $this->load->model('Model_Tahunlulus');
        $this->load->model('Model_Prodi');
        $this->load->model('Model_Pewawancara');
        $this->load->model('Model_Seleksi');
        $this->load->model('Model_Tahunmasuk');
        $this->load->model('Model_Gelombang');
        $this->load->model('Model_Jalur');
        $this->load->model('model_filter','calonmahasiswa');
        $this->load->library('form_validation');
    }

    public function list()
    {
        // $data["mahasiswa"] = $this->model_mahasiswa->getAll();

        $pilihanprodi = $this->calonmahasiswa->get_list_pilihanprodi();

        $opt = array('' => 'Lihat Semua');
        foreach ($pilihanprodi as $pp) {
            $opt[$pp] = $pp;
        }
        $data['form_prodi'] = form_dropdown('',$opt,'','id="pilihanprodi" class="form-control"');

        $tahunmasuk = $this->calonmahasiswa->get_list_tahun();
        $opts = array('' => 'Lihat Semua');
        foreach ($tahunmasuk as $tm) {
            $opts[$tm] = $tm;
        }
        $data['form_tahun'] = form_dropdown('',$opts,'','id="tahun" class="form-control"');

        $jalur = $this->calonmahasiswa->get_list_jalur();
        $optss = array('' => 'Lihat Semua');
        foreach ($jalur as $jl) {
            $optss[$jl] = $jl;
        }
        $data['form_jalur'] = form_dropdown('',$optss,'','id="jalur" class="form-control"');

        $gelombang = $this->calonmahasiswa->get_list_gelombang();
        $optsss = array('' => 'Lihat Semua');
        foreach ($gelombang as $gl) {
            $optsss[$gl] = $gl;
        }
        $data['form_gelombang'] = form_dropdown('',$optsss,'','id="gelombang" class="form-control"');

        $tahap = $this->calonmahasiswa->get_list_tahap();
        $optssss = array('' => 'Lihat Semua');
        foreach ($tahap as $th) {
            $optssss[$th] = $th;
        }
        $data['form_tahap'] = form_dropdown('',$optssss,'','id="tahap" class="form-control"');

        $this->load->view('registrasi/list.php', $data);
    }

    public function ajax_list()
    {
        $list = $this->calonmahasiswa->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $calonmahasiswa) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = '<a href="'.base_url('calonmahasiswa/detail/'.$calonmahasiswa->id).'">'.$calonmahasiswa->namalengkap.'</a>';
            $row[] = '<img src="'.base_url().'upload/mahasiswa/'.$calonmahasiswa->foto.'" class="center" width="64"/>';
            $row[] = $calonmahasiswa->pilihanprodi;
            $row[] = $calonmahasiswa->tahunmasuk;
            $row[] = $calonmahasiswa->jalur;
            $row[] = $calonmahasiswa->gelombang;
            $row[] = $calonmahasiswa->tahap;
            $row[] = '<a href="'.base_url('calonmahasiswa/edit/'.$calonmahasiswa->id).'" class="btn btn-small text-success"><i class="fas fa-edit"></i> Edit </a>
                <a href="'.base_url('laporanpdf/kartupeserta/'.$calonmahasiswa->id).'" target="_blank" class="btn btn-small"><i class="fas fa-print"></i> Cetak </a>';
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->calonmahasiswa->count_all(),
                        "recordsFiltered" => $this->calonmahasiswa->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function inputData()
    {
        $mahasiswa = $this->model_mahasiswa;
        $validation = $this->form_validation;
        $validation->set_rules($mahasiswa->rules());

        $data['provinsi'] = $this->ProvinsiModel->provinsi();
        $data['tahunlulus'] = $this->Model_Tahunlulus->get();
        $data['prodi'] = $this->Model_Prodi->get();
        $data['pewawancara'] = $this->Model_Pewawancara->get();
        $data['seleksi'] = $this->Model_Seleksi->get();
        $data['tahunmasuk'] = $this->Model_Tahunmasuk->get();
        $data['gelombang'] = $this->Model_Gelombang->get();
        $data['jalur'] = $this->Model_Jalur->get();
        $data['agama'] = ['Kristen', 'Katolik', 'Islam', 'Hindu', 'Budha', 'Lainnya'];

        if($validation->run()) {
            $mahasiswa->save();
            $this->session->set_flashdata('success', 'Berhasil Disimpan!');
        }
        $this->load->view("registrasi/form_input.php", $data);
    }

    public function edit($id = null)
    {
        if(!isset($id)) redirect('calonmahasiswa');

        $mahasiswa = $this->model_mahasiswa;
        $validation = $this->form_validation;
        $validation->set_rules($mahasiswa->rules());

        $data['provinsi'] = $this->ProvinsiModel->provinsi();
        $data['tahunlulus'] = $this->Model_Tahunlulus->get();
        $data['prodi'] = $this->Model_Prodi->get();
        $data['pewawancara'] = $this->Model_Pewawancara->get();
        $data['seleksi'] = $this->Model_Seleksi->get();
        $data['tahunmasuk'] = $this->Model_Tahunmasuk->get();
        $data['gelombang'] = $this->Model_Gelombang->get();
        $data['jalur'] = $this->Model_Jalur->get();
        $data['pilihanprodi'] = ['Sarjana Keperawatan', 'Diploma 3 Keperawatan', 'Pendidikan Profesi Ners'];
        $data['agama'] = ['Kristen', 'Katolik', 'Islam', 'Hindu', 'Budha', 'Lainnya'];

        if ($validation->run()) {
            $mahasiswa->update();
            $this->session->set_flashdata('success', 'Berhasil Disimpan!');
        }

        $data["mahasiswa"] = $mahasiswa->getById($id);
        if (!$data["mahasiswa"]) show_404();

        $this->load->view("registrasi/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if($this->model_mahasiswa->delete($id)) {
            redirect(site_url('calonmahasiswa/list'));
        }
    }

    public function detail($id = null)
    {
        $data['mahasiswa'] = $this->model_mahasiswa->getById($id);
        if (!$data["mahasiswa"]) show_404();
        $this->load->view('registrasi/detail', $data);
    }

    public function ambil_data()
    {
        $modul = $this->input->post('modul');
        $id = $this->input->post('id');

        if($modul == "kabupaten") {
            echo $this->ProvinsiModel->kabupaten($id);
        }
    }

    public function namaprovinsi($id)
    {
        $data['mahasiswa'] = $this->ProvinsiModel->namaProv($id);

        $this->load->view('registrasi/detail', $data);
    }

}