<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanpdf extends CI_Controller {

    private $_table = "calonmahasiswa";
    
    function __construct()
    {
        parent::__construct();

        if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }

        $this->load->library('pdf');
        $this->load->model('model_mahasiswa');
    }
    
    function index()
    {
        $pdf = new FPDF('l','mm','legal');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','',10);
        // mencetak string 
        $pdf->Cell(297,6,'REKAPITULASI DATA CALON MAHASISWA BARU',0,1,'L');
        $pdf->Cell(297,6,'STIKES BETHESDA YAKKUM 2018/2019',0,1,'L');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,5,'',0,1);
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(10,5,'PROGRAM STUDI SARJANA KEPERWATAN',0,1);
        $pdf->Cell(6,5,'No.',1,0,'C');
                $pdf->Cell(13,5,'PBID',1,0,'C');
                $pdf->Cell(23,5,'Nama',1,0,'C');
                $pdf->Cell(9,5,'SEX',1,0,'C');
                $pdf->Cell(15,5,'TempatLahir',1,0,'C');
                $pdf->Cell(13,5,'TglLahir',1,0,'C');
                $pdf->Cell(8,5,'Agama',1,0,'C');
                $pdf->Cell(5,5,'TB',1,0,'C');
                $pdf->Cell(5,5,'BB',1,0,'C');
                $pdf->Cell(35,5,'Kota/Kab',1,0,'C');
                $pdf->Cell(15,5,'Provinsi',1,0,'C');
                $pdf->Cell(20,5,'NamaWali',1,0,'C');
                $pdf->Cell(15,5,'Pekerjaan',1,0,'C');
                $pdf->Cell(25,5,'AsalSekolah',1,0,'C');
                $pdf->Cell(35,5,'Kota/KabSekolah',1,0,'C');
                $pdf->Cell(8,5,'Jrsan',1,0,'C');
                $pdf->Cell(18,5,'Sumbangan',1,0,'C');
                $pdf->Cell(8,5,'Ujikes',1,0,'C');
                $pdf->Cell(5,5,'TPA',1,0,'C');
                $pdf->Cell(25,5,'Wawancara',1,0,'C');
                $pdf->Cell(20,5,'Pewawancara',1,0,'C');
                $pdf->Cell(8,5,'Hasil',1,1,'C');
        $pdf->SetFont('Arial','',7);
        $mahasiswa = $this->db->get_where('calonmahasiswa', array('pilihanprodi' => 'Sarjana Keperawatan'))->result();
        $i=1;
        foreach($mahasiswa as $row) {
                $pdf->Cell(6,5, $i,1,0,'C');
                $pdf->Cell(13,5, $row->pmbid,1,0,'C');
                $pdf->Cell(23,5, $row->namalengkap,1,0,'C');
                $pdf->Cell(9,5, $row->jeniskelamin,1,0,'C');
                $pdf->Cell(15,5, $row->tempatlahir,1,0,'C');
                $pdf->Cell(13,5, $row->tanggallahir,1,0,'C');
                $pdf->Cell(8,5, $row->agama,1,0,'C');
                $pdf->Cell(5,5, $row->tinggi,1,0,'C');
                $pdf->Cell(5,5, $row->berat,1,0,'C');
                $pdf->Cell(35,5, $row->kabupaten,1,0,'C');
                $pdf->Cell(15,5, $row->provinsi,1,0,'C');
                $pdf->Cell(20,5, $row->namawali,1,0,'C');
                $pdf->Cell(15,5, $row->pekerjaanwali,1,0,'C');
                $pdf->Cell(25,5, $row->asalsekolah,1,0,'C');
                $pdf->Cell(35,5, $row->kabupatensekolah,1,0,'C');
                $pdf->Cell(8,5, $row->jurusan,1,0,'C');
                $pdf->Cell(18,5, $row->sumbangan,1,0,'C');
                $pdf->Cell(8,5, $row->ujikes,1,0,'C');
                $pdf->Cell(5,5, $row->tpa,1,0,'C');
                $pdf->Cell(25,5, $row->wawancara,1,0,'C');
                $pdf->Cell(20,5, $row->pewawancara,1,0,'C');
                $pdf->Cell(8,5, $row->hasil,1,1,'C');
                $i++; }
                $pdf->Cell(10,5,'',0,1);
        $pdf->Cell(10,5,'PROGRAM STUDI DIPLOMA 3 KEPERWATAN',0,1);
        $pdf->Cell(6,5,'No.',1,0,'C');
                $pdf->Cell(13,5,'PBID',1,0,'C');
                $pdf->Cell(23,5,'Nama',1,0,'C');
                $pdf->Cell(9,5,'SEX',1,0,'C');
                $pdf->Cell(15,5,'TempatLahir',1,0,'C');
                $pdf->Cell(13,5,'TglLahir',1,0,'C');
                $pdf->Cell(8,5,'Agama',1,0,'C');
                $pdf->Cell(5,5,'TB',1,0,'C');
                $pdf->Cell(5,5,'BB',1,0,'C');
                $pdf->Cell(35,5,'Kota/Kab',1,0,'C');
                $pdf->Cell(15,5,'Provinsi',1,0,'C');
                $pdf->Cell(20,5,'NamaWali',1,0,'C');
                $pdf->Cell(15,5,'Pekerjaan',1,0,'C');
                $pdf->Cell(25,5,'AsalSekolah',1,0,'C');
                $pdf->Cell(35,5,'Kota/KabSekolah',1,0,'C');
                $pdf->Cell(8,5,'Jrsan',1,0,'C');
                $pdf->Cell(18,5,'Sumbangan',1,0,'C');
                $pdf->Cell(8,5,'Ujikes',1,0,'C');
                $pdf->Cell(5,5,'TPA',1,0,'C');
                $pdf->Cell(25,5,'Wawancara',1,0,'C');
                $pdf->Cell(20,5,'Pewawancara',1,0,'C');
                $pdf->Cell(8,5,'Hasil',1,1,'C');
        $mahasiswa = $this->db->get_where('calonmahasiswa', array('pilihanprodi' => 'Diploma 3 Keperawatan'))->result();
        $i=1;
        foreach($mahasiswa as $row) {
                $pdf->Cell(6,5, $i,1,0,'C');
                $pdf->Cell(13,5, $row->pmbid,1,0,'C');
                $pdf->Cell(23,5, $row->namalengkap,1,0,'C');
                $pdf->Cell(9,5, $row->jeniskelamin,1,0,'C');
                $pdf->Cell(15,5, $row->tempatlahir,1,0,'C');
                $pdf->Cell(13,5, $row->tanggallahir,1,0,'C');
                $pdf->Cell(8,5, $row->agama,1,0,'C');
                $pdf->Cell(5,5, $row->tinggi,1,0,'C');
                $pdf->Cell(5,5, $row->berat,1,0,'C');
                $pdf->Cell(35,5, $row->kabupaten,1,0,'C');
                $pdf->Cell(15,5, $row->provinsi,1,0,'C');
                $pdf->Cell(20,5, $row->namawali,1,0,'C');
                $pdf->Cell(15,5, $row->pekerjaanwali,1,0,'C');
                $pdf->Cell(25,5, $row->asalsekolah,1,0,'C');
                $pdf->Cell(35,5, $row->kabupatensekolah,1,0,'C');
                $pdf->Cell(8,5, $row->jurusan,1,0,'C');
                $pdf->Cell(18,5, $row->sumbangan,1,0,'C');
                $pdf->Cell(8,5, $row->ujikes,1,0,'C');
                $pdf->Cell(5,5, $row->tpa,1,0,'C');
                $pdf->Cell(25,5, $row->wawancara,1,0,'C');
                $pdf->Cell(20,5, $row->pewawancara,1,0,'C');
                $pdf->Cell(8,5, $row->hasil,1,1,'C');
                $i++; }
                $pdf->Cell(10,5,'',0,1);
        $pdf->Cell(10,5,'PROGRAM STUDI PENDIDIKAN PROFESI NERS',0,1);
        $pdf->Cell(6,5,'No.',1,0,'C');
                $pdf->Cell(13,5,'PBID',1,0,'C');
                $pdf->Cell(23,5,'Nama',1,0,'C');
                $pdf->Cell(9,5,'SEX',1,0,'C');
                $pdf->Cell(15,5,'TempatLahir',1,0,'C');
                $pdf->Cell(13,5,'TglLahir',1,0,'C');
                $pdf->Cell(8,5,'Agama',1,0,'C');
                $pdf->Cell(5,5,'TB',1,0,'C');
                $pdf->Cell(5,5,'BB',1,0,'C');
                $pdf->Cell(35,5,'Kota/Kab',1,0,'C');
                $pdf->Cell(15,5,'Provinsi',1,0,'C');
                $pdf->Cell(20,5,'NamaWali',1,0,'C');
                $pdf->Cell(15,5,'Pekerjaan',1,0,'C');
                $pdf->Cell(25,5,'AsalSekolah',1,0,'C');
                $pdf->Cell(35,5,'Kota/KabSekolah',1,0,'C');
                $pdf->Cell(8,5,'Jrsan',1,0,'C');
                $pdf->Cell(18,5,'Sumbangan',1,0,'C');
                $pdf->Cell(8,5,'Ujikes',1,0,'C');
                $pdf->Cell(5,5,'TPA',1,0,'C');
                $pdf->Cell(25,5,'Wawancara',1,0,'C');
                $pdf->Cell(20,5,'Pewawancara',1,0,'C');
                $pdf->Cell(8,5,'Hasil',1,1,'C');
        $mahasiswa = $this->db->get_where('calonmahasiswa', array('pilihanprodi' => 'Pendidikan Profesi Ners'))->result();
        $i=1;
        foreach($mahasiswa as $row) {
                $pdf->Cell(6,5, $i,1,0,'C');
                $pdf->Cell(13,5, $row->pmbid,1,0,'C');
                $pdf->Cell(23,5, $row->namalengkap,1,0,'C');
                $pdf->Cell(9,5, $row->jeniskelamin,1,0,'C');
                $pdf->Cell(15,5, $row->tempatlahir,1,0,'C');
                $pdf->Cell(13,5, $row->tanggallahir,1,0,'C');
                $pdf->Cell(8,5, $row->agama,1,0,'C');
                $pdf->Cell(5,5, $row->tinggi,1,0,'C');
                $pdf->Cell(5,5, $row->berat,1,0,'C');
                $pdf->Cell(35,5, $row->kabupaten,1,0,'C');
                $pdf->Cell(15,5, $row->provinsi,1,0,'C');
                $pdf->Cell(20,5, $row->namawali,1,0,'C');
                $pdf->Cell(15,5, $row->pekerjaanwali,1,0,'C');
                $pdf->Cell(25,5, $row->asalsekolah,1,0,'C');
                $pdf->Cell(35,5, $row->kabupatensekolah,1,0,'C');
                $pdf->Cell(8,5, $row->jurusan,1,0,'C');
                $pdf->Cell(18,5, $row->sumbangan,1,0,'C');
                $pdf->Cell(8,5, $row->ujikes,1,0,'C');
                $pdf->Cell(5,5, $row->tpa,1,0,'C');
                $pdf->Cell(25,5, $row->wawancara,1,0,'C');
                $pdf->Cell(20,5, $row->pewawancara,1,0,'C');
                $pdf->Cell(8,5, $row->hasil,1,1,'C');
                $i++; }
        $pdf->Output();
    }

    function kartupeserta($id = null)
    {
        $mahasiswa = $this->db->get_where('calonmahasiswa', array('id' => $id))->result();
        $pdf = new FPDF('l','mm','A4');
        $pdf->AddPage('P', 'A4', '0');
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,5,'*untuk Peserta',0,1);
        $pdf->SetFillColor(210,221,242);
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(200, 15,'    STIKES BETHESDA YAKKUM YOGYAKARTA',0,1,'C',true);
        $pdf->SetFont('Arial','', 10 );
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(200,5,'  KARTU PESERTA CALON MAHASISWA BARU TAHUN PELAJARAN 2019/2020',0,1,'C',true);
        $pdf->Image('assets/images/icon.png',10,16,20);
        $pdf->Cell(10,5,'',0,1);
        foreach ($mahasiswa as $row) {
            $pdf->Image('upload/mahasiswa/'.$row->foto, 165,40,30);
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(40,6,'Tanggal Pendaftaran',0,0);
            $pdf->Cell(20,6,$row->tanggal,0,1);
            $pdf->Cell(40,6,'Nomor Pendaftaran',0,0);
            $pdf->Cell(20,6,$row->pmbid,0,1);
            $pdf->Cell(40,6,'Program Studi',0,0);
            $pdf->Cell(50,6,$row->pilihanprodi,0,1);
            $pdf->Cell(40,6,'Nama',0,0);
            $pdf->Cell(40,6,$row->namalengkap,0,1);
            $pdf->Cell(40,6,'Jenis Kelamin',0,0);
            $pdf->Cell(20,6,$row->jeniskelamin,0,1);
            $pdf->Cell(40,6,'Tanggal, Tempat Lahir',0,0);
            $pdf->Cell(20,6,$row->tempatlahir,0,0);
            $pdf->Cell(2,6,',',0,0);
            $pdf->Cell(30,6,$row->tanggallahir,0,1);
            $pdf->Cell(40,6,'Alamat',0,0);
            $pdf->Cell(20,6,$row->jalan,0,1);
            $pdf->Cell(40,6,'',0,0);
            $pdf->Cell(40,6,$row->kabupaten,0,1);
            $pdf->Cell(40,6,'',0,0);
            $pdf->Cell(0,6,$row->provinsi,0,1);
        }

        $pdf->Cell(10,5,'',0,1);
        $pdf->Cell(150,6,'Dengan ini saya menyatakan bahwa data yang saya isikan dalam formulir pendaftaran',0,1,'L');
        $pdf->Cell(150,6,'mahasiswa baru STIKES BETHESDA YAKKUM YOGYAKARTA adalah benar. Saya bersedia',0,1,'L');
        $pdf->Cell(150,6,'menerima sanksi pembatalan penerimaan mahasiswa baru apabila melanggar pernyataan ini.',0,1,'L');
        $pdf->Cell(10,15,'',0,1);
        $pdf->Cell(190,6,'TANDA TANGAN DAN NAMA TERANG: _____________________________',0,1,'R');
        $pdf->Cell(10,10,'',0,1);
        $pdf->Line(0, 142, 210, 142);


        
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,5,'*untuk Panitia',0,1);
        $pdf->SetFillColor(210,221,242);
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(200, 15,'    STIKES BETHESDA YAKKUM YOGYAKARTA',0,1,'C',true);
        $pdf->SetFont('Arial','', 10 );
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(200,5,'  BUKTI CETAK KARTU PESERTA CALON MAHASISWA BARU 2019/2020',0,1,'C',true);
        $pdf->Image('assets/images/icon.png',10,154,20);
        $pdf->Cell(10,5,'',0,1);
        foreach ($mahasiswa as $row) {
            $pdf->Image('upload/mahasiswa/'.$row->foto, 165,180,30);
            $pdf->SetFont('Arial','',10);
            $pdf->Cell(40,6,'Tanggal Pendaftaran',0,0);
            $pdf->Cell(20,6,$row->tanggal,0,1);
            $pdf->Cell(40,6,'Nomor Pendaftaran',0,0);
            $pdf->Cell(20,6,$row->pmbid,0,1);
            $pdf->Cell(40,6,'Program Studi',0,0);
            $pdf->Cell(50,6,$row->pilihanprodi,0,1);
            $pdf->Cell(40,6,'Gelombang',0,0);
            $pdf->Cell(20,6,$row->gelombang,0,1);
            $pdf->Cell(40,6,'Nama',0,0);
            $pdf->Cell(40,6,$row->namalengkap,0,1);
            $pdf->Cell(40,6,'Jenis Kelamin',0,0);
            $pdf->Cell(20,6,$row->jeniskelamin,0,1);
            $pdf->Cell(40,6,'Tinggi Badan',0,0);
            $pdf->Cell(20,6,$row->tinggi,0,1);
            $pdf->Cell(40,6,'Berat Badan',0,0);
            $pdf->Cell(20,6,$row->berat,0,1);
            $pdf->Cell(40,6,'Tanggal, Tempat Lahir',0,0);
            $pdf->Cell(20,6,$row->tempatlahir,0,0);
            $pdf->Cell(2,6,',',0,0);
            $pdf->Cell(20,6,$row->tanggallahir,0,1);
            $pdf->Cell(40,6,'Alamat',0,0);
            $pdf->Cell(20,6,$row->jalan,0,1);
            $pdf->Cell(40,6,'',0,0);
            $pdf->Cell(40,6,$row->kabupaten,0,1);
            $pdf->Cell(40,6,'',0,0);
            $pdf->Cell(0,6,$row->provinsi,0,1);
            $pdf->Cell(40,6,'Asal Sekolah',0,0);
            $pdf->Cell(35,6,$row->asalsekolah,0,0);
            $pdf->Cell(2,6,',',0,0);
            $pdf->Cell(20,6,$row->jurusan,0,1);
            $pdf->Cell(40,6,'Sumbangan',0,0);
            $pdf->Cell(20,6,$row->sumbangan,0,1);
        }
        $pdf->Cell(10,5,'',0,1);
        $pdf->Cell(180,5,' _____________________________',0,1,'R');

        $pdf->Output();
    }
}