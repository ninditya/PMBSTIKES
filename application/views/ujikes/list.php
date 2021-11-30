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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('ujikesehatan/inputUjikes') ?>"><i class="fas fa-plus"></i> Tambah Data Calon Mahasiswa</a>
						<!-- <a href="<?php echo site_url('excel/index/') ?>" target="_blank" class="text-success float-right"><i class="fas fa-print"></i> Cetak Excel</a>
						<a href="<?php echo site_url('laporanpdf/index/') ?>" target="_blank" class="text-success float-right mr-3"><i class="fas fa-print"></i> Cetak</a> -->
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Kesimpulan</th>
										<th>Rekomendasi</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($ujikes as $uk): ?>
									<tr>
										<td width="250">
											<a href="<?php echo base_url('ujikesehatan/detail/'.$uk->id) ?>"><?php echo $uk->namalengkap ?></a>
										</td>
										<td width="250">
											<?php echo $uk->kesimpulan ?>
										</td>
										<td width="250">
											<?php echo $uk->rekomendasi ?>
										</td>
										<td width="200">
											<a href="<?php echo site_url('ujikesehatan/editUjikes/'.$uk->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>

											<!-- <a href="<?php echo site_url('laporanpdf/kartupeserta/'.$uk->id) ?>" target="_blank" class="btn btn-small text-success"><i class="fas fa-print"></i> Cetak</a> -->

											<a onclick="deleteConfirm('<?php echo site_url('ujikesehatan/delete/'.$uk->id) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
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