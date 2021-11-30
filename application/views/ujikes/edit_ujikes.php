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
						<a href="<?php echo site_url('ujikesehatan/list') ?>" class="btn"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<form action="<?php base_url('ujikesehatan/editUjikes') ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?= $ujikes->id?>" />

							<ul class="nav nav-pills nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
								    <a class="nav-link active" id="identitas-tab" data-toggle="tab" href="#identitas" role="tab" aria-controls="identitas" aria-selected="true">Identitas</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="riwayatkesehatan-tab" data-toggle="tab" href="#riwayatkesehatan" role="tab" aria-controls="riwayatkesehatan" aria-selected="true">Anamnese Riwayat Kesehatan</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="pemeriksaan-tab" data-toggle="tab" href="#pemeriksaan" role="tab" aria-controls="pemeriksaan" aria-selected="true">Pemeriksaan Fisik</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="kesimpulan-tab" data-toggle="tab" href="#kesimpulan" role="tab" aria-controls="kesimpulan" aria-selected="false">Kesimpulan</a>
								</li>
							</ul>

							<div class="tab-content" id="myTabContent">
								<div class="container tab-pane fade show active" id="identitas" role="tabpanel" aria-labelledby="identitas-tab">
									<div class="card mt-3">
										<div class="card-header">
											<h6>IDENTITAS</h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="pmbid">Nomor Pendaftaran*</label>
												<input type="text" name="pmbid" value="<?= $ujikes->pmbid ?>" class="form-control col-md-8 <?php echo form_error('pmbid') ? 'is-invalid':'' ?>">
												<div class="invalid-feedback">
													<?php echo form_error('pmbid') ?>
												</div>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="namalengkap">Nama Calon Mahasiswa*</label>
												<input type="text" name="namalengkap" value="<?= $ujikes->namalengkap ?>" class="form-control col-md-8 <?php echo form_error('namalengkap') ? 'is-invalid':'' ?>">
												<div class="invalid-feedback">
													<?php echo form_error('namalengkap') ?>
												</div>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="jeniskelamin">Jenis Kelamin*</label><br>
												<?php if('Pria' == $ujikes->jeniskelamin) : ?>
			                                  		<input class="" type="radio" name="jeniskelamin" id="Pria" checked value="Pria"><label for="Pria" class="mr-5">Pria</label>
			                                  		<input class="" type="radio" name="jeniskelamin" id="Wanita" value="Wanita"><label for="Wanita" class="mr-5">Wanita</label>
			                                    <?php elseif('Wanita' == $ujikes->jeniskelamin) : ?>
			                                    	<input class="" type="radio" name="jeniskelamin" id="Pria" value="Pria"><label for="Pria" class="mr-5">Pria</label>
			                                  		<input class="" type="radio" name="jeniskelamin" id="Wanita" checked value="Wanita"><label for="Wanita" class="mr-5">Wanita</label>
			                                    <?php endif; ?>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="umur">Umur*</label>
												<input class="form-control col-md-8 <?php echo form_error('umur') ? 'is-invalid':'' ?>" type="text" name="umur" value="<?= $ujikes->umur ?>" autocomplete="off"/>
												<div class="invalid-feedback">
													<?php echo form_error('umur') ?>
												</div>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="tanggaltest">Tanggal Test*</label>
												<input class="form-control col-md-4" type="date" name="tanggaltest" value="<?= $ujikes->tanggaltest ?>"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12 mt-3">
											<a name="b" class="btn btn-success text-light float-right" onclick="nexttab('riwayatkesehatan')">Next</a>
										</div>
									</div>
								</div>

								<div class="container tab-pane fade" id="riwayatkesehatan" role="tabpanel" aria-labelledby="peminatan-tab">
									<div class="form-group card card-body mt-3">
										<label for="sakitlama">Sakit Lama</label>
										<div class="form-inline">
											<?php if('Positif' == $ujikes->sakitlama) : ?>
			                                  	<input class="" type="radio" name="sakitlama" id="Positif" checked value="Positif"><label for="Positif" class="mr-5">Positif</label>
			                                  	<input class="" type="radio" name="sakitlama" id="Negatif" value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
			                                <?php elseif('Negatif' == $ujikes->sakitlama) : ?>
			                                    <input class="" type="radio" name="sakitlama" id="Positif" value="Positif"><label for="Positif" class="mr-5">Positif</label>
			                                  	<input class="" type="radio" name="sakitlama" id="Negatif" checked value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
			                                <?php endif; ?>
											<input class="form-control col-md-9" type="text" name="ketsakitlama" value="<?= $ujikes->ketsakitlama ?>" placeholder="Keterangan" />
										</div>
									</div>
									<div class="form-group card card-body">
										<label for="batuklama">Batuk Lama</label>
										<div class="form-inline">
											<?php if('Positif' == $ujikes->batuklama) : ?>
			                                  	<input class="" type="radio" name="batuklama" id="Positif" checked value="Positif"><label for="Positif" class="mr-5">Positif</label>
			                                  	<input class="" type="radio" name="batuklama" id="Negatif" value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
			                                <?php elseif('Negatif' == $ujikes->batuklama) : ?>
			                                    <input class="" type="radio" name="batuklama" id="Positif" value="Positif"><label for="Positif" class="mr-5">Positif</label>
			                                  	<input class="" type="radio" name="batuklama" id="Negatif" checked value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
			                                <?php endif; ?>
											<input class="form-control col-md-9" type="text" name="ketbatuklama" value="<?= $ujikes->ketbatuklama ?>" placeholder="Keterangan" />
										</div>
									</div>
									<div class="form-group card card-body">
										<label for="sakitkuning">Sakit Kuning</label>
										<div class="form-inline">
											<?php if('Positif' == $ujikes->sakitkuning) : ?>
			                                  	<input class="" type="radio" name="sakitkuning" id="Positif" checked value="Positif"><label for="Positif" class="mr-5">Positif</label>
			                                  	<input class="" type="radio" name="sakitkuning" id="Negatif" value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
			                                <?php elseif('Negatif' == $ujikes->sakitkuning) : ?>
			                                    <input class="" type="radio" name="sakitkuning" id="Positif" value="Positif"><label for="Positif" class="mr-5">Positif</label>
			                                  	<input class="" type="radio" name="sakitkuning" id="Negatif" checked value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
			                                <?php endif; ?>
											<input class="form-control col-md-9" type="text" name="ketsakitkuning" value="<?= $ujikes->ketsakitkuning ?>" placeholder="Keterangan" />
										</div>
									</div>
									<div class="form-group card card-body">
										<label for="kecelakaan">Kecelakaan</label>
										<div class="form-inline">
											<?php if('Positif' == $ujikes->kecelakaan) : ?>
			                                  	<input class="" type="radio" name="kecelakaan" id="Positif" checked value="Positif"><label for="Positif" class="mr-5">Positif</label>
			                                  	<input class="" type="radio" name="kecelakaan" id="Negatif" value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
			                                <?php elseif('Negatif' == $ujikes->kecelakaan) : ?>
			                                    <input class="" type="radio" name="kecelakaan" id="Positif" value="Positif"><label for="Positif" class="mr-5">Positif</label>
			                                  	<input class="" type="radio" name="kecelakaan" id="Negatif" checked value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
			                                <?php endif; ?>
											<input class="form-control col-md-9" type="text" name="ketkecelakaan" value="<?= $ujikes->ketkecelakaan ?>" placeholder="Keterangan" />
										</div>
									</div>
									<div class="form-group card card-body">
										<label for="masukrs">Masuk Rumah Sakit</label>
										<div class="form-inline">
											<?php if('Positif' == $ujikes->masukrs) : ?>
			                                  	<input class="" type="radio" name="masukrs" id="Positif" checked value="Positif"><label for="Positif" class="mr-5">Positif</label>
			                                  	<input class="" type="radio" name="masukrs" id="Negatif" value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
			                                <?php elseif('Negatif' == $ujikes->masukrs) : ?>
			                                    <input class="" type="radio" name="masukrs" id="Positif" value="Positif"><label for="Positif" class="mr-5">Positif</label>
			                                  	<input class="" type="radio" name="masukrs" id="Negatif" checked value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
			                                <?php endif; ?>
											<input class="form-control col-md-9" type="text" name="ketmasukrs" value="<?= $ujikes->ketmasukrs ?>" placeholder="Keterangan" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12 mt-3">
											<a name="b" class="btn btn-success text-light float-right" onclick="nexttab('pemeriksaan')">Next</a>
										</div>
									</div>	
								</div>
								
								<div class="container tab-pane fade" id="pemeriksaan" role="tabpanel" aria-labelledby="pemeriksaan-tab">
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 1. Fisik Umum </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="tinggi">Tinggi Badan</label>
												<?php if('Normal' == $ujikes->tinggi) : ?>
				                                  	<input class="" type="radio" name="tinggi" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="tinggi" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->tinggi) : ?>
				                                    <input class="" type="radio" name="tinggi" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="tinggi" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="kettinggi" value="<?= $ujikes->kettinggi ?>" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="berat">Berat Badan</label>
												<?php if('Normal' == $ujikes->berat) : ?>
				                                  	<input class="" type="radio" name="berat" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="berat" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->berat) : ?>
				                                    <input class="" type="radio" name="berat" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="berat" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketberat" value="<?= $ujikes->ketberat ?>" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="tekanandarah">Tekanan Darah</label>
												<?php if('Normal' == $ujikes->tekanandarah) : ?>
				                                  	<input class="" type="radio" name="tekanandarah" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="tekanandarah" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->tekanandarah) : ?>
				                                    <input class="" type="radio" name="tekanandarah" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="tekanandarah" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="kettekanandarah" value="<?= $ujikes->kettekanandarah ?>" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="nadi">Nadi</label>
												<?php if('Normal' == $ujikes->nadi) : ?>
				                                  	<input class="" type="radio" name="nadi" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="nadi" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->nadi) : ?>
				                                    <input class="" type="radio" name="nadi" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="nadi" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketnadi" value="<?= $ujikes->ketnadi ?>" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="kulit">Kulit</label>
												<?php if('Normal' == $ujikes->kulit) : ?>
				                                  	<input class="" type="radio" name="kulit" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="kulit" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->kulit) : ?>
				                                    <input class="" type="radio" name="kulit" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="kulit" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketkulit" value="<?= $ujikes->ketkulit ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 2. Mata </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="fisikmata">Fisik</label>
												<?php if('Normal' == $ujikes->fisikmata) : ?>
				                                  	<input class="" type="radio" name="fisikmata" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="fisikmata" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->fisikmata) : ?>
				                                    <input class="" type="radio" name="fisikmata" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="fisikmata" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketfisikmata" value="<?= $ujikes->ketfisikmata ?>" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="visus">Visus</label>
												<?php if('Normal' == $ujikes->visus) : ?>
				                                  	<input class="" type="radio" name="visus" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="visus" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->visus) : ?>
				                                    <input class="" type="radio" name="visus" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="visus" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketvisus" value="<?= $ujikes->ketvisus ?>" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="butawarna">Buta Warna</label>
												<?php if('Normal' == $ujikes->butawarna) : ?>
				                                  	<input class="" type="radio" name="butawarna" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="butawarna" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->butawarna) : ?>
				                                    <input class="" type="radio" name="butawarna" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="butawarna" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketbutawarna" value="<?= $ujikes->ketbutawarna ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 3. Telinga </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="telingakanan">Kanan</label>
												<?php if('Normal' == $ujikes->telingakanan) : ?>
				                                  	<input class="" type="radio" name="telingakanan" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="telingakanan" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->telingakanan) : ?>
				                                    <input class="" type="radio" name="telingakanan" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="telingakanan" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="kettelingakanan" value="<?= $ujikes->kettelingakanan ?>" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="telingakiri">Kiri</label>
												<?php if('Normal' == $ujikes->telingakiri) : ?>
				                                  	<input class="" type="radio" name="telingakiri" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="telingakiri" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->telingakiri) : ?>
				                                    <input class="" type="radio" name="telingakiri" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="telingakiri" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="kettelingakiri" value="<?= $ujikes->kettelingakiri ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 4. Hidung </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="hidung">Hidung</label>
												<?php if('Normal' == $ujikes->hidung) : ?>
				                                  	<input class="" type="radio" name="hidung" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="hidung" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->hidung) : ?>
				                                    <input class="" type="radio" name="hidung" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="hidung" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="kethidung" value="<?= $ujikes->kethidung ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 5. Lidah </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="lidah">Lidah</label>
												<?php if('Normal' == $ujikes->lidah) : ?>
				                                  	<input class="" type="radio" name="lidah" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="lidah" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->lidah) : ?>
				                                    <input class="" type="radio" name="lidah" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="lidah" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketlidah" value="<?= $ujikes->ketlidah ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 6. Pharynx </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="pharynx">Pharynx</label>
												<?php if('Normal' == $ujikes->pharynx) : ?>
				                                  	<input class="" type="radio" name="pharynx" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="pharynx" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->pharynx) : ?>
				                                    <input class="" type="radio" name="pharynx" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="pharynx" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketpharynx" value="<?= $ujikes->ketpharynx ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 7. Tonsil </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="tonsil">Tonsil</label>
												<?php if('Normal' == $ujikes->tonsil) : ?>
				                                  	<input class="" type="radio" name="tonsil" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="tonsil" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->tonsil) : ?>
				                                    <input class="" type="radio" name="tonsil" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="tonsil" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="kettonsil" value="<?= $ujikes->kettonsil ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 8. Gigi </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="gigi">Gigi</label>
												<?php if('Normal' == $ujikes->gigi) : ?>
				                                  	<input class="" type="radio" name="gigi" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="gigi" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->gigi) : ?>
				                                    <input class="" type="radio" name="gigi" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="gigi" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketgigi" value="<?= $ujikes->ketgigi ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 9. Thyroid </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="thyroid">Thyroid</label>
												<?php if('Normal' == $ujikes->thyroid) : ?>
				                                  	<input class="" type="radio" name="thyroid" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="thyroid" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->thyroid) : ?>
				                                    <input class="" type="radio" name="thyroid" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="thyroid" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketthyroid" value="<?= $ujikes->ketthyroid ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 10. Jantung </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="jantung">Jantung</label>
												<?php if('Normal' == $ujikes->jantung) : ?>
				                                  	<input class="" type="radio" name="jantung" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="jantung" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->jantung) : ?>
				                                    <input class="" type="radio" name="jantung" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="jantung" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketjantung" value="<?= $ujikes->ketjantung ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 11. Paru-Paru </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="paruparu">Paru-paru</label>
												<?php if('Normal' == $ujikes->paruparu) : ?>
				                                  	<input class="" type="radio" name="paruparu" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="paruparu" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->paruparu) : ?>
				                                    <input class="" type="radio" name="paruparu" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="paruparu" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketparuparu" value="<?= $ujikes->ketparuparu ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 12. Abdoman </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="abdoman">Abdoman</label>
												<?php if('Normal' == $ujikes->abdoman) : ?>
				                                  	<input class="" type="radio" name="abdoman" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="abdoman" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->abdoman) : ?>
				                                    <input class="" type="radio" name="abdoman" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="abdoman" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketabdoman" value="<?= $ujikes->ketabdoman ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 13. Refleks </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="pupil">Pupil</label>
												<?php if('Normal' == $ujikes->pupil) : ?>
				                                  	<input class="" type="radio" name="pupil" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="pupil" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->pupil) : ?>
				                                    <input class="" type="radio" name="pupil" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="pupil" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketpupil" value="<?= $ujikes->ketpupil ?>" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="patella">Patella</label>
												<?php if('Normal' == $ujikes->patella) : ?>
				                                  	<input class="" type="radio" name="patella" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="patella" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->patella) : ?>
				                                    <input class="" type="radio" name="patella" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="patella" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketpatella" value="<?= $ujikes->ketpatella ?>" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="achiles">Achiles</label>
												<?php if('Normal' == $ujikes->achiles) : ?>
				                                  	<input class="" type="radio" name="achiles" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="achiles" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->achiles) : ?>
				                                    <input class="" type="radio" name="achiles" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="achiles" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketachiles" value="<?= $ujikes->ketachiles ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 14. Darah Lengkap + LED </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="darahlengkap">Darah Lengkap + LED</label>
												<?php if('Normal' == $ujikes->darahlengkap) : ?>
				                                  	<input class="" type="radio" name="darahlengkap" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="darahlengkap" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->darahlengkap) : ?>
				                                    <input class="" type="radio" name="darahlengkap" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="darahlengkap" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="ketdarahlengkap" value="<?= $ujikes->ketdarahlengkap ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 15. HbSAg </h6>
										</div>
										<div class="card-body">
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="hbsag">HbSAg</label>
												<?php if('Normal' == $ujikes->hbsag) : ?>
				                                  	<input class="" type="radio" name="hbsag" id="Normal" checked value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="hbsag" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php elseif('Abnormal' == $ujikes->hbsag) : ?>
				                                    <input class="" type="radio" name="hbsag" id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
				                                  	<input class="" type="radio" name="hbsag" id="Abnormal" checked value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
				                                <?php endif; ?>
												<input class="form-control col-md-5" type="text" name="kethbsag" value="<?= $ujikes->kethbsag ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 16. Tato </h6>
										</div>
										<div class="card-body">
											<div class="form-group offset-md-2">
												<label for="tato">Tato</label>
												<input class="form-control col-md-9" type="text" name="tato" value="<?= $ujikes->tato ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 17. Tindik </h6>
										</div>
										<div class="card-body">
											<div class="form-group offset-md-2">
												<label for="tindik">Tindik</label>
												<input class="form-control col-md-9" type="text" name="tindik" value="<?= $ujikes->tindik ?>" placeholder="Keterangan" />
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-header">
											<h6  align="center"> 18. Thorak Foto </h6>
										</div>
										<div class="card-body">
											<div class="form-group offset-md-2">
												<label for="thorakfoto">Thorak Foto</label>
												<input class="form-control col-md-9" type="text" name="thorakfoto" value="<?= $ujikes->thorakfoto ?>" placeholder="Keterangan" />
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
									<div class="form-group card card-body mt-3">
										<div class="form-inline mb-2">
											<label class="control-label col-md-3 offset-md-2" for="kesimpulan">Kesimpulan</label>
											<select class="form-control input-sm col-md-3" name="kesimpulan" id="kesimpulan">
												<?php foreach($kesimpulan as $ks) : ?>
			                                		<?php if($ks == $mahasiswa->kesimpulan) : ?>
			                                    		<option value="<?= $ks; ?>" selected><?= $ks; ?></option>
			                                      	<?php else : ?>
			                                    		<option value="<?= $ks; ?>"><?= $ks; ?></option>
			                                    	<?php endif; ?>
			                                    <?php endforeach; ?>
											</select>
										</div>
											<input class="form-control col-md-8 offset-md-2" type="text" name="ketkesimpulan" value="<?= $ujikes->ketkesimpulan ?>" placeholder="Keterangan" />
									</div>
									<div class="form-group card card-body mt-3">
										<div class="form-inline mb-2">
											<label class="control-label col-md-3 offset-md-2" for="rekomendasi">Rekomendasi</label>
											<input class="form-control col-md-8 offset-md-2" type="text" name="rekomendasi" value="<?= $ujikes->rekomendasi ?>" placeholder="Keterangan" />
										</div>
											
									</div>

									<input class="btn btn-success float-right mr-2" type="submit" name="btn" value="Save" />
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