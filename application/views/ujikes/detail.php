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
						<a href="<?php echo site_url('ujikesehatan/list') ?>" class="btn"><i class="fas fa-arrow-left"></i> Back</a>
						<a onclick="deleteConfirm('<?php echo site_url('ujikesehatan/delete/'.$ujikes->id) ?>')" href="#!" class="btn float-right text-danger"><i class="fas fa-trash"></i> Hapus</a>
						<a href="<?php echo site_url('ujikesehatan/editUjikes/'.$ujikes->id) ?>" class="btn float-right"><i class="fas fa-edit"></i> Edit</a>
					</div>
					<div class="card-body">
						<div class="card">
							<div class="card-header bg-primary text-white">
							    Identitas
							</div>
							<div class="card-body">
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="pmbid">Nomor Pendaftaran</label>
									<input type="text" name="pmbid" disabled value="<?= $ujikes->pmbid ?>" class="form-control col-md-8 <?php echo form_error('pmbid') ? 'is-invalid':'' ?>">
									<div class="invalid-feedback">
										<?php echo form_error('pmbid') ?>
									</div>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="namalengkap">Nama Calon Mahasiswa</label>
									<input type="text" name="namalengkap" disabled value="<?= $ujikes->namalengkap ?>" class="form-control col-md-8 <?php echo form_error('namalengkap') ? 'is-invalid':'' ?>">
									<div class="invalid-feedback">
										<?php echo form_error('namalengkap') ?>
									</div>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="jeniskelamin">Jenis Kelamin</label><br>
									<input class="form-control col-md-4" type="date" name="jeniskelamin" disabled value="<?= $ujikes->jeniskelamin ?>"/>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="umur">Umur</label>
									<input class="form-control col-md-8 <?php echo form_error('umur') ? 'is-invalid':'' ?>" type="text" name="umur" disabled value="<?= $ujikes->umur ?>" autocomplete="off"/>
									<div class="invalid-feedback">
										<?php echo form_error('umur') ?>
									</div>
								</div>
								<div class="form-group form-inline">
									<label class="control-label col-md-3" for="tanggaltest">Tanggal Test</label>
									<input class="form-control col-md-4" type="date" name="tanggaltest" disabled value="<?= $ujikes->tanggaltest ?>"/>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
							    Anamnese Riwayat Kesehatan
							</div>
							<div class="card-body">
								<div class="form-group card card-body mt-3">
									<label for="sakitlama">Sakit Lama</label>
									<div class="form-inline">
										<input class="form-control col-md-4 mr-4" type="text" name="sakitlama" disabled value="<?= $ujikes->sakitlama ?>"/>
										<input class="form-control col-md-6" type="text" name="ketsakitlama" disabled value="<?= $ujikes->ketsakitlama ?>" placeholder="Keterangan" />
									</div>
								</div>
								<div class="form-group card card-body">
									<label for="batuklama">Batuk Lama</label>
									<div class="form-inline">
										<input class="form-control col-md-4 mr-4" type="text" name="batuklama" disabled value="<?= $ujikes->batuklama ?>"/>
										<input class="form-control col-md-6" type="text" name="ketbatuklama" disabled value="<?= $ujikes->ketbatuklama ?>" placeholder="Keterangan" />
									</div>
								</div>
								<div class="form-group card card-body">
									<label for="sakitkuning">Sakit Kuning</label>
									<div class="form-inline">
										<input class="form-control col-md-4 mr-4" type="text" name="sakitkuning" disabled value="<?= $ujikes->sakitkuning ?>"/>
										<input class="form-control col-md-6" type="text" name="ketsakitkuning" disabled value="<?= $ujikes->ketsakitkuning ?>" placeholder="Keterangan" />
									</div>
								</div>
								<div class="form-group card card-body">
									<label for="kecelakaan">Kecelakaan</label>
									<div class="form-inline">
										<input class="form-control col-md-4 mr-4" type="text" name="kecelakaan" disabled value="<?= $ujikes->kecelakaan ?>"/>
										<input class="form-control col-md-6" type="text" name="ketkecelakaan" disabled value="<?= $ujikes->ketkecelakaan ?>" placeholder="Keterangan" />
									</div>
								</div>
								<div class="form-group card card-body">
									<label for="masukrs">Masuk Rumah Sakit</label>
									<div class="form-inline">
										<input class="form-control col-md-4 mr-4" type="text" name="masukrs" disabled value="<?= $ujikes->masukrs ?>"/>
										<input class="form-control col-md-6" type="text" name="ketmasukrs" disabled value="<?= $ujikes->ketmasukrs ?>" placeholder="Keterangan" />
									</div>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
							    Pemeriksaan Fisik
							</div>
							<div class="card-body">
								<div class="card-header">
									<h6  align="center"> 1. Fisik Umum </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="tinggi">Tinggi Badan</label>
										<input class="form-control col-md-3 mr-4" type="text" name="tinggi" disabled value="<?= $ujikes->tinggi ?>"/>
										<input class="form-control col-md-4" type="text" name="kettinggi" disabled value="<?= $ujikes->kettinggi ?>" placeholder="Keterangan" />
									</div>
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="berat">Berat Badan</label>
										<input class="form-control col-md-3 mr-4" type="text" name="berat" disabled value="<?= $ujikes->berat ?>"/>
										<input class="form-control col-md-4" type="text" name="ketberat" disabled value="<?= $ujikes->ketberat ?>" placeholder="Keterangan" />
									</div>
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="tekanandarah">Tekanan Darah</label>
										<input class="form-control col-md-3 mr-4" type="text" name="tekanandarah" disabled value="<?= $ujikes->tekanandarah ?>"/>
										<input class="form-control col-md-4" type="text" name="kettekanandarah" disabled value="<?= $ujikes->kettekanandarah ?>" placeholder="Keterangan" />
									</div>
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="nadi">Nadi</label>
										<input class="form-control col-md-3 mr-4" type="text" name="nadi" disabled value="<?= $ujikes->nadi ?>"/>
										<input class="form-control col-md-4" type="text" name="ketnadi" disabled value="<?= $ujikes->ketnadi ?>" placeholder="Keterangan" />
									</div>
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="kulit">Kulit</label>
										<input class="form-control col-md-3 mr-4" type="text" name="kulit" disabled value="<?= $ujikes->kulit ?>"/>
										<input class="form-control col-md-4" type="text" name="ketkulit" disabled value="<?= $ujikes->ketkulit ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 2. Mata </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="fisikmata">Fisik</label>
										<input class="form-control col-md-3 mr-4" type="text" name="fisikmata" disabled value="<?= $ujikes->fisikmata ?>"/>
										<input class="form-control col-md-4" type="text" name="ketfisikmata" disabled value="<?= $ujikes->ketfisikmata ?>" placeholder="Keterangan" />
									</div>
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="visus">Visus</label>
										<input class="form-control col-md-3 mr-4" type="text" name="visus" disabled value="<?= $ujikes->visus ?>"/>
										<input class="form-control col-md-4" type="text" name="ketvisus" disabled value="<?= $ujikes->ketvisus ?>" placeholder="Keterangan" />
									</div>
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="butawarna">Buta Warna</label>
										<input class="form-control col-md-3 mr-4" type="text" name="butawarna" disabled value="<?= $ujikes->butawarna ?>"/>
										<input class="form-control col-md-4" type="text" name="ketbutawarna" disabled value="<?= $ujikes->ketbutawarna ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6 align="center"> 3. Telinga </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="telingakanan">Kanan</label>
										<input class="form-control col-md-3 mr-4" type="text" name="telingakanan" disabled value="<?= $ujikes->telingakanan ?>"/>
										<input class="form-control col-md-4" type="text" name="kettelingakanan" disabled value="<?= $ujikes->kettelingakanan ?>" placeholder="Keterangan" />
									</div>
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="telingakiri">Kiri</label>
										<input class="form-control col-md-3 mr-4" type="text" name="telingakiri" disabled value="<?= $ujikes->telingakiri ?>"/>
										<input class="form-control col-md-4" type="text" name="kettelingakiri" disabled value="<?= $ujikes->kettelingakiri ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6 align="center"> 4. Hidung </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="hidung">Hidung</label>
										<input class="form-control col-md-3 mr-4" type="text" name="hidung" disabled value="<?= $ujikes->hidung ?>"/>
										<input class="form-control col-md-4" type="text" name="kethidung" disabled value="<?= $ujikes->kethidung ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 5. Lidah </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="lidah">Lidah</label>
										<input class="form-control col-md-3 mr-4" type="text" name="lidah" disabled value="<?= $ujikes->lidah ?>"/>
										<input class="form-control col-md-4" type="text" name="ketlidah" disabled value="<?= $ujikes->ketlidah ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 6. Pharynx </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="pharynx">Pharynx</label>
										<input class="form-control col-md-3 mr-4" type="text" name="pharynx" disabled value="<?= $ujikes->pharynx ?>"/>
										<input class="form-control col-md-4" type="text" name="ketpharynx" disabled value="<?= $ujikes->ketpharynx ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 7. Tonsil </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="tonsil">Tonsil</label>
										<input class="form-control col-md-3 mr-4" type="text" name="tonsil" disabled value="<?= $ujikes->tonsil ?>"/>
										<input class="form-control col-md-4" type="text" name="kettonsil" disabled value="<?= $ujikes->kettonsil ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 8. Gigi </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="gigi">Gigi</label>
										<input class="form-control col-md-3 mr-4" type="text" name="gigi" disabled value="<?= $ujikes->gigi ?>"/>
										<input class="form-control col-md-4" type="text" name="ketgigi" disabled value="<?= $ujikes->ketgigi ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 9. Thyroid </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="thyroid">Thyroid</label>
										<input class="form-control col-md-3 mr-4" type="text" name="thyroid" disabled value="<?= $ujikes->thyroid ?>"/>
										<input class="form-control col-md-4" type="text" name="ketthyroid" disabled value="<?= $ujikes->ketthyroid ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 10. Jantung </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="jantung">Jantung</label>
										<input class="form-control col-md-3 mr-4" type="text" name="jantung" disabled value="<?= $ujikes->jantung ?>"/>
										<input class="form-control col-md-4" type="text" name="ketjantung" disabled value="<?= $ujikes->ketjantung ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 11. Paru-Paru </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="paruparu">Paru-paru</label>
										<input class="form-control col-md-3 mr-4" type="text" name="paruparu" disabled value="<?= $ujikes->paruparu ?>"/>
										<input class="form-control col-md-4" type="text" name="ketparuparu" disabled value="<?= $ujikes->ketparuparu ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 12. Abdoman </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="abdoman">Abdoman</label>
										<input class="form-control col-md-3 mr-4" type="text" name="abdoman" disabled value="<?= $ujikes->abdoman ?>"/>
										<input class="form-control col-md-4" type="text" name="ketabdoman" disabled value="<?= $ujikes->ketabdoman ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 13. Refleks </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="pupil">Pupil</label>
										<input class="form-control col-md-3 mr-4" type="text" name="pupil" disabled value="<?= $ujikes->pupil ?>"/>
										<input class="form-control col-md-4" type="text" name="ketpupil" disabled value="<?= $ujikes->ketpupil ?>" placeholder="Keterangan" />
									</div>
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="patella">Patella</label>
										<input class="form-control col-md-3 mr-4" type="text" name="patella" disabled value="<?= $ujikes->patella ?>"/>
										<input class="form-control col-md-4" type="text" name="ketpatella" disabled value="<?= $ujikes->ketpatella ?>" placeholder="Keterangan" />
									</div>
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="achiles">Achiles</label>
										<input class="form-control col-md-3 mr-4" type="text" name="achiles" disabled value="<?= $ujikes->achiles ?>"/>
										<input class="form-control col-md-4" type="text" name="ketachiles" disabled value="<?= $ujikes->ketachiles ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 14. Darah Lengkap + LED </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="darahlengkap">Darah Lengkap + LED</label>
										<input class="form-control col-md-3 mr-4" type="text" name="darahlengkap" disabled value="<?= $ujikes->darahlengkap ?>"/>
										<input class="form-control col-md-4" type="text" name="ketdarahlengkap" disabled value="<?= $ujikes->ketdarahlengkap ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 15. HbSAg </h6>
								</div>
								<div class="card-body">
									<div class="form-group form-inline">
										<label class="control-label col-md-3" for="hbsag">HbSAg</label>
										<input class="form-control col-md-3 mr-4" type="text" name="hbsag" disabled value="<?= $ujikes->hbsag ?>"/>
										<input class="form-control col-md-4" type="text" name="kethbsag" disabled value="<?= $ujikes->kethbsag ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 16. Tato </h6>
								</div>
								<div class="card-body">
									<div class="form-group offset-md-2">
										<label for="tato">Tato</label>
										<input class="form-control col-md-9" type="text" name="tato" disabled value="<?= $ujikes->tato ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 17. Tindik </h6>
								</div>
								<div class="card-body">
									<div class="form-group offset-md-2">
										<label for="tindik">Tindik</label>
										<input class="form-control col-md-9" type="text" name="tindik" disabled value="<?= $ujikes->tindik ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="card-header">
									<h6  align="center"> 18. Thorak Foto </h6>
								</div>
								<div class="card-body">
									<div class="form-group offset-md-2">
										<label for="thorakfoto">Thorak Foto</label>
										<input class="form-control col-md-9" type="text" name="thorakfoto" disabled value="<?= $ujikes->thorakfoto ?>" placeholder="Keterangan" />
									</div>
								</div>
							</div>
						</div>

						<div class="card mt-3">
							<div class="card-header bg-primary text-white">
							    Kesimpulan
							</div>
							<div class="card-body">
								<div class="form-group card card-body mt-3">
									<label class="offset-md-1" for="kesimpulan">Kesimpulan</label>
									<div class="form-inline">
										<input class="form-control col-md-4 offset-md-1 mr-4" type="text" name="kesimpulan" disabled value="<?= $ujikes->kesimpulan ?>"/>
										<input class="form-control col-md-6" type="text" name="ketkesimpulan" disabled value="<?= $ujikes->ketkesimpulan ?>" placeholder="Keterangan" />
									</div>
								</div>

								<div class="form-group card card-body mt-3">
									<label class="offset-md-1" for="kesimpulan">Rekomendasi</label>
									<div class="form-inline">
										<input class="form-control col-md-10 offset-md-1 mr-4" type="text" name="rekomendasi" disabled value="<?= $ujikes->rekomendasi ?>"/>
									</div>
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
