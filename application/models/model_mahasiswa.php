<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Model_Mahasiswa extends CI_Model {
	private $_table = "calonmahasiswa";

	public $id;
	public $tanggal;
	public $pmbid;
	public $jalur;
	public $gelombang;
	public $tahap;
	public $email;
	public $pilihanprodi;
	public $namalengkap;
	public $foto = "default.jpg";
	public $tempatlahir;
	public $tanggallahir;
	public $jeniskelamin;
	public $tinggi;
	public $berat;
	public $agama;
	public $kewarganegaraan;
	public $jalan;
	public $provinsi;
	public $kabupaten;
	public $kodepos;
	public $notelpon;
	public $namaibukandung;
	public $asalsekolah;
	public $jalansekolah;
	public $provinsisekolah;
	public $kabupatensekolah;
	public $tahunlulus;
	public $jurusan;
	public $namawali;
	public $jalanwali;
	public $provinsiwali;
	public $kabupatenwali;
	public $notelponwali;
	public $pekerjaanwali;
	public $sumbangan;
	public $ujikes;
	public $tpa;
	public $wawancara;
	public $pewawancara;
	public $hasil;
	public $kk;
	public $ijazah;
	public $skck;
	public $pernyataan;

	public function rules()
	{
		return [
			['field' => 'tanggal',
			'label' => 'Tanggal',
			'rules' => 'required'],

			['field' => 'pmbid',
			'label' => 'PMB-ID',
			'rules' => 'required'],

			['field' => 'jalur',
			'label' => 'Jalur',
			'rules' => 'required'],

			['field' => 'gelombang',
			'label' => 'Gelombang',
			'rules' => 'required'],

			['field' => 'tahap',
			'label' => 'Tahap',
			'rules' => 'required'],

			['field' => 'pilihanprodi',
			'label' => 'Pilihan Prodi',
			'rules' => 'required'],

			['field' => 'sumbangan',
			'label' => 'Sumbangan',
			'rules' => 'required|numeric'],

			['field' => 'email',
			'label' => 'Email',
			'rules' => 'valid_email'],

			['field' => 'namalengkap',
			'label' => 'Nama Lengkap',
			'rules' => 'required'],

			['field' => 'tempatlahir',
			'label' => 'Tempat Lahir',
			'rules' => 'required'],

			['field' => 'tanggallahir',
			'label' => 'Tanggal Lahir',
			'rules' => 'required'],

			['field' => 'jeniskelamin',
			'label' => 'Jenes Kelamin',
			'rules' => 'required'],

			['field' => 'agama',
			'label' => 'Agama',
			'rules' => 'required'],

			['field' => 'jalan',
			'label' => 'Alamat',
			'rules' => 'required'],			

			['field' => 'kodepos',
			'label' => 'Kode Pos',
			'rules' => 'numeric'],

			['field' => 'notelpon',
			'label' => 'No. Telpon',
			'rules' => 'required|numeric']
		];
	}

	public function selectAllData($value='')
    {
        $data = $this->db->get($this->_table);
        return $data->result_array();
    }
    
    public function insertData($tableName, $data)
    {
        $resp = $this->db->insert($tableName,$data);
        return $resp;
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

	public function save()
	{
		$post = $this->input->post();
		$this->tanggal = $post["tanggal"];
		$this->pmbid = $post["pmbid"];
		$this->jalur = $post["jalur"];
		$this->gelombang = $post["gelombang"];
		$this->tahap = $post["tahap"];
		$this->tahunmasuk = $post["tahunmasuk"];
		$this->email = $post["email"];
		$this->pilihanprodi = $post["pilihanprodi"];
		$this->namalengkap = $post["namalengkap"];
		$this->foto = $this->_uploadImage();
		$this->tempatlahir = $post["tempatlahir"];
		$this->tanggallahir = $post["tanggallahir"];
		$this->jeniskelamin = $post["jeniskelamin"];
		$this->tinggi = $post["tinggi"];
		$this->berat = $post["berat"];
		$this->agama = $post["agama"];
		$this->kewarganegaraan = $post["kewarganegaraan"];
		$this->jalan = $post["jalan"];
		$this->provinsi = $post["provinsi"];
		$this->kabupaten = $post["kabupaten"];
		$this->kodepos = $post["kodepos"];
		$this->notelpon = $post["notelpon"];
		$this->namaibukandung = $post["namaibukandung"];
		$this->asalsekolah = $post["asalsekolah"];
		$this->jalansekolah = $post["jalansekolah"];
		$this->provinsisekolah = $post["provinsisekolah"];
		$this->kabupatensekolah = $post["kabupatensekolah"];
		$this->tahunlulus = $post["tahunlulus"];
		$this->jurusan = $post["jurusan"];
		$this->namawali = $post["namawali"];
		$this->jalanwali = $post["jalanwali"];
		$this->provinsiwali = $post["provinsiwali"];
		$this->kabupatenwali = $post["kabupatenwali"];
		$this->notelponwali = $post["notelponwali"];
		$this->pekerjaanwali = $post["pekerjaanwali"];
		$this->sumbangan = $post["sumbangan"];
		$this->ujikes = $post["ujikes"];
		$this->tpa = $post["tpa"];
		$this->wawancara = $post["wawancara"];
		$this->pewawancara = $post["pewawancara"];
		$this->hasil = $post["hasil"];
		$this->kk = $this-> initUpload();
        $this->ijazah = $this-> initUpload2();
        $this->skck = $this-> initUpload3();
        $this->pernyataan = $this-> initUpload4();
        $this->db->insert($this->_table, $this);
    }

	public function update()
	{
		$post = $this->input->post();
		$this->id = $post["id"];
		$this->tanggal = $post["tanggal"];
		$this->pmbid = $post["pmbid"];
		$this->jalur = $post["jalur"];
		$this->gelombang = $post["gelombang"];
		$this->tahap = $post["tahap"];
		$this->tahunmasuk = $post["tahunmasuk"];
		$this->email = $post["email"];
		$this->pilihanprodi = $post["pilihanprodi"];
		$this->namalengkap = $post["namalengkap"];

		if (!empty($_FILES["foto"]["name"])) {
		    $this->foto = $this->_uploadImage();
		}
		else {
		    $this->foto = $post["old_image"];
		}

		$this->tempatlahir = $post["tempatlahir"];
		$this->tanggallahir = $post["tanggallahir"];
		$this->jeniskelamin = $post["jeniskelamin"];
		$this->tinggi = $post["tinggi"];
		$this->berat = $post["berat"];
		$this->agama = $post["agama"];
		$this->kewarganegaraan = $post["kewarganegaraan"];
		$this->jalan = $post["jalan"];
		$this->provinsi = $post["provinsi"];
		$this->kabupaten = $post["kabupaten"];
		$this->kodepos = $post["kodepos"];
		$this->notelpon = $post["notelpon"];
		$this->namaibukandung = $post["namaibukandung"];
		$this->asalsekolah = $post["asalsekolah"];
		$this->jalansekolah = $post["jalansekolah"];
		$this->provinsisekolah = $post["provinsisekolah"];
		$this->kabupatensekolah = $post["kabupatensekolah"];
		$this->tahunlulus = $post["tahunlulus"];
		$this->jurusan = $post["jurusan"];
		$this->namawali = $post["namawali"];
		$this->jalanwali = $post["jalanwali"];
		$this->provinsiwali = $post["provinsiwali"];
		$this->kabupatenwali = $post["kabupatenwali"];
		$this->notelponwali = $post["notelponwali"];
		$this->pekerjaanwali = $post["pekerjaanwali"];
		$this->sumbangan = $post["sumbangan"];
		$this->ujikes = $post["ujikes"];
		$this->tpa = $post["tpa"];
		$this->wawancara = $post["wawancara"];
		$this->pewawancara = $post["pewawancara"];
		$this->hasil = $post["hasil"];
		$this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function delete($id)
	{
		$this->_deleteImage($id);
    	return $this->db->delete($this->_table, array("id" => $id));
    }

	private function _uploadImage()
    {
    	$config['upload_path'] = './upload/mahasiswa';
    	$config['allowed_types'] = 'jpg|png';
    	$config['file_name'] = $this->namalengkap;
    	$config['override'] = true;
    	$config['max_size'] = 1024;
    	// $config['max_width'] = 1024;
    	// $config['max_height'] = 768;

    	$this->load->library('upload', $config);

    	if($this->upload->do_upload('foto')) {
    		return $this->upload->data("file_name");
    	}

    	return "default.jpg";
    }

        public function initUpload()
    {
        $config['upload_path'] = './upload/kk/';
        $config['allowed_types'] = '*';
        $config['file_name'] = $this->namalengkap;
        //$config['max_size']     = 5242880000000000000;
        //print_r($config);
        $this->load->library('upload', $config);
        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
        $this->upload->initialize($config);
        $dt['kk'] = $this->input->post('kk');
        $berkaskk = $_FILES["kk"]["name"];

        if($this->upload->do_upload('kk')) {
    		return $this->upload->data("file_name");
    	}

    	// if (!$this->upload->do_upload('kk')) {
     //        echo $this->upload->display_errors();
     //        var_dump($_FILES);
     //        print_r($dt);
     //    }else{
     //        // echo 'success <br>';
     //        // var_dump($_FILES);
     //        $berkaskk = str_replace(" ", "_", $berkaskk);
     //        $this->initFtp();
     //        $goUpload = $this->ftp->upload('C:/xampp/htdocs/pmbstikes/pmbstikes/upload/kk/'.$berkaskk,'/mnt/Admin/'.$berkaskk,'auto');
     //        $this->ftp->close();
     //    }


    }

    public function initUpload2()
    {
        $config['upload_path'] = './upload/ijazah/';
        $config['allowed_types'] = '*';
        $config['file_name'] = $this->namalengkap;
        //$config['max_size']     = 5242880000000000000;
        //print_r($config);
        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        $dt['ijazah'] = $this->input->post('ijazah');
        $berkasijazah = $_FILES["ijazah"]["name"];

        if($this->upload->do_upload('ijazah')) {
    		return $this->upload->data("file_name");
    	}
    	// if (!$this->upload->do_upload('ijazah')) {
     //        echo $this->upload->display_errors();
     //        var_dump($_FILES);
     //        print_r($dt);
     //    }else{
     //        // echo 'success <br>';
     //        // var_dump($_FILES);
     //        $berkasijazah = str_replace(" ", "_", $berkasijazah);
     //        $this->initFtp();
     //        $goUpload = $this->ftp->upload('C:/xampp/htdocs/pmbstikes/pmbstikes/upload/ijazah/'.$berkasijazah,'/mnt/Admin/'.$berkasijazah,'auto');
     //        $this->ftp->close();
     //    }

    }

    public function initUpload3()
    {
        $config['upload_path'] = './upload/skck/';
        $config['allowed_types'] = '*';
        $config['file_name'] = $this->namalengkap;
        //$config['max_size']     = 5242880000000000000;
        //print_r($config);
        $this->load->library('upload', $config);

        $this->upload->initialize($config);
        $dt['skck'] = $this->input->post('skck');
        $berkasskck = $_FILES["skck"]["name"];

        if($this->upload->do_upload('skck')) {
    		return $this->upload->data("file_name");
    	}
    	// if (!$this->upload->do_upload('skck')) {
     //        echo $this->upload->display_errors();
     //        var_dump($_FILES);
     //        print_r($dt);
     //    }else{
     //        // echo 'success <br>';
     //        // var_dump($_FILES);
     //        $berkasskck = str_replace(" ", "_", $berkasskck);
     //        $this->initFtp();
     //        $goUpload = $this->ftp->upload('C:/xampp/htdocs/pmbstikes/pmbstikes/upload/skck/'.$berkasskck,'/mnt/Admin/'.$berkasskck,'auto');
     //        $this->ftp->close();
     //    }
        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class
    }

    public function initUpload4()
    {
        $config['upload_path'] = './upload/pernyataan/';
        $config['allowed_types'] = '*';
        $config['file_name'] = $this->namalengkap;
        //$config['max_size']     = 5242880000000000000;
        //print_r($config);
        $this->load->library('upload', $config);
        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
        $this->upload->initialize($config);
        $dt['pernyataan'] = $this->input->post('pernyataan');
        $berkaspernyataan = $_FILES["pernyataan"]["name"];

        if($this->upload->do_upload('pernyataan')) {
    		return $this->upload->data("file_name");
    	}

    	// if (!$this->upload->do_upload('pernyataan')) {
     //        echo $this->upload->display_errors();
     //        var_dump($_FILES);
     //        print_r($dt);
     //    }else{
     //        // echo 'success <br>';
     //        // var_dump($_FILES);
     //        $berkaspernyataan = str_replace(" ", "_", $berkaspernyataan);
     //        $this->initFtp();
     //        $goUpload = $this->ftp->upload('C:/xampp/htdocs/pmbstikes/pmbstikes/upload/pernyataan/'.$berkaspernyataan,'/mnt/Admin/'.$berkaspernyataan,'auto');
     //        $this->ftp->close();
     //    }
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

    private function _deleteImage($id)
    {
    	$mahasiswa = $this->getById($id);
    	if($mahasiswa->foto != "default.jpg") {
    		$filename = explode(".", $mahasiswa->foto)[0];
    		return array_map('unlink', glob(FCPATH."upload/mahasiswa/$filename.*"));
    	}
    }
    
    public function graph()
    {
        $this->db->select('pilihanprodi, count(*) as jumlah');
        $this->db->from($this->_table);
        $this->db->group_by('pilihanprodi'); 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
}