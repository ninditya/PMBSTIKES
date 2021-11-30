<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "pmb";

	$conn = mysqli_connect($hostname, $username, $password, $database);
?>

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
						<a href="<?php echo site_url('calonmahasiswa/list') ?>" class="btn"><i class="fas fa-arrow-left"></i> Back</a>
						<a onclick="deleteConfirm('<?php echo site_url('calonmahasiswa/delete/'.$mahasiswa->id) ?>')" href="#!" class="btn float-right text-danger"><i class="fas fa-trash"></i> Hapus</a>
						<a href="<?php echo site_url('laporanpdf/kartupeserta/'.$mahasiswa->id) ?>" target="_blank" class="btn float-right text-success"><i class="fas fa-print"></i> Cetak</a>
						<a href="<?php echo site_url('calonmahasiswa/edit/'.$mahasiswa->id) ?>" class="btn float-right"><i class="fas fa-edit"></i> Edit</a>
					</div>
					<div class="card-body">
						<div class="card">
							<div class="card-header bg-primary text-white">
							    Peminatan
							</div>
							<div class="card-body">
							    <div class="form-group">
									<label for="tanggal">Tanggal Pendaftaran</label>
									<input class="form-control col-md-4" type="date" name="tanggal" disabled value="<?php echo $mahasiswa->tanggal ?>"/>
								</div>

								<div class="form-group">
									<label for="pmbid">Nomor Pendaftaran</label>
									<input class="form-control" type="text" name="pmbid" disabled value="<?php echo $mahasiswa->pmbid ?>"/>
								</div>

								<div class="form-group">
									<label class="control-label">Pilihan Prodi</label>
	                                <input class="form-control" type="text" name="pilihanprodi" disabled value="<?php echo $mahasiswa->pilihanprodi ?>"/>
								</div>

								<div class="form-group">
									<label for="gelombang">Jalur Pendaftaran</label>
									<input class="form-control" type="text" name="jalur" disabled value="<?php echo $mahasiswa->jalur ?>"/>
								</div>

								<div class="form-group">
									<label for="gelombang">Gelombang</label>
									<input class="form-control" type="text" name="gelombang" disabled value="<?php echo $mahasiswa->gelombang ?>"/>
								</div>

								<div class="form-group">
									<label for="tahap">Tahap</label>
									<input class="form-control" type="text" name="tahap" disabled value="<?php echo $mahasiswa->tahap ?>"/>
								</div>

								<div class="form-group">
									<label class="control-label">Tahun Ajaran Masuk</label>
	                                <input class="form-control" type="text" name="tahunmasuk" disabled value="<?php echo $mahasiswa->tahunmasuk ?>"/>
								</div>

								<div class="form-group">
									<label for="sumbangan">Sumbangan</label>
									<input class="form-control" type="number" name="sumbangan" disabled value="<?php echo $mahasiswa->sumbangan ?>"/>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
							    Data Calon Mahasiswa
							</div>
							<div class="card-body">
							    <div class="form-group">
								<label for="namalengkap">Nama Lengkap*</label>
									<input class="form-control" type="text" name="namalengkap" disabled value="<?php echo $mahasiswa->namalengkap ?>"/>
								</div>

								<div class="form-group">
									<label for="foto">Foto</label><br>
									<img class="img-thumbnail" src="<?php echo base_url('upload/mahasiswa/'.$mahasiswa->foto) ?>" width="200" />
								</div>

								<div class="form-group">
									<label for="ttl">Tempat, Tanggal Lahir*</label>
									<div class="form-inline">
										<input class="form-control col-md-4 mr-3" type="text" name="tempatlahir" disabled value="<?php echo $mahasiswa->tempatlahir ?>"/>
										<input class="form-control col-md-4" type="date" name="tanggallahir" disabled value="<?php echo $mahasiswa->tanggallahir ?>"/>
									</div>
								</div>

								<div class="form-group">
									<label for="jeniskelamin">Jenis Kelamin</label><br>
									<input class="form-control" type="text" name="jeniskelamin" disabled value="<?php echo $mahasiswa->jeniskelamin ?>"/>
								</div>

								<div class="form-group">
									<label for="tinggi">Tinggi Badan</label>
									<input class="form-control" type="text" name="tinggi" disabled value="<?php echo $mahasiswa->tinggi ?>"/>
								</div>

								<div class="form-group">
									<label for="berat">Berat Badan</label>
									<input class="form-control" type="text" name="berat" disabled value="<?php echo $mahasiswa->berat ?>"/>
								</div>

								<div class="form-group">
									<label class="control-label">Agama</label>
	                                <input class="form-control" type="text" name="agama" disabled value="<?php echo $mahasiswa->agama ?>"/>
								</div>

								<div class="form-group">
									<label for="kewarganegaraan">Kewarganegaraan</label><br>
									<input class="form-control" type="text" name="kewarganegaraan" disabled value="<?php echo $mahasiswa->kewarganegaraan ?>"/>
								</div>

								<div class="form-group">
									<label for="name">Alamat*</label>
									<textarea class="form-control" name="jalan" disabled><?php echo $mahasiswa->jalan ?></textarea>
								</div>

								<?php 
									$query = mysqli_query($conn, "SELECT p.name FROM provinces p JOIN calonmahasiswa c ON p.id = c.provinsi WHERE c.id = '$mahasiswa->id'");
									while ($data = mysqli_fetch_array($query)) :
								?>

								<div class="form-group">
									<label class="control-label">Provinsi</label>
	                                <input class="form-control" type="text" name="provinsi" disabled value="<?php echo $data['name'] ?>"/>
								</div>

								<?php endwhile ?>

								<div class="form-group">
									<label for="kabupaten">Kabupaten/Kota*</label>
									<input class="form-control" type="text" name="kabupaten" disabled value="<?php echo $mahasiswa->kabupaten ?>"/>
								</div>

								<div class="form-group">
									<label for="kodepos">Kode Pos</label>
									<input class="form-control" type="number" name="kodepos" disabled value="<?php echo $mahasiswa->kodepos ?>"/>
								</div>

								<div class="form-group">
									<label for="notelpon">No. Telepon/HP</label>
									<input class="form-control" type="text" name="notelpon" disabled value="<?php echo $mahasiswa->notelpon ?>"/>
								</div>

								<div class="form-group">
									<label for="email">Email*</label>
									<input class="form-control" type="email" name="email" disabled value="<?php echo $mahasiswa->email ?>"/>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
							    Pendidikan Terakhir
							</div>
							<div class="card-body">
							    <div class="form-group">
									<label for="asalsekolah">Asal Sekolah</label>
									<input class="form-control" type="text" name="asalsekolah" disabled value="<?php echo $mahasiswa->asalsekolah ?>"/>
								</div>

								<div class="form-group">
									<label for="jurusan">Jurusan Sekolah</label>
									<input class="form-control" type="text" name="jurusan" disabled value="<?php echo $mahasiswa->jurusan ?>"/>
								</div>

								<div class="form-group">
									<label for="jalansekolah">Alamat Sekolah</label>
									<input class="form-control" type="text" name="jalansekolah" disabled value="<?php echo $mahasiswa->jalansekolah ?>"/>
								</div>

								<?php 
									$query = mysqli_query($conn, "SELECT p.name FROM provinces p JOIN calonmahasiswa c ON p.id = c.provinsisekolah WHERE c.id = '$mahasiswa->id'");
									while ($data = mysqli_fetch_array($query)) :
								?>

								<div class="form-group">
									<label class="control-label">Provinsi Sekolah</label>
	                                <input class="form-control" type="text" name="provinsisekolah" disabled value="<?php echo $data['name'] ?>"/>
								</div>

								<?php endwhile ?>

								<div class="form-group">
									<label for="kabupatensekolah">Kabupaten Sekolah</label>
									<input class="form-control" type="text" name="kabupatensekolah" disabled value="<?php echo $mahasiswa->kabupatensekolah ?>"/>
								</div>

								<div class="form-group">
									<label class="control-label">Tahun Lulus</label>
	                                <input class="form-control" type="text" name="tahunlulus" disabled value="<?php echo $mahasiswa->tahunlulus ?>"/>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
							    Data Orangtua
							</div>
							<div class="card-body">
								<div class="form-group">
									<label for="namawali">Nama Ayah</label>
									<input class="form-control" type="text" name="namawali" disabled value="<?php echo $mahasiswa->namawali ?>"/>
								</div>

							    <div class="form-group">
									<label for="namaibukandung">Nama Ibu</label>
									<input class="form-control" type="text" name="namaibukandung" disabled value="<?php echo $mahasiswa->namaibukandung ?>"/>
								</div>

								<div class="form-group">
									<label for="jalanwali">Alamat Orangtua</label>
									<input class="form-control" type="text" name="jalanwali" disabled value="<?php echo $mahasiswa->jalanwali ?>"/>
								</div>

								<?php 
									$query = mysqli_query($conn, "SELECT p.name FROM provinces p JOIN calonmahasiswa c ON p.id = c.provinsisekolah WHERE c.id = '$mahasiswa->id'");
									while ($data = mysqli_fetch_array($query)) :
								?>

								<div class="form-group">
									<label class="control-label">Provinsi</label>
	                                <input class="form-control" type="text" name="provinsiwali" disabled value="<?php echo $data['name'] ?>"/>
								</div>

								<?php endwhile ?>

								<div class="form-group">
									<label for="kabupatenwali">Kabupaten</label>
									<input class="form-control" type="text" name="kabupatenwali" disabled value="<?php echo $mahasiswa->kabupatenwali ?>"/>
								</div>

								<div class="form-group">
									<label for="pekerjaanwali">Pekerjaan Orangtua</label>
									<input class="form-control" type="text" name="pekerjaanwali" disabled value="<?php echo $mahasiswa->pekerjaanwali ?>"/>
								</div>

								<div class="form-group">
									<label for="notelponwali">No. Telepon/HP Orangtua</label>
									<input class="form-control" type="text" name="notelponwali" disabled value="<?php echo $mahasiswa->notelponwali ?>"/>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
							    Hasil Seleksi
							</div>
							<div class="card-body">
								<div class="form-group mt-3">
									<label for="ujikes">Uji Kesehatan</label>
									<input class="form-control" type="text" name="ujikes" disabled value="<?php echo $mahasiswa->ujikes ?>"/>
								</div>

								<div class="form-group">
									<label for="tpa">TPA</label>
									<input class="form-control" type="text" name="tpa" disabled value="<?php echo $mahasiswa->tpa ?>"/>
								</div>

								<div class="form-group">
									<label for="wawancara">Wawancara</label>
									<input class="form-control" type="text" name="wawancara" disabled value="<?php echo $mahasiswa->wawancara ?>"/>
								</div>

								<div class="form-group">
									<label for="pewawancara">Pewawancara</label>
									<input class="form-control" type="text" name="pewawancara" disabled value="<?php echo $mahasiswa->pewawancara ?>"/>
								</div>

								<div class="form-group">
									<label for="hasil">Hasil</label>
									<input class="form-control" type="text" name="hasil" disabled value="<?php echo $mahasiswa->hasil ?>"/>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
							    Berkas
							</div>
							<div class="card-body">
								<div class="form-group mt-3">
									<label for="kk">Berkas Kartu Keluarga</label>
									<a href="<?php echo site_url("upload/kk/$data[kk]"); ?>" target="_blank" class="btn text-success"> <i class="fas fa-print"></i>  Cetak KK PDF</a>
								</div>

								<div class="form-group">
									<label for="ijazah">Berkas Ijazah</label>
									<a href="<?php echo site_url("upload/ijazah/$data[ijazah]"); ?>" target="_blank" class="btn text-success"> <i class="fas fa-print"></i>  Cetak Ijazah PDF</a>
								</div>

								<div class="form-group">
									<label for="skck">Berkas SKCK</label>
									<a href="<?php echo site_url("upload/skck/$data[skck]"); ?>" target="_blank" class="btn text-success"> <i class="fas fa-print"></i>  Cetak skck PDF</a>
								</div>

								<div class="form-group">
									<label for="pewawancara">Berkas Penyataan</label>
									<a href="<?php echo site_url("upload/pernyataan/$data[penyataan]"); ?>" target="_blank" class="btn text-success"> <i class="fas fa-print"></i>  Cetak pernyataan PDF</a>
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