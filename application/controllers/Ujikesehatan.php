<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujikesehatan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    
        $this->load->model('model_ujikes');
        $this->load->library('form_validation');
    }

    public function list()
    {
        $data["ujikes"] = $this->model_ujikes->getAll();

        $this->load->view('ujikes/list.php', $data);
    }

    public function inputUjikes()
    {
        $ujikes = $this->model_ujikes;
        $validation = $this->form_validation;
        $validation->set_rules($ujikes->rules());

        $data['kesimpulan'] = ['Baik', 'Cukup', 'Kurang'];

        if($validation->run()) {
            $ujikes->save();
            $this->session->set_flashdata('success', 'Berhasil Disimpan!');
        }

        $this->load->view("ujikes/input_ujikes.php", $data);
    }

    public function editUjikes($id = null)
    {
        if(!isset($id)) redirect('ujikes');

        $ujikes = $this->model_ujikes;
        $validation = $this->form_validation;
        $validation->set_rules($ujikes->rules());

        $data['kesimpulan'] = ['Baik', 'Cukup', 'Kurang'];

        if ($validation->run()) {
            $ujikes->update();
            $this->session->set_flashdata('success', 'Berhasil Disimpan!');
        }

        $data["ujikes"] = $ujikes->getById($id);
        if (!$data["ujikes"]) show_404();

        $this->load->view("ujikes/edit_ujikes", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if($this->model_ujikes->delete($id)) {
            redirect(site_url('ujikesehatan/list'));
        }
    }

    public function detail($id = null)
    {
        $data['ujikes'] = $this->model_ujikes->getById($id);
        if (!$data["ujikes"]) show_404();
        
        $this->load->view('ujikes/detail', $data);
    }
}