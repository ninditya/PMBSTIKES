<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>
<body id="page-top">

	<?php $this->load->view("_partials/navbar.php") ?>

	<div id="wrapper">
		
		<?php $this->load->view("_partials/sidebar2.php") ?>
		


		<div id="content-wrapper">

            <div class="card mb-3">
            <div class="card-header">
                        <a href=""> Upload Pengumuman </a>
            </div>
		    <div class="container-fluid">

            <center>
            <div class="card mb-5">
            <table width="50%">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Admin</th>
                    <th>Berkas</th>
                </tr>
                <?php
                    $no=1;
                    foreach ($data as $data) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['judul']; ?></td>
                            <td><?= $data['admin']; ?></td>
                            <td>
                               <a href="<?php echo site_url("upload/Pengumuman/$data[berkas]"); ?>" target="_blank" class="btn text-success"> <i class="fas fa-print"></i>  Cetak PDF</a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
            </div>
        	</center>

		    </div> 
		    <!-- /.container-fluid -->
            </div >
		    <!-- Sticky Footer -->
		    <?php $this->load->view("_partials/footer.php") ?>

		</div>
		  <!-- /.content-wrapper -->
	</div>
	<!-- /#wrapper -->

<?php $this->load->view("_partials/scrolltop.php") ?>
<?php $this->load->view("_partials/modal.php") ?>
<?php $this->load->view("_partials/js.php") ?>
	
</body>
</html>