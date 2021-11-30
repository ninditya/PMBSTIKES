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
						<form action="<?php base_url('ujikesehatan/inputUjikes') ?>" method="post" enctype="multipart/form-data">
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
												<input type="text" name="pmbid" class="form-control col-md-8 <?php echo form_error('pmbid') ? 'is-invalid':'' ?>">
												<div class="invalid-feedback">
													<?php echo form_error('pmbid') ?>
												</div>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="namalengkap">Nama Calon Mahasiswa*</label>
												<input type="text" name="namalengkap" class="form-control col-md-8 <?php echo form_error('namalengkap') ? 'is-invalid':'' ?>">
												<div class="invalid-feedback">
													<?php echo form_error('namalengkap') ?>
												</div>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="jeniskelamin">Jenis Kelamin*</label><br>
												<input class="" type="radio" name="jeniskelamin" id="Pria" value="Pria"><label for="Pria" class="mr-5">Pria</label>
												<input class="" type="radio" name="jeniskelamin" id="Wanita" checked value="Wanita"><label for="Wanita" class="mr-5">Wanita</label>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="umur">Umur*</label>
												<input class="form-control col-md-8 <?php echo form_error('umur') ? 'is-invalid':'' ?>" type="text" name="umur" autocomplete="off"/>
												<div class="invalid-feedback">
													<?php echo form_error('umur') ?>
												</div>
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="tanggaltest">Tanggal Test*</label>
												<input class="form-control col-md-4" type="date" name="tanggaltest"/>
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
											<input class="" type="radio" name="sakitlama" id="Positif" value="Positif"><label for="Positif" class="mr-5">Positif</label>
											<input class="" type="radio" name="sakitlama" checked id="Negatif" value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
											<input class="form-control col-md-9" type="text" name="ketsakitlama" placeholder="Keterangan" />
										</div>
									</div>
									<div class="form-group card card-body">
										<label for="batuklama">Batuk Lama</label>
										<div class="form-inline">
											<input class="" type="radio" name="batuklama" id="Positif" value="Positif"><label for="Positif" class="mr-5">Positif</label>
											<input class="" type="radio" name="batuklama" checked id="Negatif" value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
											<input class="form-control col-md-9" type="text" name="ketbatuklama" placeholder="Keterangan" />
										</div>
									</div>
									<div class="form-group card card-body">
										<label for="sakitkuning">Sakit Kuning</label>
										<div class="form-inline">
											<input class="" type="radio" name="sakitkuning" id="Positif" value="Positif"><label for="Positif" class="mr-5">Positif</label>
											<input class="" type="radio" name="sakitkuning" checked id="Negatif" value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
											<input class="form-control col-md-9" type="text" name="ketsakitkuning" placeholder="Keterangan" />
										</div>
									</div>
									<div class="form-group card card-body">
										<label for="kecelakaan">Kecelakaan</label>
										<div class="form-inline">
											<input class="" type="radio" name="kecelakaan" id="Positif" value="Positif"><label for="Positif" class="mr-5">Positif</label>
											<input class="" type="radio" name="kecelakaan" checked id="Negatif" value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
											<input class="form-control col-md-9" type="text" name="ketkecelakaan" placeholder="Keterangan" />
										</div>
									</div>
									<div class="form-group card card-body">
										<label for="masukrs">Masuk Rumah Sakit</label>
										<div class="form-inline">
											<input class="" type="radio" name="masukrs" id="Positif" value="Positif"><label for="Positif" class="mr-5">Positif</label>
											<input class="" type="radio" name="masukrs" checked id="Negatif" value="Negatif"><label for="Negatif" class="mr-5">Negatif</label>
											<input class="form-control col-md-9" type="text" name="ketmasukrs" placeholder="Keterangan" />
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
												<input class="" type="radio" name="tinggi" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="tinggi" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="kettinggi" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="berat">Berat Badan</label>
												<input class="" type="radio" name="berat" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="berat" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketberat" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="tekanandarah">Tekanan Darah</label>
												<input class="" type="radio" name="tekanandarah" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="tekanandarah" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="kettekanandarah" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="nadi">Nadi</label>
												<input class="" type="radio" name="nadi" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="nadi" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketnadi" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="kulit">Kulit</label>
												<input class="" type="radio" name="kulit" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="kulit" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketkulit" placeholder="Keterangan" />
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
												<input class="" type="radio" name="fisikmata" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="fisikmata" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketfisikmata" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="visus">Visus</label>
												<input class="" type="radio" name="visus" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="visus" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketvisus" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="butawarna">Buta Warna</label>
												<input class="" type="radio" name="butawarna" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="butawarna" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketbutawarna" placeholder="Keterangan" />
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
												<input class="" type="radio" name="telingakanan" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="telingakanan" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="kettelingakanan" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="telingakiri">Kiri</label>
												<input class="" type="radio" name="telingakiri" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="telingakiri" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="kettelingakiri" placeholder="Keterangan" />
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
												<input class="" type="radio" name="hidung" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="hidung" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="kethidung" placeholder="Keterangan" />
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
												<input class="" type="radio" name="lidah" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="lidah" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketlidah" placeholder="Keterangan" />
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
												<input class="" type="radio" name="pharynx" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="pharynx" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketpharynx" placeholder="Keterangan" />
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
												<input class="" type="radio" name="tonsil" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="tonsil" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="kettonsil" placeholder="Keterangan" />
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
												<input class="" type="radio" name="gigi" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="gigi" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketgigi" placeholder="Keterangan" />
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
												<input class="" type="radio" name="thyroid" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="thyroid" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketthyroid" placeholder="Keterangan" />
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
												<input class="" type="radio" name="jantung" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="jantung" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketjantung" placeholder="Keterangan" />
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
												<input class="" type="radio" name="paruparu" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="paruparu" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketparuparu" placeholder="Keterangan" />
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
												<input class="" type="radio" name="abdoman" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="abdoman" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketabdoman" placeholder="Keterangan" />
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
												<input class="" type="radio" name="pupil" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="pupil" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketpupil" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="patella">Patella</label>
												<input class="" type="radio" name="patella" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="patella" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketpatella" placeholder="Keterangan" />
											</div>
											<div class="form-group form-inline">
												<label class="control-label col-md-3" for="achiles">Achiles</label>
												<input class="" type="radio" name="achiles" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="achiles" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketachiles" placeholder="Keterangan" />
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
												<input class="" type="radio" name="darahlengkap" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="darahlengkap" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="ketdarahlengkap" placeholder="Keterangan" />
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
												<input class="" type="radio" name="hbsag" checked id="Normal" value="Normal"><label for="Normal" class="mr-5">Normal</label>
												<input class="" type="radio" name="hbsag" id="Abnormal" value="Abnormal"><label for="Abnormal" class="mr-5">Abnormal</label>
												<input class="form-control col-md-5" type="text" name="kethbsag" placeholder="Keterangan" />
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
												<input class="form-control col-md-9" type="text" name="tato" placeholder="Keterangan" />
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
												<input class="form-control col-md-9" type="text" name="tindik" placeholder="Keterangan" />
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
												<input class="form-control col-md-9" type="text" name="thorakfoto" placeholder="Keterangan" />
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
												<?php foreach($kesimpulan as $a) : ?>
			                                   	 	<option value="<?= $a; ?>"><?= $a; ?></option>
			                                    <?php endforeach; ?>
											</select>
										</div>
											<input class="form-control col-md-8 offset-md-2" type="text" name="ketkesimpulan" placeholder="Keterangan" />
									</div>
									<div class="form-group card card-body mt-3">
										<div class="form-inline mb-2">
											<label class="control-label col-md-3 offset-md-2" for="rekomendasi">Rekomendasi</label>
											<input class="form-control col-md-8 offset-md-2" type="text" name="rekomendasi" placeholder="Keterangan" />
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