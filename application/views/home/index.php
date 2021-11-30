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

		    <!-- Icon Cards-->
		    <!-- <div class="row">
		      	<div class="col-xl-3 col-sm-6 mb-3">
			      	<div class="card text-white bg-primary o-hidden h-100">
			        	<div class="card-body">
			        		<div class="card-body-icon">
			          			<i class="fas fa-fw fa-comments"></i>
			        		</div>
			        		<div class="mr-5">26 New Messages!</div>
			        	</div>
			        	<a class="card-footer text-white clearfix small z-1" href="#">
					        <span class="float-left">View Details</span>
					        <span class="float-right">
					          <i class="fas fa-angle-right"></i>
					        </span>
			        	</a>
			      	</div>
		      	</div>
		      	<div class="col-xl-3 col-sm-6 mb-3">
				     <div class="card text-white bg-warning o-hidden h-100">
				        <div class="card-body">
					        <div class="card-body-icon">
					        	<i class="fas fa-fw fa-list"></i>
					        </div>
					        <div class="mr-5">11 New Tasks!</div>
				        </div>
				        <a class="card-footer text-white clearfix small z-1" href="#">
					        <span class="float-left">View Details</span>
					        <span class="float-right">
					        	<i class="fas fa-angle-right"></i>
					        </span>
				        </a>
				    </div>
		      	</div>
		      	<div class="col-xl-3 col-sm-6 mb-3">
				    <div class="card text-white bg-success o-hidden h-100">
				        <div class="card-body">
					        <div class="card-body-icon">
					        	<i class="fas fa-fw fa-shopping-cart"></i>
					        </div>
					        <div class="mr-5">123 New Orders!</div>
				        </div>
				        <a class="card-footer text-white clearfix small z-1" href="#">
					        <span class="float-left">View Details</span>
					        <span class="float-right">
					        	<i class="fas fa-angle-right"></i>
					        </span>
				        </a>
				     </div>
		      	</div>
		      	<div class="col-xl-3 col-sm-6 mb-3">
				    <div class="card text-white bg-danger o-hidden h-100">
				        <div class="card-body">
					        <div class="card-body-icon">
					        	<i class="fas fa-fw fa-life-ring"></i>
					        </div>
					        <div class="mr-5">13 New Tickets!</div>
				        </div>
				        <a class="card-footer text-white clearfix small z-1" href="#">
					        <span class="float-left">View Details</span>
					        <span class="float-right">
					        	<i class="fas fa-angle-right"></i>
					        </span>
				        </a>
				    </div>
		      	</div>
		    </div> -->

		    <!-- Area Chart Example-->
		   		<!-- <div class="card mb-3">
					<div class="card-header">
					    <i class="fas fa-chart-area"></i>
					    Visitor Stats
					</div>
					<div class="card-body">
					    <canvas id="myAreaChart" width="100%" height="30"></canvas>
					</div>
					<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
				</div> -->

			<!-- Carousel -->
			<div id="carouselExampleInterval" class="carousel slide mt-3" data-ride="carousel">
				<ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				</ol>
			  	<div class="carousel-inner">
			    	<div class="carousel-item active" data-interval="500">
			    		<a href="http://stikesbethesda.ac.id/" target="_blank"><img src="<?php echo base_url() ?>assets/images/SLIDER-PMB-2019.png" class="d-block w-100"></a>
			    	</div>
			    	<div class="carousel-item" data-interval="500">
			      		<a href="http://stikesbethesda.ac.id/" target="_blank"><img src="<?php echo base_url() ?>assets/images/SLIDER-PMB-2019.png" class="d-block w-100"></a>
			    	</div>
			  	</div>
			  	<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
			  	</a>
			  	<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>
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
	
</body>
</html>