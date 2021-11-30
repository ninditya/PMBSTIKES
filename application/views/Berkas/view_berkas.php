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

            <div class="card mb-5">
                <div class="card-header">
                    <a href=""> List Berkas</a>
                </div>
		        <div class="card-body">
		    	    <form method="POST" action="<?php echo base_url('index.php/Berkas/testUpData'); ?>" enctype="multipart/form-data">
                    <table border="0">
                        <tr>
                            <label for="pmbid">Nomor Pendaftaran*</label>
                            <input class="form-control" type="text" name="pmbid">
                        </tr>
                        <tr>
                            <label for="namalengkap">Nama Lengkap*</label>
                            <input class="form-control" type="text" name="namalengkap">
                        </tr>
                        <tr>
                            <label for="pilihanprodi">Pilihan Prodi*</label>
                            <input class="form-control" type="text" name="pilihanprodi">
                        </tr>
                        <tr>
                            <label for="jalur">Jalur</label>
                            <input class="form-control" type="text" name="jalur">
                        </tr>
                        <tr>
                            <label for="kk">Berkas Kartu Keluarga </label>
                            <input class="form-control-file" type="file" name="kk" >
                        </tr>
                        <tr>
                            <label for="ijazah">Berkas Ijazah </label>
                            <input class="form-control-file" type="file" name="ijazah" >
                        </tr>
                        <tr>
                            <label for="skck">Berkas SKCK </label>
                            <input class="form-control-file" type="file" name="skck" >
                        </tr>
                        <tr>
                            <label for="pernyataan">Berkas Pernyataan </label>
                            <input class="form-control-file" type="file" name="pernyataan" >
                        </tr>
                        <tr>
                            <input  class="btn btn-success float-right mr-2" type="submit" name="submit" value="INPUT"> <input  class="btn btn-success float-right mr-2" type="reset" name="reset" value="RESET">
                        </tr>
                   	</table>
                    </form>
            </div> 
            <!-- /.container-fluid -->
            <div class="card mb-5">
            <table width="100%">
                <tr>
                    <th>No</th>
                    <th>PMBID</th>
                    <th>Nama Lengkap</th>
                    <th>Pilihan Prodi</th>
                    <th>Jalur</th>
                    <th>KK</th>
                    <th>Ijazah</th>
                    <th>SKCK</th>
                    <th>Pernyataan</th>
                </tr>
               <?php
                    $no=1;
                    foreach ($data as $data) { ?>
                        <tr>
                            <td><?= $no++; ?> </td>
                            <td><?= $data['pmbid']; ?> </td>
                            <td><?= $data['namalengkap']; ?> </td>
                            <td><?= $data['pilihanprodi']; ?> </td>
                            <td><?= $data['jalur']; ?> </td>
                            <td>
                               <a href="<?php echo site_url("upload/kk/$data[kk]"); ?>" target="_blank" class="btn text-success"> <i class="fas fa-print"></i>  Cetak KK PDF</a>
                            </td>
                            <td>
                               <a href="<?php echo site_url("upload/ijazah/$data[ijazah]"); ?>" target="_blank" class="btn text-success"> <i class="fas fa-print"></i>  Cetak Ijazah PDF</a>
                            </td>
                            <td>
                               <a href="<?php echo site_url("upload/skck/$data[skck]"); ?>" target="_blank" class="btn text-success"> <i class="fas fa-print"></i>  Cetak skck PDF</a>
                            </td>
                            <td>
                               <a href="<?php echo site_url("upload/pernyataan/$data[pernyataan]"); ?>" target="_blank" class="btn text-success"> <i class="fas fa-print"></i>  Cetak pernyataan PDF</a>
                            </td>
                        </tr>
                        <?php      }      ?>
                </table>
                </div>

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