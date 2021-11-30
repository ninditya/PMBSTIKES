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
						<a href="<?php echo site_url('calonmahasiswa/list') ?>" class="btn"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<form action="<?php base_url('calonmahasiswa/inputData') ?>" method="post" enctype="multipart/form-data" >
							<ul class="nav nav-pills nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
								    <a class="nav-link active" id="peminatan-tab" data-toggle="tab" href="#peminatan" role="tab" aria-controls="peminatan" aria-selected="true">Peminatan</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="biodata-tab" data-toggle="tab" href="#biodata" role="tab" aria-controls="biodata" aria-selected="true">Data Calon Mahasiswa</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="pendidikan-tab" data-toggle="tab" href="#pendidikan" role="tab" aria-controls="pendidikan" aria-selected="false">Pendidikan Terakhir</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="ortu-tab" data-toggle="tab" href="#ortu" role="tab" aria-controls="ortu" aria-selected="false">Data Orangtua</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="seleksi-tab" data-toggle="tab" href="#seleksi" role="tab" aria-controls="contact" aria-selected="false">Seleksi</a>
								</li>
								<li class="nav-item">
								    <a class="nav-link" id="seleksi-tab" data-toggle="tab" href="#berkas" role="tab" aria-controls="contact" aria-selected="false">Berkas</a>
								</li>
							</ul>

							<div class="tab-content" id="myTabContent">
								<div class="container tab-pane fade show active" id="peminatan" role="tabpanel" aria-labelledby="peminatan-tab">
									<div class="form-group mt-3">
										<label for="tanggal">Tanggal Pendaftaran*</label>
										<input class="form-control col-md-4 <?php echo form_error('tanggal') ? 'is-invalid':'' ?>" type="date" name="tanggal"/>
										<div class="invalid-feedback">
											<?php echo form_error('tanggal') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="pmbid">Nomor Pendaftaran*</label>
										<input class="form-control <?php echo form_error('pmbid') ? 'is-invalid':'' ?>" type="text" name="pmbid" autocomplete="off"/>
										<div class="invalid-feedback">
											<?php echo form_error('pmbid') ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label">Pilihan Prodi*</label>
		                                <select class="form-control input-sm col-md-4 <?php echo form_error('pilihanprodi') ? 'is-invalid':'' ?>" name="pilihanprodi">
		                                	<option value="">-- Pilih --</option>
			                                    <?php 
													foreach ($prodi as $pr) {
														echo "<option value='$pr[prodi]'>$pr[prodi]</option>";
													}
												?>
		                                </select>
		                                <div class="invalid-feedback">
											<?php echo form_error('pilihanprodi') ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label">Jalur Pendaftaran</label>
		                                <select class="form-control input-sm col-md-4" name="jalur">
											<option value="">-- Pilih --</option>
			                                <?php 
												foreach ($jalur as $jr) {
													echo "<option value='$jr[jalur]'>$jr[jalur]</option>";
												}
											?>
		                                </select>
									</div>

									<div class="form-group">
										<label class="control-label">Gelombang</label>
		                                <select class="form-control input-sm col-md-4" name="gelombang">
											<option value="">-- Pilih --</option>
			                                <?php 
												foreach ($gelombang as $gl) {
													echo "<option value='$gl[gelombang]'>$gl[gelombang]</option>";
												}
											?>
		                                </select>
									</div>

									<div class="form-group">
										<label for="tahap">Tahap*</label>
										<input class="form-control <?php echo form_error('tahap') ? 'is-invalid':'' ?>" type="text" name="tahap" autocomplete="off"/>
										<div class="invalid-feedback">
											<?php echo form_error('tahap') ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label">Tahun Ajaran Masuk</label>
		                                <select class="form-control input-sm col-md-4" name="tahunmasuk">
											<option value="">-- Pilih --</option>
			                                <?php 
												foreach ($tahunmasuk as $tm) {
													echo "<option value='$tm[tahunmasuk]'>$tm[tahunmasuk]</option>";
												}
											?>
		                                </select>
									</div>

									<div class="form-group">
										<label for="sumbangan">Sumbangan*</label>
										<input class="form-control <?php echo form_error('sumbangan') ? 'is-invalid':'' ?>" type="number" name="sumbangan" placeholder="Rp" autocomplete="off"/>
										<div class="invalid-feedback">
											<?php echo form_error('sumbangan') ?>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12 mt-3">
											<a name="b" class="btn btn-success text-light float-right" onclick="nexttab('biodata')">Next</a>
										</div>
									</div>
								</div>

								<div class="container tab-pane fade" id="biodata" role="tabpanel" aria-labelledby="biodata-tab">
									<div class="form-group mt-3">
										<label for="namalengkap">Nama Lengkap*</label>
										<input class="form-control <?php echo form_error('namalengkap') ? 'is-invalid':'' ?>" type="text" name="namalengkap" autocomplete="off"/>
										<div class="invalid-feedback">
											<?php echo form_error('namalengkap') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="foto">Foto</label>
										<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" type="file" name="foto" />
										<div class="invalid-feedback">
											<?php echo form_error('foto') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="ttl">Tempat, Tanggal Lahir*</label>
										<div class="form-inline">
											<input class="form-control col-md-4 mr-3<?php echo form_error('tempatlahir') ? 'is-invalid':'' ?>" type="text" name="tempatlahir" autocomplete="off"/>
											<div class="invalid-feedback">
												<?php echo form_error('tempatlahir') ?>
											</div>
											<input class="form-control col-md-4 <?php echo form_error('tanggallahir') ? 'is-invalid':'' ?>" type="date" name="tanggallahir"/>
											<div class="invalid-feedback">
												<?php echo form_error('tanggallahir') ?>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="jeniskelamin">Jenis Kelamin*</label><br>
										<input class="" type="radio" name="jeniskelamin" id="Pria" value="Pria"><label for="Pria" class="mr-5">Pria</label>
										<input class="" type="radio" name="jeniskelamin" id="Wanita" checked value="Wanita"><label for="Wanita" class="mr-5">Wanita</label>
									</div>

									<div class="form-group">
										<label for="tinggi">Tinggi Badan</label>
										<div class="form-inline">
											<input class="form-control col-md-4 mr-2" type="text" name="tinggi" autocomplete="off"/>
											<h6>cm</h6>
										</div>
									</div>

									<div class="form-group">
										<label for="berat">Berat Badan</label>
										<div class="form-inline">
											<input class="form-control col-md-4 mr-2" type="text" name="berat" autocomplete="off"/>
											<h6>Kg</h6>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label">Agama*</label>
		                                <select class="form-control input-sm col-md-4" name="agama">
		                                    <?php foreach($agama as $a) : ?>
		                                   	 <option value="<?= $a; ?>"><?= $a; ?></option>
		                                    <?php endforeach; ?>
		                                </select>
									</div>

									<div class="form-group">
										<label for="kewarganegaraan">Kewarganegaraan</label><br>
										<input class="" type="radio" name="kewarganegaraan" id="WNI" checked value="WNI"><label for="WNI" class="mr-5">WNI</label>
										<input class="" type="radio" name="kewarganegaraan" id="WNA" value="WNA"><label for="WNA" class="mr-5">WNA</label>
									</div>

									<div class="form-group">
										<label for="jalan">Alamat*</label>
										<textarea class="form-control <?php echo form_error('jalan') ? 'is-invalid':'' ?>" name="jalan"></textarea>
										<div class="invalid-feedback">
											<?php echo form_error('jalan') ?>
										</div>
									</div>

									<div class="row">
										<label class="col-md-5 control-label">Provinsi</label>
										<label class="col-md-5 control-label" for="kabupaten">Kabupaten/Kota</label>
									</div>

									<div class="row mb-3">
										<div class="col-md-4">
											<select class="form-control input-sm" name="provinsi" id='provinsi'>
			                                  	<option value="">-- Pilih --</option>
			                                  	<?php 
													foreach ($provinsi as $prov) {
														echo "<option value='$prov[id]'>$prov[name]</option>";
													}
												?>
			                                </select>
		                            	</div>
		                                <div class="col-md-4 offset-md-1">
		                                	<select class='form-control input-sm' id='kabupaten-kota' name="kabupaten">
												<option value='0'>-- Pilih --</option>
											</select>
											<div class="invalid-feedback">
												<?php echo form_error('kabupaten') ?>
											</div>
		                                </div>
									</div>

									<div class="form-group">
										<label for="kodepos">Kode Pos</label>
										<input class="form-control col-md-4 <?php echo form_error('kodepos') ? 'is-invalid':'' ?>" type="number" name="kodepos" autocomplete="off"/>
										<div class="invalid-feedback">
											<?php echo form_error('kodepos') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="notelpon">No. Telepon/HP*</label>
										<input class="form-control <?php echo form_error('notelpon') ? 'is-invalid':'' ?>" type="text" name="notelpon" autocomplete="off"/>
										<div class="invalid-feedback">
											<?php echo form_error('notelpon') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="email">Email</label>
										<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" type="email" name="email" placeholder="example@email.com" autocomplete="off"/>
										<div class="invalid-feedback">
											<?php echo form_error('email') ?>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12 mt-3">
											<a name="b" class="btn btn-success text-light float-right" onclick="nexttab('pendidikan')">Next</a>
										</div>
									</div>
								</div>

								<div class="container tab-pane fade" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
									<div class="form-group mt-3">
										<label for="asalsekolah">Asal Sekolah</label>
										<input class="form-control" type="text" name="asalsekolah" autocomplete="off"/>
									</div>

									<div class="form-group">
										<label for="jurusan">Jurusan Sekolah</label>
										<input class="form-control" type="text" name="jurusan" autocomplete="off"/>
									</div>

									<div class="form-group">
										<label for="jalansekolah">Alamat Sekolah</label>
										<textarea class="form-control <?php echo form_error('jalansekolah') ? 'is-invalid':'' ?>" name="jalansekolah"></textarea>
									</div>

									<div class="row">
										<label class="col-md-5 control-label">Provinsi</label>
										<label class="col-md-5 control-label" for="kabupaten">Kabupaten/Kota</label>
									</div>

									<div class="row mb-3">
										<div class="col-md-4">
											<select class="form-control input-sm" name="provinsisekolah" id='provinsisekolah'>
			                                  	<option value="">-- Pilih --</option>
			                                    <?php 
													foreach ($provinsi as $prov) {
														echo "<option value='$prov[id]'>$prov[name]</option>";
													}
												?>
			                                </select>
		                            	</div>
		                                <div class="col-md-4 offset-md-1">
		                                	<select class='form-control input-sm' id='kabupaten-kotasekolah' name="kabupatensekolah">
												<option value='0'>-- Pilih --</option>
											</select>
											<div class="invalid-feedback">
												<?php echo form_error('kabupaten') ?>
											</div>
		                                </div>
									</div>

									<div class="form-group">
										<label class="control-label">Tahun Lulus</label>
		                                <select class="form-control input-sm col-md-4" name="tahunlulus">
											<option value="">-- Pilih --</option>
			                                <?php 
												foreach ($tahunlulus as $tl) {
													echo "<option value='$tl[tahunlulus]'>$tl[tahunlulus]</option>";
												}
											?>
		                                </select>
									</div>
									<div class="form-group">
										<div class="col-md-12 mt-3">
											<a name="b" class="btn btn-success text-light float-right" onclick="nexttab('ortu')">Next</a>
										</div>
									</div>
								</div>

								<div class="container tab-pane fade" id="ortu" role="tabpanel" aria-labelledby="ortu-tab">
									<div class="form-group mt-3">
										<label for="namawali">Nama Ayah</label>
										<input class="form-control" type="text" name="namawali" autocomplete="off"/>
									</div>

									<div class="form-group">
										<label for="namaibukandung">Nama Ibu</label>
										<input class="form-control" type="text" name="namaibukandung" autocomplete="off"/>
									</div>

									<div class="form-group">
										<label for="jalanwali">Alamat Orangtua</label>
										<textarea class="form-control <?php echo form_error('jalanwali') ? 'is-invalid':'' ?>" name="jalanwali"></textarea>
									</div>

									<div class="row">
										<label class="col-md-5 control-label">Provinsi</label>
										<label class="col-md-5 control-label" for="kabupaten">Kabupaten/Kota</label>
									</div>

									<div class="row mb-3">
										<div class="col-md-4">
											<select class="form-control input-sm" name="provinsiwali" id='provinsiwali'>
		                                    	<option value="">-- Pilih --</option>
		                                    	<?php 
													foreach ($provinsi as $prov) {
														echo "<option value='$prov[id]'>$prov[name]</option>";
													}
												?>
		                                    </select>
		                            	</div>
		                                <div class="col-md-4 offset-md-1">
		                                	<select class='form-control input-sm' id='kabupaten-kotawali' name="kabupatenwali">
												<option value='0'>-- Pilih --</option>
											</select>
											<div class="invalid-feedback">
												<?php echo form_error('kabupaten') ?>
											</div>
		                                </div>
									</div>

									<div class="form-group">
										<label for="pekerjaanwali">Pekerjaan Orangtua</label>
										<input class="form-control" type="text" name="pekerjaanwali" autocomplete="off"/>
									</div>

									<div class="form-group">
										<label for="notelponwali">No. Telepon/HP Orangtua</label>
										<input class="form-control" type="text" name="notelponwali" autocomplete="off"/>
									</div>
									<div class="form-group">
										<div class="col-md-12 mt-3">
											<a name="b" class="btn btn-success text-light float-right" onclick="nexttab('seleksi')">Next</a>
										</div>
									</div>
								</div>

								<div class="container tab-pane fade" id="seleksi" role="tabpanel" aria-labelledby="seleksi-tab">
									<div class="form-group mt-3">
										<label for="ujikes">Uji Kesehatan</label>
										<select class="form-control input-sm col-md-4" name="ujikes">
											<option value="">-- Pilih --</option>
			                                <?php 
												foreach ($seleksi as $uk) {
													echo "<option value='$uk[seleksi]'>$uk[seleksi]</option>";
												}
											?>
		                                </select>
									</div>

									<div class="form-group">
										<label for="tpa">TPA</label>
										<select class="form-control input-sm col-md-4" name="tpa">
											<option value="">-- Pilih --</option>
			                                <?php 
												foreach ($seleksi as $uk) {
													echo "<option value='$uk[seleksi]'>$uk[seleksi]</option>";
												}
											?>
		                                </select>
									</div>

									<div class="form-group">
										<label for="wawancara">Wawancara</label>
										<input class="form-control <?php echo form_error('wawancara') ? 'is-invalid':'' ?>" type="text" name="wawancara" autocomplete="off"/>
										<div class="invalid-feedback">
											<?php echo form_error('wawancara') ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label">Pewawancara</label>
		                                    <select class="form-control input-sm col-md-4" name="pewawancara"">
												<option value="">-- Pilih --</option>
			                                    <?php 
													foreach ($pewawancara as $pw) {
														echo "<option value='$pw[nama]'>$pw[nama]</option>";
													}
												?>
		                                  	</select>
									</div>

									<div class="form-group">
										<label for="hasil">Hasil</label>
										<input class="form-control <?php echo form_error('hasil') ? 'is-invalid':'' ?>" type="text" name="hasil"/>
										<div class="invalid-feedback">
											<?php echo form_error('hasil') ?>
										</div>
									</div>
									<input class="btn btn-success float-right mr-2" onclick="nexttab('berkas')"/>
									<!-- <a name="b" class="btn btn-success text-light float-right" onclick="nexttab('berkas')">Next</a> -->
								</div>
								<div class="container tab-pane fade" id="berkas" role="tabpanel" aria-labelledby="berkas-tab">
									<div class="form-group">
										<label for="kk">Berkas Kartu Keluarga </label>
                            			<input class="form-control-file" type="file" name="kk" >
                            		</div>
                            		<div class="form-group">
                        			    <label for="ijazah">Berkas Ijazah </label>
                        			    <input class="form-control-file" type="file" name="ijazah" >
                        			</div>
                        			<div class="form-group">
                            			<label for="skck">Berkas SKCK </label>
                            			<input class="form-control-file" type="file" name="skck" >
                        			</div>
                        			<div class="form-group">
                            			<label for="pernyataan">Berkas Pernyataan </label>
                            			<input class="form-control-file" type="file" name="pernyataan" >
									</div>

									<input class="btn btn-success float-right mr-2" type="submit" name="btn"  value="INPUT"/>
									</form>
								</div>
							</div>
						

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


<script type="text/javascript">
function nexttab(hrf){
	$('a[href="#'+hrf+'"]').tab('show') ;
}

$(function(){
	$.ajaxSetup({
		type:"POST",
		url: "<?php echo base_url('calonmahasiswa/ambil_data') ?>",
		cache: false,
	});

	$("#provinsi").change(function() {
		var value = $(this).val();
		if(value>0) {
			$.ajax({
				data:{modul:'kabupaten',id:value},
				success: function(respond){
					$("#kabupaten-kota").html(respond);
				}
			})
		}

	});

	$("#provinsisekolah").change(function() {
		var value = $(this).val();
		if(value>0) {
			$.ajax({
				data:{modul:'kabupaten',id:value},
				success: function(respond){
					$("#kabupaten-kotasekolah").html(respond);
				}
			})
		}

	});

	$("#provinsiwali").change(function() {
		var value = $(this).val();
		if(value>0) {
			$.ajax({
				data:{modul:'kabupaten',id:value},
				success: function(respond){
					$("#kabupaten-kotawali").html(respond);
				}
			})
		}
	});
});

</script>

</body>

</html>