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

				<!-- Panel Filter -->
		        <div class="card mb-3">
		            <div class="card-header">
		                <h5 class="panel-title">Filter: </h5>
		            </div>
		            <div class="card-body">
		                <form id="form-filter">
		                	<div class="row">
		                		<label for="tahun" class="col-sm-2 control-label">Tahun</label>
		                		<label for="pilihanprodi" class="col-sm-2 control-label">Program Studi</label>
		                		<label for="jalur" class="col-sm-2 control-label">Jalur Pendaftaran</label>
		                		<label for="gelombang" class="col-sm-2 control-label">Gelombang</label>
		                		<label for="tahap" class="col-sm-2 control-label">Tahap</label>
		                	</div>
		                	<div class="row">
		                		<div class="col-sm-2">
		                            <?php echo $form_tahun; ?>
		                        </div>
		                        <div class="col-sm-2">
		                            <?php echo $form_prodi; ?>
		                        </div>
		                        <div class="col-sm-2">
		                            <?php echo $form_jalur; ?>
		                        </div>
		                        <div class="col-sm-2">
		                            <?php echo $form_gelombang; ?>
		                        </div>
		                        <div class="col-sm-2">
		                            <?php echo $form_tahap; ?>
		                        </div>
		                	</div>
		                    <div class="form-group mt-3">
		                        <div class="d-flex justify-content-end">
		                            <button type="button" id="btn-filter" class="btn btn-primary mr-2">Filter</button>
		                            <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
		                        </div>
		                    </div>
		                </form>
		            </div>
		        </div>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('calonmahasiswa/inputData') ?>" class="btn"><i class="fas fa-plus"></i> Tambah Data Calon Mahasiswa</a>
						<a href="<?php echo site_url('excel/index/') ?>" target="_blank" class="btn text-success float-right"><i class="fas fa-print"></i> Cetak Excel</a>
						<a href="<?php echo site_url('laporanpdf/index/') ?>" target="_blank" class="btn text-success float-right"><i class="fas fa-print"></i> Cetak PDF</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
					            <thead>
					                <tr>
					                    <th>No</th>
					                    <th width="20%">Nama Lengkap</th>
					                    <th>Foto </th>
					                    <th width="22%">Program Studi</th>
					                    <th width="12%">Tahun</th>
					                    <th width="12%">Jalur</th>
					                    <th>Gel.</th>
					                    <th>Tahap</th>
					                    <th width="20%">Action</th>
					                </tr>
					            </thead>
					            <tbody>

					            </tbody>
					            <tfoot>
					                <tr>
					                    <th>No</th>
					                    <th width="20%">Nama Lengkap</th>
					                    <th>Foto </th>
					                    <th width="22%">Program Studi</th>
					                    <th width="12%">Tahun</th>
					                    <th width="12%">Jalur</th>
					                    <th>Gel.</th>
					                    <th>Tahap</th>
					                    <th width="20%">Action</th>
					                </tr>
					            </tfoot>
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

	<script type="text/javascript">

	var table;
	$(document).ready(function(){  

	    table = $('#table').DataTable({ 

	        "processing": true, //Feature control the processing indicator.
	        "serverSide": true, //Feature control DataTables' server-side processing mode.
	        "order": [], //Initial no order.

	        // Load data for the table's content from an Ajax source
	        "ajax": {  
	            "url": "<?php echo site_url('calonmahasiswa/ajax_list')?>",  
	            "type":"POST",
	            "data": function ( data ) {
	                data.pilihanprodi = $('#pilihanprodi').val();
	                data.tahun = $('#tahun').val();
	                data.gelombang = $('#gelombang').val();
	                data.jalur = $('#jalur').val();
	                data.tahap = $('#tahap').val();
	            }
	        },

	        //Set column definition initialisation properties.
	        "columnDefs":[  
	        {  
	            "targets":[0, 2, 8],  //first column / numbering column
	            "orderable":false,  //set not orderable
	        },  
	        ],
	    });


	    $('#btn-filter').click(function(){ //button filter event click
	        table.ajax.reload();  //just reload table
	    });
	    $('#btn-reset').click(function(){ //button reset event click
	        $('#form-filter')[0].reset();
	        table.ajax.reload();  //just reload table
	    });
	});
	</script>
</body>

</html>