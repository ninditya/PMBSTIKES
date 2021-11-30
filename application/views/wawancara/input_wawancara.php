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

				<?php if ($this->session->flashdata('success')) : ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('wawancara/list') ?>" class="btn"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<form action="<?php base_url('wawancara/inputWawancara') ?>" method="post" enctype="multipart/form-data" >

							<ul class="nav nav-pills nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
								    <a class="nav-link active" id="identitas-tab" data-toggle="tab" href="#identitas" role="tab" aria-controls="identitas" aria-selected="true">Identitas</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="pendidikan-tab" data-toggle="tab" href="#pendidikan" role="tab" aria-controls="pendidikan" aria-selected="true">Latar Pendidikan</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="keluarga-tab" data-toggle="tab" href="#keluarga" role="tab" aria-controls="keluarga" aria-selected="true">Data Keluarga</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="performance-tab" data-toggle="tab" href="#performance" role="tab" aria-controls="performance" aria-selected="true">Performance</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="minat-tab" data-toggle="tab" href="#minat" role="tab" aria-controls="minat" aria-selected="true">Minat dan Hobi</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="kesanggupan-tab" data-toggle="tab" href="#kesanggupan" role="tab" aria-controls="kesanggupan" aria-selected="true">Koreksi Kesanggupan dan Lain-lain</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="kesimpulan-tab" data-toggle="tab" href="#kesimpulan" role="tab" aria-controls="kesimpulan" aria-selected="true">Kesimpulan</a>
								</li>
							</ul>

							<div class="tab-content" id="myTabContent">
								<div class="container tab-pane fade show active" id="identitas" role="tabpanel" aria-labelledby="identitas-tab">
									<div class="card mt-3">
										<div class="card-header">
											<h6>A. IDENTITAS</h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="pmbid">Nomor Pendaftaran*</label>
												<input type="text" name="pmbid" class="form-control col-md-8">
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="namalengkap">Nama Calon Mahasiswa*</label>
												<input type="text" name="namalengkap" class="form-control col-md-8">
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="pilihanprodi">Pilihan Prodi</label>
				                                <select class="form-control input-sm col-md-3" name="pilihanprodi">
				                                	<option value="">-- Pilih --</option>
					                                    <?php 
															foreach ($prodi as $pr) {
																echo "<option value='$pr[prodi]'>$pr[prodi]</option>";
															}
														?>
				                                </select>
				                                <label class="control-label col-md-2" for="jalur">Jalur</label>
				                                <select class="form-control input-sm col-md-3" name="jalur">
													<option value="">-- Pilih --</option>
					                                <?php 
														foreach ($jalur as $jr) {
															echo "<option value='$jr[jalur]'>$jr[jalur]</option>";
														}
													?>
				                                </select>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="jalan">Alamat</label>
												<textarea class="form-control col-md-8" name="jalan"></textarea>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="notelpon">No. Telepon/HP</label>
												<input class="form-control col-md-8" type="text" name="notelpon" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3">Agama</label>
				                                <select class="form-control input-sm col-md-3" name="agama">
				                                    <?php foreach($agama as $a) : ?>
				                                   		<option value="<?= $a; ?>"><?= $a; ?></option>
				                                   	<?php endforeach; ?>
				                                </select>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="anakke">Anak Ke-</label>
												<input type="text" name="anakke" class="form-control col-md-3">
												<label class="control-label col-md-2" for="jmlsaudara">Jumlah Saudara</label>
												<input type="text" name="jmlsaudara" class="form-control col-md-3">
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="wargagereja">Warga Gereja</label>
												<input class="form-control col-md-8" type="text" name="wargagereja" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="baptis">Baptis/Sidhi</label>
												<select class="form-control input-sm col-md-3" name="baptis">
													<?php foreach($baptis as $a) : ?>
				                                   		<option value="<?= $a; ?>"><?= $a; ?></option>
				                                   	<?php endforeach; ?>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12 mt-3">
											<a name="b" class="btn btn-success text-light float-right" onclick="nexttab('pendidikan')">Next</a>
										</div>
									</div>
								</div>

								<div class="container tab-pane fade" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
									<div class="card mt-3">
										<div class="card-header">
											<h6>B. LATAR BELAKANG PENDIDIKAN</h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="asalsekolah">Pendidikan Terakhir</label>
												<input class="form-control col-md-8" type="text" name="asalsekolah" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="tahunlulus">Tahun Lulus</label>
												<input class="form-control col-md-3" type="text" name="tahunlulus" autocomplete="off"/>
												<label class="control-label col-md-2" for="jurusan">Jurusan</label>
												<input class="form-control col-md-3" type="text" name="jurusan" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="berhentisekolah">Pernah Berhenti Sekolah</label>
												<input class="" type="radio" name="berhentisekolah" id="Ya" value="Ya"><label for="Ya" class="mr-5">Ya</label>
												<input class="" type="radio" name="berhentisekolah" id="Tidak" value="Tidak" checked><label for="Tidak" class="mr-5">Tidak</label>
												<label class="control-label col-md-2" for="kapanbhtsklh">Kapan</label>
												<input class="form-control col-md-3" type="text" name="kapanbhtsklh" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="alasanbrhtsklh">Bila Pernah Alasannya Apa</label>
												<input class="form-control col-md-8" type="text" name="alasanbrhtsklh" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="dimanadaftar">Mendaftar Dimana Saja</label>
												<input class="form-control col-md-8" type="text" name="dimanadaftar" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="alternatif">Alternatif Pilihan</label>
												<input class="form-control col-md-8" type="text" name="alternatif" autocomplete="off"/>
											</div>
										</div>
									</div>

									<div class="card mt-2">
										<div class="card-header">
											<h6>C. PRESTASI YANG PERNAH DIRAIH</h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="prestasi">Prestasi Yang Pernah Diraih</label>
												<textarea class="form-control col-md-8" name="prestasi"></textarea>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="organisasi">Pengalaman Berorganisasi</label>
												<textarea class="form-control col-md-8" name="organisasi"></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12 mt-3">
											<a name="b" class="btn btn-success text-light float-right" onclick="nexttab('keluarga')">Next</a>
										</div>
									</div>
								</div>

								<div class="container tab-pane fade" id="keluarga" role="tabpanel" aria-labelledby="keluarga-tab">
									<div class="card mt-3">
										<div class="card-header">
											<h6>D. DATA KELUARGA</h6>
										</div>
										<div class="card-body">
											<h6>1. Orang Tua</h6>
											<div class="container card">
												<div class="form-group form-inline mt-2">
													<label class="control-label" for="ayah">a. Ayah</label>
													<input class="offset-md-1" type="radio" name="ayah" id="Kandung" value="Kandung" checked><label for="Kandung" class="mr-5">Kandung</label>
													<input class="" type="radio" name="ayah" id="Tiri" value="Tiri"><label for="Tiri" class="mr-5">Tiri</label>
												</div>
												<div class="container">
													<div class="form-group form-inline">
														<label class="control-label col-md-3" for="namaayah">Nama</label>
														<input class="form-control col-md-8" type="text" name="namaayah" autocomplete="off"/>
													</div>
													<div class="form-group form-inline">
														<label class="control-label col-md-3" for="alamatayah">Alamat</label>
														<textarea class="form-control col-md-8" name="alamatayah"></textarea>
													</div>
													<div class="form-group form-inline">
														<label class="control-label col-md-3" for="notelponayah">No. Telepon/HP</label>
														<input class="form-control col-md-8" type="text" name="notelponayah" autocomplete="off"/>
													</div>
													<div class="form-group form-inline">
														<label class="control-label col-md-3" for="kerjaayah">Pekerjaan</label>
														<input class="form-control col-md-8" type="text" name="kerjaayah" autocomplete="off"/>
													</div>
													<div class="form-group form-inline">
														<label class="control-label col-md-3">Agama</label>
						                                <select class="form-control input-sm col-md-3" name="agamaayah">
						                                    <?php foreach($agama as $a) : ?>
						                                   		<option value="<?= $a; ?>"><?= $a; ?></option>
						                                   	<?php endforeach; ?>
						                                </select>
						                                <label class="control-label col-md-2" for="baptisayah">Baptis/Sidhi</label>
														<select class="form-control input-sm col-md-3" name="baptisayah">
															<?php foreach($baptis as $a) : ?>
						                                   		<option value="<?= $a; ?>"><?= $a; ?></option>
						                                   	<?php endforeach; ?>
														</select>
													</div>
												</div>
											</div>
											<div class="container card mt-2">
												<div class="form-group form-inline mt-2">
													<label class="control-label" for="ibu">b. Ibu</label>
													<input class="offset-md-1" type="radio" name="ibu" id="Kandung" value="Kandung" checked><label for="Kandung" class="mr-5">Kandung</label>
													<input class="" type="radio" name="ibu" id="Tiri" value="Tiri"><label for="Tiri" class="mr-5">Tiri</label>
												</div>
												<div class="container">
													<div class="form-group form-inline">
														<label class="control-label col-md-3" for="namaibu">Nama</label>
														<input class="form-control col-md-8" type="text" name="namaibu" autocomplete="off"/>
													</div>
													<div class="form-group form-inline">
														<label class="control-label col-md-3" for="alamatibu">Alamat</label>
														<textarea class="form-control col-md-8" name="alamatibu"></textarea>
													</div>
													<div class="form-group form-inline">
														<label class="control-label col-md-3" for="notelponibu">No. Telepon/HP</label>
														<input class="form-control col-md-8" type="text" name="notelponibu" autocomplete="off"/>
													</div>
													<div class="form-group form-inline">
														<label class="control-label col-md-3" for="kerjaibu">Pekerjaan</label>
														<input class="form-control col-md-8" type="text" name="kerjaibu" autocomplete="off"/>
													</div>
													<div class="form-group form-inline">
														<label class="control-label col-md-3">Agama</label>
						                                <select class="form-control input-sm col-md-3" name="agamaibu">
						                                    <?php foreach($agama as $a) : ?>
						                                   		<option value="<?= $a; ?>"><?= $a; ?></option>
						                                   	<?php endforeach; ?>
						                                </select>
						                                <label class="control-label col-md-2" for="baptisibu">Baptis/Sidhi</label>
														<select class="form-control input-sm col-md-3" name="baptisibu">
															<?php foreach($baptis as $a) : ?>
						                                   		<option value="<?= $a; ?>"><?= $a; ?></option>
						                                   	<?php endforeach; ?>
														</select>
													</div>
												</div>
											</div>
											<h6 class="mt-3">2. Wali (diisi bila perlu)</h6>
											<div class="container card">
												<div class="form-group form-inline mt-2">
													<label class="control-label col-md-3" for="namawali">Nama</label>
													<input class="form-control col-md-8" type="text" name="namawali" autocomplete="off"/>
												</div>
												<div class="form-group form-inline">
													<label class="control-label col-md-3" for="alamatwali">Alamat</label>
													<textarea class="form-control col-md-8" name="alamatwali"></textarea>
												</div>
												<div class="form-group form-inline">
													<label class="control-label col-md-3" for="kerjawali">Pekerjaan</label>
													<input class="form-control col-md-8" type="text" name="kerjawali" autocomplete="off"/>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12 mt-3">
											<a name="b" class="btn btn-success text-light float-right" onclick="nexttab('performance')">Next</a>
										</div>
									</div>
								</div>

								<div class="container tab-pane fade" id="performance" role="tabpanel" aria-labelledby="performance-tab">
									<div class="card mt-3">
										<div class="card-header">
											<h6>E. PERFORMANCE</h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="carajalan">Cara Berjalan</label>
												<input class="form-control col-md-8" type="text" name="carajalan" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="rapipakaian">Kerapian Berpakaian</label>
												<input class="form-control col-md-8" type="text" name="rapipakaian" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="tubuh">Bentuk Tubuh</label>
												<input class="form-control col-md-8" type="text" name="tubuh" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="sopan">Sikap/Sopan Santun</label>
												<input class="form-control col-md-8" type="text" name="sopan" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="bicara">Cara Berbicara</label>
												<input class="form-control col-md-8" type="text" name="bicara" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="lain">Lain-lain</label>
												<input class="form-control col-md-8" type="text" name="lain" autocomplete="off"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12 mt-3">
											<a name="b" class="btn btn-success text-light float-right" onclick="nexttab('minat')">Next</a>
										</div>
									</div>
								</div>

								<div class="container tab-pane fade" id="minat" role="tabpanel" aria-labelledby="minat-tab">
									<div class="card mt-3">
										<div class="card-header">
											<h6>F. MINAT</h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="alasanstikes">Alasan/Tujuan masuk STIKES Bethesda Yakkum</label>
												<textarea class="form-control col-md-8" name="alasanstikes"></textarea>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="pendapatstikes">Bagaimana Pendapat Tentang STIKES Bethesda Yakkum</label>
												<textarea class="form-control col-md-8" name="pendapatstikes"></textarea>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="pendapatperawat">Bagaimana Pendapat Tentang Profesi Keperawatan</label>
												<textarea class="form-control col-md-8" name="pendapatperawat"></textarea>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="infostikes">Dari Mana Mendapat Informasi Tentang STIKES Bethesda Yakkum</label>
												<input class="form-control col-md-8" type="text" name="infostikes" autocomplete="off"/>
											</div>
											<label class="ml-3" for="">Adakah Orang Yang Mendukung Atau Melarang</label>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="dukung">Siapa Yang Mendukung</label>
												<input class="form-control col-md-3" type="text" name="dukung" autocomplete="off"/>
												<label class="control-label col-md-2" for="alasandukung">Mengapa</label>
												<input class="form-control col-md-3" type="text" name="alasandukung" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="larang">Siapa Yang Melarang</label>
												<input class="form-control col-md-3" type="text" name="larang" autocomplete="off"/>
												<label class="control-label col-md-2" for="alasanlarang">Mengapa</label>
												<input class="form-control col-md-3" type="text" name="alasanlarang" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="saudarastikes">Apakah Ada Saudara Yang Kuliah di STIKES Bethesda Yakkum</label>
												<input class="" type="radio" name="saudarastikes" id="Ada" value="Ada"><label for="Ada" class="mr-5">Ada</label>
												<input class="" type="radio" name="saudarastikes" id="Tidak" value="Tidak" checked><label for="Tidak" class="mr-5">Tidak</label>
											</div>
											<label class="ml-3" for="">Bila Ada Sebutkan:</label>
											<div class="container">
												<div class="form-group form-inline">
													<label class="control-label col-md-3" for="namasaudara">Nama</label>
													<input class="form-control col-md-8" type="text" name="namasaudara" autocomplete="off"/>
												</div>
												<div class="form-group form-inline">
													<label class="control-label col-md-3" for="prodisaudara">Program Studi</label>
													<select class="form-control input-sm col-md-3" name="prodisaudara">
					                                	<option value="">-- Pilih --</option>
						                                    <?php 
																foreach ($prodi as $pr) {
																	echo "<option value='$pr[prodi]'>$pr[prodi]</option>";
																}
															?>
					                                </select>
												</div>
												<div class="form-group form-inline">
													<label class="control-label col-md-3" for="kandungsaudara">Saudara Kandung</label>
													<input class="" type="radio" name="kandungsaudara" checked id="Ya" value="Ya"><label for="Ya" class="mr-5">Ya</label>
													<input class="" type="radio" name="kandungsaudara" id="Tidak" value="Tidak"><label for="Tidak" class="mr-5">Tidak</label>
												</div>
												<div class="form-group form-inline">
													<label class="control-label col-md-3" for="semestersaudara">Semester/Tahun Lulus</label>
													<input class="form-control col-md-8" type="text" name="semestersaudara" autocomplete="off"/>
												</div>
											</div>
										</div>
									</div>

									<div class="card mt-2">
										<div class="card-header">
											<h6>G. HOBI</h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="hobi">Hobi Calon Mahasiswa</label>
												<input class="form-control col-md-8" type="text" name="hobi" autocomplete="off"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12 mt-3">
											<a name="b" class="btn btn-success text-light float-right" onclick="nexttab('kesanggupan')">Next</a>
										</div>
									</div>
								</div>

								<div class="container tab-pane fade" id="kesanggupan" role="tabpanel" aria-labelledby="kesanggupan-tab">
									<div class="card mt-3">
										<div class="card-header">
											<h6>H. KOREKSI KESANGGUPAN</h6>
										</div>
										<div class="card-body">
											<div class="form-group">
												<label class="control-label col-md-8 offset-md-2" for="sanggupaturan">Sanggup menaati peraturan yang ditetapkan institusi (peraturan perkuliahan, peraturan praktik laboratorium, praktik klinik keperawatan, praktik lapangan, peraturan tentang seragam kuliah dan praktik, tata tertib):</label>
												<textarea class="form-control col-md-8 offset-md-2" name="sanggupaturan"></textarea>
											</div>
											<div class="form-group">
												<label class="control-label col-md-6 offset-md-2" for="sanggupbiaya">Sanggup memenuhi segala pembiayaan yang telah diinformasikan</label>
												<input class="" type="radio" name="sanggupbiaya" id="Ya" value="Ya" checked><label for="Ya" class="mr-5">Ya</label>
												<input class="" type="radio" name="sanggupbiaya" id="Tidak" value="Tidak"><label for="Tidak" class="mr-5">Tidak</label>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3 offset-md-1" for="alasantdkbiaya">Bila Tidak, alasannya:</label>
												<input class="form-control col-md-7" type="text" name="alasantdkbiaya" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3 offset-md-1" for="siapabayar">Bila Ya, siapa yang bertanggung jawab dalam pembiayaan calon mahasiswa</label>
												<input class="form-control col-md-7" type="text" name="siapabayar" autocomplete="off"/>
											</div>
										</div>
									</div>

									<div class="card mt-2">
										<div class="card-header">
											<h6>I. LAIN-LAIN</h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="penyakit">Sakit Yang Pernah Diderita</label>
												<input class="form-control col-md-3" type="text" name="penyakit" autocomplete="off"/>
												<label class="control-label col-md-2" for="tahunsakit">Tahun</label>
												<input class="form-control col-md-3" type="text" name="tahunsakit" autocomplete="off"/>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="napza">Menggunakan Napza</label>
												<input class="" type="radio" name="napza" id="Ya" value="Ya"><label for="Ya" class="mr-5">Ya</label>
												<input class="" type="radio" name="napza" id="Tidak" value="Tidak" checked><label for="Tidak" class="mr-5">Tidak</label>
												<label class="control-label col-md-3" for="kapannapza">Bila Ya, Sejak Kapan</label>
												<input class="form-control col-md-3" type="text" name="kapannapza" autocomplete="off"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12 mt-3">
											<a name="b" class="btn btn-success text-light float-right" onclick="nexttab('kesimpulan')">Next</a>
										</div>
									</div>
								</div>

								<div class="container tab-pane fade" id="kesimpulan" role="tabpanel" aria-labelledby="kesimpulan-tab">
									<div class="card mt-3">
										<div class="card-header">
											<h6>J. KESIMPULAN</h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3 offset-md-2" for="diterima">Disarankan Untuk Diterima</label>
												<input class="" type="radio" name="diterima" id="Ya" value="Ya" checked><label for="Ya" class="mr-5">Ya</label>
												<input class="" type="radio" name="diterima" id="Tidak" value="Tidak"><label for="Tidak" class="mr-5">Tidak</label>
											</div>
											<div class="form-group">
												<label class="control-label col-md-8 offset-md-2" for="alasanterima">Alasan:</label>
												<textarea class="form-control col-md-8 offset-md-2" name="alasanterima"></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12 mt-3">
											<input class="btn btn-success float-right mr-2" type="submit" name="btn" value="Save" />
										</div>
									</div>
								</div>	
							</div>
						</form>
					</div>
					<div class="card-footer small text-muted">
						* required fields
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
		function nexttab(hrf){
			$('a[href="#'+hrf+'"]').tab('show') ;
		}
	</script>
</body>

</html>