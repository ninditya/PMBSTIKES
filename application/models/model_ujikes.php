<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Model_Ujikes extends CI_Model {
	private $_table = "ujikes";

	public $id;
	public $pmbid;
	public $namalengkap;
	public $jeniskelamin;
	public $umur;
	public $tanggaltest;
	public $sakitlama;
	public $ketsakitlama;
	public $batuklama;
	public $ketbatuklama;
	public $sakitkuning;
	public $ketsakitkuning;
	public $kecelakaan;
	public $ketkecelakaan;
	public $masukrs;
	public $ketmasukrs;
	public $tinggi;
	public $kettinggi;
	public $berat;
	public $ketberat;
	public $tekanandarah;
	public $kettekanandarah;
	public $nadi;
	public $ketnadi;
	public $kulit;
	public $ketkulit;
	public $fisikmata;
	public $ketfisikmata;
	public $visus;
	public $ketvisus;
	public $butawarna;
	public $ketbutawarna;
	public $telingakanan;
	public $kettelingakanan;
	public $telingakiri;
	public $kettelingakiri;
	public $hidung;
	public $kethidung;
	public $lidah;
	public $ketlidah;
	public $pharynx;
	public $ketpharynx;
	public $tonsil;
	public $kettonsil;
	public $gigi;
	public $ketgigi;
	public $thyroid;
	public $ketthyroid;
	public $jantung;
	public $ketjantung;
	public $paruparu;
	public $ketparuparu;
	public $abdoman;
	public $ketabdoman;
	public $pupil;
	public $ketpupil;
	public $patella;
	public $ketpatella;
	public $achiles;
	public $ketachiles;
	public $darahlengkap;
	public $ketdarahlengkap;
	public $hbsag;
	public $kethbsag;
	public $tato;
	public $tindik;
	public $thorakfoto;
	public $kesimpulan;
	public $ketkesimpulan;
	public $rekomendasi;

	public function rules()
	{
		return [
			['field' => 'pmbid',
			'label' => 'Nomor Pendaftaran',
			'rules' => 'required'],

			['field' => 'namalengkap',
			'label' => 'Nama Lengkap',
			'rules' => 'required'],

			['field' => 'jeniskelamin',
			'label' => 'Jenis Kelamin',
			'rules' => 'required'],

			['field' => 'umur',
			'label' => 'Umur',
			'rules' => 'required|numeric']
		];
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
		$this->pmbid = $post["pmbid"];
		$this->namalengkap = $post["namalengkap"];
		$this->jeniskelamin = $post["jeniskelamin"];
		$this->umur = $post["umur"];
		$this->tanggaltest = $post["tanggaltest"];
		$this->sakitlama = $post["sakitlama"];
		$this->ketsakitlama = $post["ketsakitlama"];
		$this->batuklama = $post["batuklama"];
		$this->ketbatuklama = $post["ketbatuklama"];
		$this->sakitkuning = $post["sakitkuning"];
		$this->ketsakitkuning = $post["ketsakitkuning"];
		$this->kecelakaan = $post["kecelakaan"];
		$this->ketkecelakaan = $post["ketkecelakaan"];
		$this->masukrs = $post["masukrs"];
		$this->ketmasukrs = $post["ketmasukrs"];
		$this->tinggi = $post["tinggi"];
		$this->kettinggi = $post["kettinggi"];
		$this->berat = $post["berat"];
		$this->ketberat = $post["ketberat"];
		$this->tekanandarah = $post["tekanandarah"];
		$this->kettekanandarah = $post["kettekanandarah"];
		$this->nadi = $post["nadi"];
		$this->ketnadi = $post["ketnadi"];
		$this->kulit = $post["kulit"];
		$this->ketkulit = $post["ketkulit"];
		$this->fisikmata = $post["fisikmata"];
		$this->ketfisikmata = $post["ketfisikmata"];
		$this->visus = $post["visus"];
		$this->ketvisus = $post["ketvisus"];
		$this->butawarna = $post["butawarna"];
		$this->ketbutawarna = $post["ketbutawarna"];
		$this->telingakanan = $post["telingakanan"];
		$this->kettelingakanan = $post["kettelingakanan"];
		$this->telingakiri = $post["telingakiri"];
		$this->kettelingakiri = $post["kettelingakiri"];
		$this->hidung = $post["hidung"];
		$this->kethidung = $post["kethidung"];
		$this->lidah = $post["lidah"];
		$this->ketlidah = $post["ketlidah"];
		$this->pharynx = $post["pharynx"];
		$this->ketpharynx = $post["ketpharynx"];
		$this->tonsil = $post["tonsil"];
		$this->kettonsil = $post["kettonsil"];
		$this->gigi = $post["gigi"];
		$this->ketgigi = $post["ketgigi"];
		$this->thyroid = $post["thyroid"];
		$this->ketthyroid = $post["ketthyroid"];
		$this->jantung = $post["jantung"];
		$this->ketjantung = $post["ketjantung"];
		$this->paruparu = $post["paruparu"];
		$this->ketparuparu = $post["ketparuparu"];
		$this->abdoman = $post["abdoman"];
		$this->ketabdoman = $post["ketabdoman"];
		$this->pupil = $post["pupil"];
		$this->ketpupil = $post["ketpupil"];
		$this->patella = $post["patella"];
		$this->ketpatella = $post["ketpatella"];
		$this->achiles = $post["achiles"];
		$this->ketachiles = $post["ketachiles"];
		$this->darahlengkap = $post["darahlengkap"];
		$this->ketdarahlengkap = $post["ketdarahlengkap"];
		$this->hbsag = $post["hbsag"];
		$this->kethbsag = $post["kethbsag"];
		$this->tato = $post["tato"];
		$this->tindik = $post["tindik"];
		$this->thorakfoto = $post["thorakfoto"];
		$this->kesimpulan = $post["kesimpulan"];
		$this->ketkesimpulan = $post["ketkesimpulan"];
		$this->rekomendasi = $post["rekomendasi"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id = $post["id"];
		$this->pmbid = $post["pmbid"];
		$this->namalengkap = $post["namalengkap"];
		$this->jeniskelamin = $post["jeniskelamin"];
		$this->umur = $post["umur"];
		$this->tanggaltest = $post["tanggaltest"];
		$this->sakitlama = $post["sakitlama"];
		$this->ketsakitlama = $post["ketsakitlama"];
		$this->batuklama = $post["batuklama"];
		$this->ketbatuklama = $post["ketbatuklama"];
		$this->sakitkuning = $post["sakitkuning"];
		$this->ketsakitkuning = $post["ketsakitkuning"];
		$this->kecelakaan = $post["kecelakaan"];
		$this->ketkecelakaan = $post["ketkecelakaan"];
		$this->masukrs = $post["masukrs"];
		$this->ketmasukrs = $post["ketmasukrs"];
		$this->tinggi = $post["tinggi"];
		$this->kettinggi = $post["kettinggi"];
		$this->berat = $post["berat"];
		$this->ketberat = $post["ketberat"];
		$this->tekanandarah = $post["tekanandarah"];
		$this->kettekanandarah = $post["kettekanandarah"];
		$this->nadi = $post["nadi"];
		$this->ketnadi = $post["ketnadi"];
		$this->kulit = $post["kulit"];
		$this->ketkulit = $post["ketkulit"];
		$this->fisikmata = $post["fisikmata"];
		$this->ketfisikmata = $post["ketfisikmata"];
		$this->visus = $post["visus"];
		$this->ketvisus = $post["ketvisus"];
		$this->butawarna = $post["butawarna"];
		$this->ketbutawarna = $post["ketbutawarna"];
		$this->telingakanan = $post["telingakanan"];
		$this->kettelingakanan = $post["kettelingakanan"];
		$this->telingakiri = $post["telingakiri"];
		$this->kettelingakiri = $post["kettelingakiri"];
		$this->hidung = $post["hidung"];
		$this->kethidung = $post["kethidung"];
		$this->lidah = $post["lidah"];
		$this->ketlidah = $post["ketlidah"];
		$this->pharynx = $post["pharynx"];
		$this->ketpharynx = $post["ketpharynx"];
		$this->tonsil = $post["tonsil"];
		$this->kettonsil = $post["kettonsil"];
		$this->gigi = $post["gigi"];
		$this->ketgigi = $post["ketgigi"];
		$this->thyroid = $post["thyroid"];
		$this->ketthyroid = $post["ketthyroid"];
		$this->jantung = $post["jantung"];
		$this->ketjantung = $post["ketjantung"];
		$this->paruparu = $post["paruparu"];
		$this->ketparuparu = $post["ketparuparu"];
		$this->abdoman = $post["abdoman"];
		$this->ketabdoman = $post["ketabdoman"];
		$this->pupil = $post["pupil"];
		$this->ketpupil = $post["ketpupil"];
		$this->patella = $post["patella"];
		$this->ketpatella = $post["ketpatella"];
		$this->achiles = $post["achiles"];
		$this->ketachiles = $post["ketachiles"];
		$this->darahlengkap = $post["darahlengkap"];
		$this->ketdarahlengkap = $post["ketdarahlengkap"];
		$this->hbsag = $post["hbsag"];
		$this->kethbsag = $post["kethbsag"];
		$this->tato = $post["tato"];
		$this->tindik = $post["tindik"];
		$this->thorakfoto = $post["thorakfoto"];
		$this->kesimpulan = $post["kesimpulan"];
		$this->ketkesimpulan = $post["ketkesimpulan"];
		$this->rekomendasi = $post["rekomendasi"];
		$this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function delete($id)
	{
    	return $this->db->delete($this->_table, array("id" => $id));
    }
}