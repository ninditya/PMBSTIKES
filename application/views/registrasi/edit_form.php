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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('calonmahasiswa/list') ?>" class="btn"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('calonmahasiswa/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?= $mahasiswa->id?>" />

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
								    <a class="nav-link" id="seleksi-tab" data-toggle="tab" href="#seleksi" role="tab" aria-controls="contact" aria-selected="false">Seleksi dan Simpan Data</a>
								</li>
							</ul>

							<div class="tab-content" id="myTabContent">
								<div class="container tab-pane fade show active" id="peminatan" role="tabpanel" aria-labelledby="peminatan-tab">
									<div class="form-group mt-3">
										<label for="tanggal">Tanggal Pendaftaran*</label>
										<input class="form-control col-md-4" type="date" name="tanggal" value="<?= $mahasiswa->tanggal ?>"/>
									</div>

									<div class="form-group">
										<label for="pmbid">Nomor Pendaftaran*</label>
										<input class="form-control" type="text" name="pmbid" value="<?= $mahasiswa->pmbid ?>" />
									</div>

									<div class="form-group">
										<label class="control-label">Pilihan Prodi*</label>
		                                <select class="form-control input-sm col-md-4" name="pilihanprodi">
		                                    <option value="">--Pilih--</option>
		                                  	<?php foreach($pilihanprodi as $pp) : ?>
		                                  		<?php if($pp == $mahasiswa->pilihanprodi) : ?>
		                                      		<option value="<?= $pp; ?>" selected><?= $pp; ?></option>
		                                      <?php else : ?>
		                                      		<option value="<?= $pp; ?>"><?= $pp; ?></option>
		                                      <?php endif; ?>
		                                  	<?php endforeach; ?>
		                                </select>
									</div>

									<div class="form-group">
										<label class="control-label">Jalur Pendaftaran</label>
	                                    <select class="form-control input-sm col-md-4" name="jalur">
	                                    	<option value="">-- Pilih --</option>
	                                    	<?php 
												foreach ($jalur as $jr) {
													if($jr[jalur] == $mahasiswa->jalur) {
														echo "<option value='$jr[jalur]' selected >$jr[jalur]</option>";
													}
													else {
														echo "<option value='$jr[jalur]'>$jr[jalur]</option>";
													}
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
													if($gl[gelombang] == $mahasiswa->gelombang) {
														echo "<option value='$gl[gelombang]' selected >$gl[gelombang]</option>";
													}
													else {
														echo "<option value='$gl[gelombang]'>$gl[gelombang]</option>";
													}
												}
											?>
	                                  	</select>
									</div>

									<div class="form-group">
										<label for="tahap">Tahap*</label>
										<input class="form-control" type="text" name="tahap" value="<?= $mahasiswa->tahap ?>"/>
									</div>

									<div class="form-group">
										<label class="control-label">Tahun Ajaran Masuk</label>
	                                    <select class="form-control input-sm col-md-4" name="tahunmasuk">
	                                    	<option value="">-- Pilih --</option>
	                                    	<?php 
												foreach ($tahunmasuk as $tl) {
													if($tl[tahunmasuk] == $mahasiswa->tahunmasuk) {
														echo "<option value='$tl[tahunmasuk]' selected >$tl[tahunmasuk]</option>";
													}
													else {
														echo "<option value='$tl[tahunmasuk]'>$tl[tahunmasuk]</option>";
													}
												}
											?>
	                                  	</select>
									</div>

									<div class="form-group">
										<label for="sumbangan">Sumbangan*</label>
										<input class="form-control <?php echo form_error('sumbangan') ? 'is-invalid':'' ?>" type="number" name="sumbangan" placeholder="Rp" value="<?php echo $mahasiswa->sumbangan ?>"/>
										<div class="invalid-feedback">
											<?php echo form_error('sumbangan') ?>
										</div>
									</div>
								</div>

								<div class="container tab-pane fade" id="biodata" role="tabpanel" aria-labelledby="biodata-tab">
									<div class="form-group mt-3">
										<label for="namalengkap">Nama Lengkap*</label>
										<input class="form-control <?php echo form_error('namalengkap') ? 'is-invalid':'' ?>" type="text" name="namalengkap" value="<?php echo $mahasiswa->namalengkap ?>"/>
										<div class="invalid-feedback">
											<?php echo form_error('namalengkap') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="foto">Foto</label>
										<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" type="file" name="foto" />
										<input type="hidden" name="old_image" value="<?php echo $mahasiswa->foto ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('foto') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="ttl">Tempat, Tanggal Lahir*</label>
										<div class="form-inline">
											<input class="form-control col-md-4 mr-3<?php echo form_error('tempatlahir') ? 'is-invalid':'' ?>" type="text" name="tempatlahir" value="<?php echo $mahasiswa->tempatlahir ?>"/>
											<div class="invalid-feedback">
												<?php echo form_error('namalengkap') ?>
											</div>
											<input class="form-control col-md-4" type="date" name="tanggallahir" value="<?php echo $mahasiswa->tanggallahir ?>"/>
										</div>
									</div>

									<div class="form-group">
										<label for="jeniskelamin">Jenis Kelamin*</label><br>
	                                  	<?php if('Pria' == $mahasiswa->jeniskelamin) : ?>
	                                  		<input class="" type="radio" name="jeniskelamin" id="Pria" checked value="Pria"><label for="Pria" class="mr-5">Pria</label>
	                                  		<input class="" type="radio" name="jeniskelamin" id="Wanita" value="Wanita"><label for="Wanita" class="mr-5">Wanita</label>
	                                    <?php elseif('Wanita' == $mahasiswa->jeniskelamin) : ?>
	                                    	<input class="" type="radio" name="jeniskelamin" id="Pria" value="Pria"><label for="Pria" class="mr-5">Pria</label>
	                                  		<input class="" type="radio" name="jeniskelamin" id="Wanita" checked value="Wanita"><label for="Wanita" class="mr-5">Wanita</label>
	                                    <?php endif; ?>
									</div>

									<div class="form-group">
										<label for="tinggi">Tinggi Badan</label>
										<div class="form-inline">
											<input class="form-control col-md-4 mr-2" type="text" name="tinggi" value="<?php echo $mahasiswa->tinggi ?>" />
											<h6>cm</h6>
										</div>
									</div>

									<div class="form-group">
										<label for="berat">Berat Badan</label>
										<div class="form-inline">
											<input class="form-control col-md-4 mr-2" type="text" name="berat" value="<?php echo $mahasiswa->berat ?>" />
											<h6>Kg</h6>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label">Agama*</label>
		                                <select class="form-control input-sm col-md-4" name="agama"">
		                                    <?php foreach($agama as $a) : ?>
		                                		<?php if($a == $mahasiswa->agama) : ?>
		                                    		<option value="<?= $a; ?>" selected><?= $a; ?></option>
		                                      	<?php else : ?>
		                                    		<option value="<?= $a; ?>"><?= $a; ?></option>
		                                    	<?php endif; ?>
		                                    <?php endforeach; ?>
		                                </select>
									</div>

									<div class="form-group">
										<label for="kewarganegaraan">Kewarganegaraan</label><br>
										<?php if('WNI' == $mahasiswa->kewarganegaraan) : ?>
		                              		<input class="" type="radio" name="kewarganegaraan" id="WNI" checked value="WNI"><label for="WNI" class="mr-5">WNI</label>
		                              		<input class="" type="radio" name="kewarganegaraan" id="WNA" value="WNA"><label for="WNA" class="mr-5">WNA</label>
		                                <?php elseif('WNA' == $mahasiswa->kewarganegaraan) : ?>
		                                	<input class="" type="radio" name="kewarganegaraan" id="WNI" value="WNI"><label for="WNI" class="mr-5">WNI</label>
		                              		<input class="" type="radio" name="kewarganegaraan" id="WNA" checked value="WNA">WNA
		                                <?php endif; ?>
									</div>

									<div class="form-group">
										<label for="jalan">Alamat*</label>
										<textarea class="form-control <?php echo form_error('jalan') ? 'is-invalid':'' ?>" name="jalan"><?php echo $mahasiswa->jalan ?></textarea>
										<div class="invalid-feedback">
											<?php echo form_error('jalan') ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label">Provinsi</label>
	                                    <select class="form-control input-sm col-md-4" name="provinsi" id='provinsi'>
	                                    	<option value="">-- Pilih --</option>
	                                    	<?php 
												foreach ($provinsi as $prov) {
													if($prov[id] == $mahasiswa->provinsi) {
														echo "<option value='$prov[id]' selected >$prov[name]</option>";
													}
													else {
														echo "<option value='$prov[id]'>$prov[name]</option>";
													}
												}
											?>
	                                    </select>
		                            </div>

									<div class="form-group">
										<label for="kabupaten">Kabupaten/Kota</label>
										<select class='form-control input-sm col-md-4' id='kabupaten-kota' name="kabupaten">
											<option value='0'>-- Pilih --</option>
										</select>
										<div class="invalid-feedback">
											<?php echo form_error('kabupaten') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="kodepos">Kode Pos</label>
										<input class="form-control <?php echo form_error('kodepos') ? 'is-invalid':'' ?>" type="number" name="kodepos" value="<?php echo $mahasiswa->kodepos ?>"/>
										<div class="invalid-feedback">
											<?php echo form_error('kodepos') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="notelpon">No. Telepon/HP*</label>
										<input class="form-control <?php echo form_error('notelpon') ? 'is-invalid':'' ?>" type="text" name="notelpon" value="<?php echo $mahasiswa->notelpon ?>"/>
										<div class="invalid-feedback">
											<?php echo form_error('notelpon') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="email">Email</label>
										<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" type="email" name="email" placeholder="example@email.com" value="<?= $mahasiswa->email ?>"/>
										<div class="invalid-feedback">
											<?php echo form_error('email') ?>
										</div>
									</div>
								</div>

								<div class="container tab-pane fade" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
									<div class="form-group mt-3">
										<label for="asalsekolah">Asal Sekolah</label>
										<input class="form-control" type="text" name="asalsekolah" value="<?php echo $mahasiswa->asalsekolah ?>"/>
									</div>

									<div class="form-group">
										<label for="jurusan">Jurusan Sekolah</label>
										<input class="form-control" type="text" name="jurusan" value="<?php echo $mahasiswa->jurusan ?>"/>
									</div>

									<div class="form-group">
										<label for="jalansekolah">Alamat Sekolah</label>
										<input class="form-control" type="text" name="jalansekolah" value="<?php echo $mahasiswa->jalansekolah ?>"/>
									</div>

									<div class="form-group">
										<label class="control-label">Provinsi Sekolah</label>
		                                <select class="form-control input-sm col-md-4" name="provinsisekolah" id='provinsisekolah'>
		                                  	<option value="">-- Pilih --</option>
		                                    <?php 
												foreach ($provinsi as $prov) {
													if($prov[id] == $mahasiswa->provinsisekolah) {
														echo "<option value='$prov[id]' selected >$prov[name]</option>";
													}
													else {
														echo "<option value='$prov[id]'>$prov[name]</option>";
													}
												}
											?>
		                                </select>
		                            </div>

									<div class="form-group">
										<label for="kabupatensekolah">Kabupaten Sekolah</label>
										<select class='form-control input-sm col-md-4' id='kabupaten-kotasekolah' name="kabupatensekolah">
											<option value='0'>-- Pilih --</option>
										</select>
									</div>

									<div class="form-group">
										<label class="control-label">Tahun Lulus</label>
	                                    <select class="form-control input-sm col-md-4" name="tahunlulus">
	                                    	<option value="">-- Pilih --</option>
	                                    	<?php 
												foreach ($tahunlulus as $tl) {
													if($tl[tahunlulus] == $mahasiswa->tahunlulus) {
														echo "<option value='$tl[tahunlulus]' selected >$tl[tahunlulus]</option>";
													}
													else {
														echo "<option value='$tl[tahunlulus]'>$tl[tahunlulus]</option>";
													}
												}
											?>
	                                  	</select>
									</div>
								</div>

								<div class="container tab-pane fade" id="ortu" role="tabpanel" aria-labelledby="ortu-tab">
									<div class="form-group mt-3">
										<label for="namawali">Nama Ayah</label>
										<input class="form-control" type="text" name="namawali" value="<?php echo $mahasiswa->namawali ?>"/>
									</div>

									<div class="form-group">
										<label for="namaibukandung">Nama Ibu</label>
										<input class="form-control" type="text" name="namaibukandung" value="<?php echo $mahasiswa->namaibukandung ?>"/>
									</div>

									<div class="form-group">
										<label for="jalanwali">Alamat Orangtua</label>
										<input class="form-control" type="text" name="jalanwali" value="<?php echo $mahasiswa->jalanwali ?>"/>
									</div>

									<div class="form-group">
										<label class="control-label">Provinsi</label>
		                                <select class="form-control input-sm col-md-4" name="provinsiwali" id='provinsiwali'>
	                                    	<option value="">-- Pilih --</option>
	                                    	<?php 
												foreach ($provinsi as $prov) {
													if($prov[id] == $mahasiswa->provinsiwali) {
														echo "<option value='$prov[id]' selected >$prov[name]</option>";
													}
													else {
														echo "<option value='$prov[id]'>$prov[name]</option>";
													}
												}
											?>
	                                    </select>
		                            </div>

									<div class="form-group">
										<label for="kabupaten">Kabupaten/Kota</label>
										<select class='form-control input-sm col-md-4' id='kabupaten-kotawali' name="kabupatenwali">
											<option value='0'>-- Pilih --</option>
										</select>
									</div>

									<div class="form-group">
										<label for="pekerjaanwali">Pekerjaan Orangtua</label>
										<input class="form-control" type="text" name="pekerjaanwali" value="<?php echo $mahasiswa->pekerjaanwali ?>"/>
									</div>

									<div class="form-group">
										<label for="notelponwali">No. Telepon/HP Orangtua</label>
										<input class="form-control" type="text" name="notelponwali" value="<?php echo $mahasiswa->notelponwali ?>"/>
									</div>
								</div>

								<div class="container tab-pane fade" id="seleksi" role="tabpanel" aria-labelledby="seleksi-tab">
									<div class="form-group mt-3">
										<label for="ujikes">Uji Kesehatan</label>
										<select class="form-control input-sm col-md-4" name="ujikes">
	                                    	<option value="">-- Pilih --</option>
	                                    	<?php 
												foreach ($seleksi as $sl) {
													if($sl[seleksi] == $mahasiswa->ujikes) {
														echo "<option value='$sl[seleksi]' selected >$sl[seleksi]</option>";
													}
													else {
														echo "<option value='$sl[seleksi]'>$sl[seleksi]</option>";
													}
												}
											?>
	                                  	</select>
									</div>

									<div class="form-group">
										<label for="tpa">TPA</label>
										<select class="form-control input-sm col-md-4" name="tpa">
	                                    	<option value="">-- Pilih --</option>
	                                    	<?php 
												foreach ($seleksi as $sl) {
													if($sl[seleksi] == $mahasiswa->tpa) {
														echo "<option value='$sl[seleksi]' selected >$sl[seleksi]</option>";
													}
													else {
														echo "<option value='$sl[seleksi]'>$sl[seleksi]</option>";
													}
												}
											?>
	                                  	</select>
									</div>

									<div class="form-group">
										<label for="wawancara">Wawancara</label>
										<input class="form-control <?php echo form_error('wawancara') ? 'is-invalid':'' ?>" type="text" name="wawancara" value="<?php echo $mahasiswa->wawancara ?>"/>
										<div class="invalid-feedback">
											<?php echo form_error('wawancara') ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label">Pewawancara</label>
	                                    <select class="form-control input-sm col-md-4" name="pewawancara">
	                                    	<option value="">-- Pilih --</option>
	                                    	<?php 
												foreach ($pewawancara as $pw) {
													if($pw[nama] == $mahasiswa->pewawancara) {
														echo "<option value='$pw[nama]' selected >$pw[nama]</option>";
													}
													else {
														echo "<option value='$pw[nama]'>$pw[nama]</option>";
													}
												}
											?>
	                                  	</select>
									</div>

									<div class="form-group">
										<label for="hasil">Hasil</label>
										<input class="form-control <?php echo form_error('hasil') ? 'is-invalid':'' ?>" type="text" name="hasil" value="<?php echo $mahasiswa->hasil ?>"/>
										<div class="invalid-feedback">
											<?php echo form_error('hasil') ?>
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


<script type="text/javascript">

$(function() {
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