<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Model_Wawancara extends CI_Model {
	private $_table = "wawancara";

	public $id;
	public $pmbid;
	public $pilihanprodi;
	public $namalengkap;
	public $agama;
	public $jalan;
	public $notelpon;
	public $asalsekolah;
	public $tahunlulus;
	public $jurusan;
	public $berhentisekolah;
	public $alasanbrhtsklh;
	public $dimanadaftar;
	public $alternatif;
	public $prestasi;
	public $organisasi;
	public $ayah;
	public $ibu;
	public $alamatayah;
	public $alamatibu;
	public $notelponayah;
	public $notelponibu;
	public $kerjaayah;
	public $kerjaibu;
	public $agamaayah;
	public $agamaibu;
	public $baptis;
	public $namawali;
	public $alamatwali;
	public $kerjawali;
	public $carajalan;
	public $rapipakaian;
	public $tubuh;
	public $sopan;
	public $bicara;
	public $lain;
	public $alasanstikes;
	public $pendapatstikes;
	public $pendapatperawat;
	public $infostikes;
	public $dukung;
	public $alasandukung;
	public $larang;
	public $alasanlarang;
	public $saudarastikes;
	public $namasaudara;
	public $prodisaudara;
	public $kandungsaudara;
	public $semestersaudara;
	public $hobi;
	public $sanggupaturan;
	public $sanggupbiaya;
	public $alasantdkbiaya;
	public $siapabayar;
	public $penyakit;
	public $tahunsakit;
	public $napza;
	public $kapannapza;
	public $diterima;
	public $alasanterima;
	public $jalur;
	public $anakke;
	public $jmlsaudara;
	public $wargagereja;
	public $baptisayah;
	public $baptisibu;
	public $kapanbhtsklh;
	public $namaayah;
	public $namaibu;

	public function rules()
	{
		return [
			['field' => 'pmbid',
			'label' => 'PMB-ID',
			'rules' => 'required'],

			['field' => 'namalengkap',
			'label' => 'Nama Lengkap',
			'rules' => 'required'],

			['field' => 'jalur',
			'label' => 'Jalur',
			'rules' => 'required'],

			['field' => 'notelpon',
			'label' => 'No. Telpon',
			'rules' => 'numeric']
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
		$this->pilihanprodi = $post["pilihanprodi"];
		$this->jalur = $post["jalur"];
		$this->jalan = $post["jalan"];
		$this->notelpon = $post["notelpon"];
		$this->agama = $post["agama"];
		$this->anakke = $post["anakke"];
		$this->jmlsaudara = $post["jmlsaudara"];
		$this->wargagereja = $post["wargagereja"];
		$this->baptis = $post["baptis"];
		$this->asalsekolah = $post["asalsekolah"];
		$this->tahunlulus = $post["tahunlulus"];
		$this->jurusan = $post["jurusan"];
		$this->berhentisekolah = $post["berhentisekolah"];
		$this->kapanbhtsklh = $post["kapanbhtsklh"];
		$this->alasanbrhtsklh = $post["alasanbrhtsklh"];
		$this->dimanadaftar = $post["dimanadaftar"];
		$this->alternatif = $post["alternatif"];
		$this->prestasi = $post["prestasi"];
		$this->organisasi = $post["organisasi"];
		$this->ayah = $post["ayah"];
		$this->namaayah = $post["namaayah"];
		$this->alamatayah = $post["alamatayah"];
		$this->notelponayah = $post["notelponayah"];
		$this->kerjaayah = $post["kerjaayah"];
		$this->agamaayah = $post["agamaayah"];
		$this->baptisayah = $post["baptisayah"];
		$this->ibu = $post["ibu"];
		$this->namaibu = $post["namaibu"];
		$this->alamatibu = $post["alamatibu"];
		$this->notelponibu = $post["notelponibu"];
		$this->kerjaibu = $post["kerjaibu"];
		$this->agamaibu = $post["agamaibu"];
		$this->baptisibu = $post["baptisibu"];
		$this->namawali = $post["namawali"];
		$this->alamatwali = $post["alamatwali"];
		$this->kerjawali = $post["kerjawali"];
		$this->carajalan = $post["carajalan"];
		$this->rapipakaian = $post["rapipakaian"];
		$this->tubuh = $post["tubuh"];
		$this->sopan = $post["sopan"];
		$this->bicara = $post["bicara"];
		$this->lain = $post["lain"];
		$this->alasanstikes = $post["alasanstikes"];
		$this->pendapatstikes = $post["pendapatstikes"];
		$this->pendapatperawat = $post["pendapatperawat"];
		$this->infostikes = $post["infostikes"];
		$this->dukung = $post["dukung"];
		$this->alasandukung = $post["alasandukung"];
		$this->larang = $post["larang"];
		$this->alasanlarang = $post["alasanlarang"];
		$this->saudarastikes = $post["saudarastikes"];
		$this->namasaudara = $post["namasaudara"];
		$this->prodisaudara = $post["prodisaudara"];
		$this->kandungsaudara = $post["kandungsaudara"];
		$this->semestersaudara = $post["semestersaudara"];
		$this->hobi = $post["hobi"];
		$this->sanggupaturan = $post["sanggupaturan"];
		$this->sanggupbiaya = $post["sanggupbiaya"];
		$this->alasantdkbiaya = $post["alasantdkbiaya"];
		$this->siapabayar = $post["siapabayar"];
		$this->penyakit = $post["penyakit"];
		$this->tahunsakit = $post["tahunsakit"];
		$this->napza = $post["napza"];
		$this->kapannapza = $post["kapannapza"];
		$this->diterima = $post["diterima"];
		$this->alasanterima = $post["alasanterima"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id = $post["id"];
		$this->pmbid = $post["pmbid"];
		$this->namalengkap = $post["namalengkap"];
		$this->pilihanprodi = $post["pilihanprodi"];
		$this->jalur = $post["jalur"];
		$this->jalan = $post["jalan"];
		$this->notelpon = $post["notelpon"];
		$this->agama = $post["agama"];
		$this->anakke = $post["anakke"];
		$this->jmlsaudara = $post["jmlsaudara"];
		$this->wargagereja = $post["wargagereja"];
		$this->baptis = $post["baptis"];
		$this->asalsekolah = $post["asalsekolah"];
		$this->tahunlulus = $post["tahunlulus"];
		$this->jurusan = $post["jurusan"];
		$this->berhentisekolah = $post["berhentisekolah"];
		$this->kapanbhtsklh = $post["kapanbhtsklh"];
		$this->alasanbrhtsklh = $post["alasanbrhtsklh"];
		$this->dimanadaftar = $post["dimanadaftar"];
		$this->alternatif = $post["alternatif"];
		$this->prestasi = $post["prestasi"];
		$this->organisasi = $post["organisasi"];
		$this->ayah = $post["ayah"];
		$this->namaayah = $post["namaayah"];
		$this->alamatayah = $post["alamatayah"];
		$this->notelponayah = $post["notelponayah"];
		$this->kerjaayah = $post["kerjaayah"];
		$this->agamaayah = $post["agamaayah"];
		$this->baptisayah = $post["baptisayah"];
		$this->ibu = $post["ibu"];
		$this->namaibu = $post["namaibu"];
		$this->alamatibu = $post["alamatibu"];
		$this->notelponibu = $post["notelponibu"];
		$this->kerjaibu = $post["kerjaibu"];
		$this->agamaibu = $post["agamaibu"];
		$this->baptisibu = $post["baptisibu"];
		$this->namawali = $post["namawali"];
		$this->alamatwali = $post["alamatwali"];
		$this->kerjawali = $post["kerjawali"];
		$this->carajalan = $post["carajalan"];
		$this->rapipakaian = $post["rapipakaian"];
		$this->tubuh = $post["tubuh"];
		$this->sopan = $post["sopan"];
		$this->bicara = $post["bicara"];
		$this->lain = $post["lain"];
		$this->alasanstikes = $post["alasanstikes"];
		$this->pendapatstikes = $post["pendapatstikes"];
		$this->pendapatperawat = $post["pendapatperawat"];
		$this->infostikes = $post["infostikes"];
		$this->dukung = $post["dukung"];
		$this->alasandukung = $post["alasandukung"];
		$this->larang = $post["larang"];
		$this->alasanlarang = $post["alasanlarang"];
		$this->saudarastikes = $post["saudarastikes"];
		$this->namasaudara = $post["namasaudara"];
		$this->prodisaudara = $post["prodisaudara"];
		$this->kandungsaudara = $post["kandungsaudara"];
		$this->semestersaudara = $post["semestersaudara"];
		$this->hobi = $post["hobi"];
		$this->sanggupaturan = $post["sanggupaturan"];
		$this->sanggupbiaya = $post["sanggupbiaya"];
		$this->alasantdkbiaya = $post["alasantdkbiaya"];
		$this->siapabayar = $post["siapabayar"];
		$this->penyakit = $post["penyakit"];
		$this->tahunsakit = $post["tahunsakit"];
		$this->napza = $post["napza"];
		$this->kapannapza = $post["kapannapza"];
		$this->diterima = $post["diterima"];
		$this->alasanterima = $post["alasanterima"];
		$this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function delete($id)
	{
    	return $this->db->delete($this->_table, array("id" => $id));
    }
}