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

            <div class="card mb-3">
            <div class="card-header">
                        <a href=""> Upload Pengumuman </a>
            </div>
		    <div class="container-fluid">

            <center>
		    	    <form method="POST" action="<?php echo base_url('index.php/Pengumuman/testUpData'); ?>" enctype="multipart/form-data">
                    <table border="0">
                        <tr>
                            <td>Judul</td>
                            <td><input type="text" name="judul"></td>
                        </tr>
                        <tr>
                            <td>Admin</td>
                            <td><input type="text" name="admin"></td>
                        </tr>
                        <tr>
                             <td>Berkas</td>
                             <td><input type="file" name="berkas" ></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="INPUT"><input type="reset" name="reset" value="RESET"></td>
                        </tr>
                   	</table>
                    </form>
            <br><br>

            <div class="card mb-5">
            <table width="50%">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Admin</th>
                    <th>Berkas</th>
                    <th>Option</th>
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
                            <td>
                                <button><a href="<?php echo base_url('index.php/Pengumuman/delete/'.$data['id']);?>"> DELETE </a></button>
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