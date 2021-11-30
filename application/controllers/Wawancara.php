<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Wawancara extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    
        $this->load->model('model_wawancara');
        $this->load->model('Model_Prodi');
        $this->load->model('Model_Jalur');
        $this->load->library('form_validation');
    }

    public function list()
    {
        $data["wawancara"] = $this->model_wawancara->getAll();
        $this->load->view('wawancara/list.php', $data);
    }

    public function inputWawancara()
    {
        $wawancara = $this->model_wawancara;
        $validation = $this->form_validation;
        $validation->set_rules($wawancara->rules());

        $data['prodi'] = $this->Model_Prodi->get();
        $data['jalur'] = $this->Model_Jalur->get();
        $data['baptis'] = ['Sudah', 'Belum', 'Tidak'];
        $data['agama'] = ['Kristen', 'Katolik', 'Islam', 'Hindu', 'Budha', 'Lainnya'];

        if($validation->run()) {
            $wawancara->save();
            $this->session->set_flashdata('success', 'Berhasil Disimpan!');
        }

        $this->load->view("wawancara/input_wawancara.php", $data);
    }

    public function editWawancara($id = null)
    {
        if(!isset($id)) redirect('wawancara');

        $wawancara = $this->model_wawancara;
        $validation = $this->form_validation;
        $validation->set_rules($wawancara->rules());

        $data['prodi'] = $this->Model_Prodi->get();
        $data['jalur'] = $this->Model_Jalur->get();
        $data['baptis'] = ['Sudah', 'Belum', 'Tidak'];
        $data['pilihanprodi'] = ['Sarjana Keperawatan', 'Diploma 3 Keperawatan', 'Pendidikan Profesi Ners'];
        $data['agama'] = ['Kristen', 'Katolik', 'Islam', 'Hindu', 'Budha', 'Lainnya'];

        if ($validation->run()) {
            $wawancara->update();
            $this->session->set_flashdata('success', 'Berhasil Disimpan!');
        }

        $data["wawancara"] = $wawancara->getById($id);
        if (!$data["wawancara"]) show_404();

        $this->load->view("wawancara/edit_wawancara", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if($this->model_wawancara->delete($id)) {
            redirect(site_url('wawancara/list'));
        }
    }

    public function detail($id = null)
    {
        $data['wawancara'] = $this->model_wawancara->getById($id);
        if (!$data["wawancara"]) show_404();
        
        $this->load->view('wawancara/detail', $data);
    }
}