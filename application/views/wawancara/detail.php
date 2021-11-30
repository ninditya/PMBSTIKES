<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("_partials/breadcrumb.php") ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('wawancara/list') ?>" class="btn"><i class="fas fa-arrow-left"></i> Back</a>
						<a onclick="deleteConfirm('<?php echo site_url('wawancara/delete/'.$wawancara->id) ?>')" href="#!" class="btn float-right text-danger"><i class="fas fa-trash"></i> Hapus</a>
						<a href="<?php echo site_url('wawancara/edit/'.$wawancara->id) ?>" class="btn float-right"><i class="fas fa-edit"></i> Edit</a>
					</div>
					<div class="card-body">
						<div class="card">
							<div class="card-header bg-primary text-white">
							    Identitas
							</div>
							<div class="card-body">
							    <div class="form-group form-inline">
									<label class="control-label col-md-3" for="pmbid">Nomor Pendaftaran</label>
									<input type="text" name="pmbid" disabled class="form-control col-md-8" value="<?= $wawancara->pmbid ?>">
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="namalengkap">Nama Calon Mahasiswa</label>
									<input type="text" name="namalengkap" disabled class="form-control col-md-8" value="<?= $wawancara->namalengkap ?>">
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3">Pilihan Prodi</label>
	                                <input class="form-control input-sm col-md-3" type="text" name="pilihanprodi" disabled value="<?php echo $wawancara->pilihanprodi ?>"/>
	                                <label class="control-label col-md-2" for="gelombang">Jalur Pendaftaran</label>
									<input class="form-control input-sm col-md-3" type="text" name="jalur" disabled value="<?php echo $wawancara->jalur ?>"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="jalan">Alamat</label>
									<textarea class="form-control col-md-8" name="jalan" disabled><?php echo $wawancara->jalan ?></textarea>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="notelpon">No. Telepon/HP</label>
									<input class="form-control col-md-8" type="text" name="notelpon" disabled value="<?= $wawancara->notelpon ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3">Agama</label>
				                    <input class="form-control col-md-8" type="text" name="agama" disabled value="<?= $wawancara->agama ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="anakke">Anak Ke-</label>
									<input type="text" name="anakke" disabled class="form-control col-md-3" value="<?= $wawancara->anakke ?>">
									<label class="control-label col-md-2" for="jmlsaudara">Jumlah Saudara</label>
									<input type="text" name="jmlsaudara" disabled class="form-control col-md-3" value="<?= $wawancara->jmlsaudara ?>">
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="wargagereja">Warga Gereja</label>
									<input class="form-control col-md-8" type="text" name="wargagereja" disabled value="<?= $wawancara->wargagereja ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="baptis">Baptis/Sidhi</label>
									<input class="form-control col-md-8" type="text" name="baptis" disabled value="<?= $wawancara->baptis ?>" autocomplete="off"/>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
							    Latar Pendidikan
							</div>
							<div class="card-body">
							    <div class="form-group form-inline">
									<label class="control-label col-md-3" for="asalsekolah">Pendidikan Terakhir</label>
									<input class="form-control col-md-8" type="text" name="asalsekolah" disabled value="<?= $wawancara->asalsekolah ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="tahunlulus">Tahun Lulus</label>
									<input class="form-control col-md-3" type="text" name="tahunlulus" disabled value="<?= $wawancara->tahunlulus ?>" autocomplete="off"/>
									<label class="control-label col-md-2" for="jurusan">Jurusan</label>
									<input class="form-control col-md-3" type="text" name="jurusan" disabled value="<?= $wawancara->jurusan ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="berhentisekolah">Pernah Berhenti Sekolah</label>
									<input class="form-control col-md-3" type="text" name="berhentisekolah" disabled value="<?= $wawancara->berhentisekolah ?>" autocomplete="off"/>
									<label class="control-label col-md-2" for="kapanbhtsklh">Kapan</label>
									<input class="form-control col-md-3" type="text" name="kapanbhtsklh" disabled value="<?= $wawancara->kapanbhtsklh ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="alasanbrhtsklh">Bila Pernah Alasannya Apa</label>
									<input class="form-control col-md-8" type="text" name="alasanbrhtsklh" disabled value="<?= $wawancara->alasanbrhtsklh ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="dimanadaftar">Mendaftar Dimana Saja</label>
									<input class="form-control col-md-8" type="text" name="dimanadaftar" disabled value="<?= $wawancara->dimanadaftar ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="alternatif">Alternatif Pilihan</label>
									<input class="form-control col-md-8" type="text" name="alternatif" disabled value="<?= $wawancara->alternatif ?>" autocomplete="off"/>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
							    Prestasi Yang Pernah Diraih
							</div>
							<div class="card-body">
							    <div class="form-group form-inline">
									<label class="control-label col-md-3" for="prestasi">Prestasi Yang Pernah Diraih</label>
									<textarea class="form-control col-md-8" name="prestasi" disabled><?= $wawancara->prestasi ?></textarea>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="organisasi">Pengalaman Berorganisasi</label>
									<textarea class="form-control col-md-8" name="organisasi" disabled><?= $wawancara->organisasi ?></textarea>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
							    Data Keluarga
							</div>
							<div class="card-body">
								<h6>1. Orang Tua</h6>
								<div class="container card">
									<div class="form-group form-inline mt-2">
										<label class="control-label mr-5" for="ayah">a. Ayah</label>
										<input class="form-control col-md-3" type="text" name="ayah" disabled value="<?= $wawancara->ayah ?>" autocomplete="off"/>
									</div>
									<div class="container">
										<div class="form-group form-inline">
											<label class="control-label col-md-3" for="namaayah">Nama</label>
											<input class="form-control col-md-8" type="text" name="namaayah" disabled value="<?= $wawancara->namaayah ?>" autocomplete="off"/>
										</div>
										<div class="form-group form-inline">
											<label class="control-label col-md-3" for="alamatayah">Alamat</label>
											<textarea class="form-control col-md-8" name="alamatayah" disabled><?= $wawancara->alamatayah ?></textarea>
										</div>
										<div class="form-group form-inline">
											<label class="control-label col-md-3" for="notelponayah">No. Telepon/HP</label>
											<input class="form-control col-md-8" type="text" name="notelponayah" disabled value="<?= $wawancara->notelponayah ?>" autocomplete="off"/>
										</div>
										<div class="form-group form-inline">
											<label class="control-label col-md-3" for="kerjaayah">Pekerjaan</label>
											<input class="form-control col-md-8" type="text" name="kerjaayah" disabled value="<?= $wawancara->kerjaayah ?>" autocomplete="off"/>
										</div>
										<div class="form-group form-inline">
											<label class="control-label col-md-3">Agama</label>
						                    <input class="form-control col-md-3" type="text" name="agamaayah" disabled value="<?= $wawancara->agamaayah ?>" autocomplete="off"/>
						                     <label class="control-label col-md-2" for="baptisayah">Baptis/Sidhi</label>
											<input class="form-control col-md-3" type="text" name="baptisayah" disabled value="<?= $wawancara->baptisayah ?>" autocomplete="off"/>
										</div>
									</div>
								</div>
								<div class="container card mt-2">
									<div class="form-group form-inline mt-2">
										<label class="control-label mr-5" for="ibu">b. Ibu</label>
										<input class="form-control col-md-3" type="text" name="ibu" disabled value="<?= $wawancara->ibu ?>" autocomplete="off"/>
									</div>
									<div class="container">
										<div class="form-group form-inline">
											<label class="control-label col-md-3" for="namaibu">Nama</label>
											<input class="form-control col-md-8" type="text" name="namaibu" disabled value="<?= $wawancara->namaibu ?>" autocomplete="off"/>
										</div>
										<div class="form-group form-inline">
											<label class="control-label col-md-3" for="alamatibu">Alamat</label>
											<textarea class="form-control col-md-8" name="alamatibu" disabled><?= $wawancara->alamatibu ?></textarea>
										</div>
										<div class="form-group form-inline">
											<label class="control-label col-md-3" for="notelponibu">No. Telepon/HP</label>
											<input class="form-control col-md-8" type="text" name="notelponibu" disabled value="<?= $wawancara->notelponibu ?>" autocomplete="off"/>
										</div>
										<div class="form-group form-inline">
											<label class="control-label col-md-3" for="kerjaibu">Pekerjaan</label>
											<input class="form-control col-md-8" type="text" name="kerjaibu" disabled value="<?= $wawancara->kerjaibu ?>" autocomplete="off"/>
										</div>
										<div class="form-group form-inline">
											<label class="control-label col-md-3">Agama</label>
						                    <input class="form-control col-md-3" type="text" name="agamaibu" disabled value="<?= $wawancara->agamaibu ?>" autocomplete="off"/>
						                    <label class="control-label col-md-2" for="baptisibu">Baptis/Sidhi</label>
											<input class="form-control col-md-3" type="text" name="baptisibu" disabled value="<?= $wawancara->baptisibu ?>" autocomplete="off"/>
										</div>
									</div>
								</div>
								<h6 class="mt-3">2. Wali (diisi bila perlu)</h6>
								<div class="container card">
									<div class="form-group form-inline mt-2">
										<label class="control-label col-md-3" for="namawali">Nama</label>
										<input class="form-control col-md-8" type="text" name="namawali" disabled value="<?= $wawancara->namawali ?>" autocomplete="off"/>
									</div>
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="alamatwali">Alamat</label>
										<textarea class="form-control col-md-8" name="alamatwali" disabled><?= $wawancara->alamatwali ?></textarea>
									</div>
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="kerjawali">Pekerjaan</label>
										<input class="form-control col-md-8" type="text" name="kerjawali" disabled value="<?= $wawancara->kerjawali ?>" autocomplete="off"/>
									</div>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
								    Performance
							</div>
							<div class="card-body">
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="carajalan">Cara Berjalan</label>
									<input class="form-control col-md-8" type="text" name="carajalan" disabled value="<?= $wawancara->carajalan ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="rapipakaian">Kerapian Berpakaian</label>
									<input class="form-control col-md-8" type="text" name="rapipakaian" disabled value="<?= $wawancara->rapipakaian ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="tubuh">Bentuk Tubuh</label>
									<input class="form-control col-md-8" type="text" name="tubuh" disabled value="<?= $wawancara->tubuh ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="sopan">Sikap/Sopan Santun</label>
									<input class="form-control col-md-8" type="text" name="sopan" disabled value="<?= $wawancara->sopan ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="bicara">Cara Berbicara</label>
									<input class="form-control col-md-8" type="text" name="bicara" disabled value="<?= $wawancara->bicara ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="lain">Lain-lain</label>
									<input class="form-control col-md-8" type="text" name="lain" disabled value="<?= $wawancara->lain ?>" autocomplete="off"/>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
								Minat dan Hobi
							</div>
							<div class="card-body">
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="alasanstikes">Alasan/Tujuan masuk STIKES Bethesda Yakkum</label>
									<textarea class="form-control col-md-8" name="alasanstikes" disabled><?= $wawancara->alasanstikes ?></textarea>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="pendapatstikes">Bagaimana Pendapat Tentang STIKES Bethesda Yakkum</label>
									<textarea class="form-control col-md-8" name="pendapatstikes" disabled><?= $wawancara->pendapatstikes ?></textarea>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="pendapatperawat">Bagaimana Pendapat Tentang Profesi Keperawatan</label>
									<textarea class="form-control col-md-8" name="pendapatperawat" disabled><?= $wawancara->pendapatperawat ?></textarea>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="infostikes">Dari Mana Mendapat Informasi Tentang STIKES Bethesda Yakkum</label>
									<input class="form-control col-md-8" type="text" name="infostikes" disabled value="<?= $wawancara->infostikes ?>" autocomplete="off"/>
								</div>
								<label class="ml-3" for="">Adakah Orang Yang Mendukung Atau Melarang</label>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="dukung">Siapa Yang Mendukung</label>
									<input class="form-control col-md-3" type="text" name="dukung" disabled value="<?= $wawancara->dukung ?>" autocomplete="off"/>
									<label class="control-label col-md-2" for="alasandukung">Mengapa</label>
									<input class="form-control col-md-3" type="text" name="alasandukung" disabled value="<?= $wawancara->alasandukung ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="larang">Siapa Yang Melarang</label>
									<input class="form-control col-md-3" type="text" name="larang" disabled value="<?= $wawancara->larang ?>" autocomplete="off"/>
									<label class="control-label col-md-2" for="alasanlarang">Mengapa</label>
									<input class="form-control col-md-3" type="text" name="alasanlarang" disabled value="<?= $wawancara->alasanlarang ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="saudarastikes">Apakah Ada Saudara Yang Kuliah di STIKES Bethesda Yakkum</label>
									<input class="form-control col-md-3" type="text" name="saudarastikes" disabled value="<?= $wawancara->saudarastikes ?>" autocomplete="off"/>
								</div>
								<label class="ml-3" for="">Bila Ada Sebutkan:</label>
								<div class="container">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="namasaudara">Nama</label>
										<input class="form-control col-md-8" type="text" name="namasaudara" disabled value="<?= $wawancara->namasaudara ?>" autocomplete="off"/>
									</div>
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="prodisaudara">Program Studi</label>
										<input class="form-control col-md-3" type="text" name="prodisaudara" disabled value="<?= $wawancara->prodisaudara ?>" autocomplete="off"/>
									</div>
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="kandungsaudara">Saudara Kandung</label>
										<input class="form-control col-md-3" type="text" name="kandungsaudara" disabled value="<?= $wawancara->kandungsaudara ?>" autocomplete="off"/>
									</div>
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="semestersaudara">Semester/Tahun Lulus</label>
										<input class="form-control col-md-8" type="text" name="semestersaudara" disabled value="<?= $wawancara->semestersaudara ?>" autocomplete="off"/>
									</div>
								</div>
								<div class="form-group form-inline mt-5">
									<label class="control-label col-md-3" for="hobi">Hobi Calon Mahasiswa</label>
									<input class="form-control col-md-8" type="text" name="hobi" disabled value="<?= $wawancara->hobi ?>" autocomplete="off"/>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
								Koreksi Kesanggupan dan Lain-lain
							</div>
							<div class="card-body">
								<div class="form-group">
									<label class="control-label col-md-8 offset-md-2" for="sanggupaturan">Sanggup menaati peraturan yang ditetapkan institusi (peraturan perkuliahan, peraturan praktik laboratorium, praktik klinik keperawatan, praktik lapangan, peraturan tentang seragam kuliah dan praktik, tata tertib):</label>
									<textarea class="form-control col-md-8 offset-md-2" name="sanggupaturan" disabled><?= $wawancara->sanggupaturan ?></textarea>
								</div>
								<div class="form-group">
									<label class="control-label col-md-6 offset-md-2" for="sanggupbiaya">Sanggup memenuhi segala pembiayaan yang telah diinformasikan</label>
									<input class="form-control col-md-8 offset-md-2" type="text" name="sanggupbiaya" disabled value="<?= $wawancara->sanggupbiaya ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3 offset-md-1" for="alasantdkbiaya">Bila Tidak, alasannya:</label>
									<input class="form-control col-md-7" type="text" name="alasantdkbiaya" disabled value="<?= $wawancara->alasantdkbiaya ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3 offset-md-1" for="siapabayar">Bila Ya, siapa yang bertanggung jawab dalam pembiayaan calon mahasiswa</label>
									<input class="form-control col-md-7" type="text" name="siapabayar" disabled value="<?= $wawancara->siapabayar ?>" autocomplete="off"/>
								</div>

								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="penyakit">Sakit Yang Pernah Diderita</label>
									<input class="form-control col-md-3" type="text" name="penyakit" disabled value="<?= $wawancara->penyakit ?>" autocomplete="off"/>
									<label class="control-label col-md-2" for="tahunsakit">Tahun</label>
									<input class="form-control col-md-3" type="text" name="tahunsakit" disabled value="<?= $wawancara->tahunsakit ?>" autocomplete="off"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="napza">Menggunakan Napza</label>
									<input class="form-control col-md-2" type="text" name="napza" disabled value="<?= $wawancara->napza ?>" autocomplete="off"/>
									<label class="control-label col-md-3" for="kapannapza">Bila Ya, Sejak Kapan</label>
									<input class="form-control col-md-3" type="text" name="kapannapza" disabled value="<?= $wawancara->kapannapza ?>" autocomplete="off"/>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
								Kesimpulan
							</div>
							<div class="card-body">
								<div class="form-group form-inline">
									<label class="control-label col-md-3 offset-md-2" for="diterima">Disarankan Untuk Diterima</label>
									<input class="form-control col-md-3" type="text" name="diterima" disabled value="<?= $wawancara->diterima ?>" autocomplete="off"/>
								</div>
								<div class="form-group">
									<label class="control-label col-md-8 offset-md-2" for="alasanterima">Alasan:</label>
									<textarea class="form-control col-md-8 offset-md-2" name="alasanterima" disabled><?= $wawancara->alasanterima ?></textarea>
								</div>
							</div>
						</div>
					</div>

						
				</div>
				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


	<?php $this->load->view("_partials/scrolltop.php") ?>
	<?php $this->load->view("_partials/modal.php") ?>
	<?php $this->load->view("_partials/js.php") ?>

	<script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>

</body>

</html>