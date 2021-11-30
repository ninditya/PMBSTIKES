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
            	
            	<?php $this->load->view("_partials/footer.php") ?>

		        <div>
		            <script src="highcharts/highcharts.js"></script>
					<script src="highcharts/exporting.js"></script>
					<script src="highcharts/export-data.js"></script>

					<div id="container" style="min-width: 310px; height: 400px; max-width: 900px; margin: 0 auto"></div>
					<script type="text/javascript">
					Highcharts.chart('container', {
					    chart: {
					        plotBackgroundColor: null,
					        plotBorderWidth: null,
					        plotShadow: false,
					        type: 'column'
					    },
					    title: {
					        text: 'Grafik Calon Mahasiswa Baru'
					    },
					    tooltip: {
					        pointFormat: '<b>{point.y} Orang</b>'
					    },
					    plotOptions: {
					        column: {
					            allowPointSelect: false,
					            // cursor: 'pointer',
					            dataLabels: {
					                enabled: true,
					                format: '<b>{point.name}</b>: {point.y} Orang',
					                style: {
					                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
					                }
					            }
					        }
					    },
					    xAxis: {
						    labels: {
						        formatter: function() {
						            return;
						        }
						    },
						},
					    series: [{
					        name: 'Program Studi',
					        colorByPoint: true,
					        data: [
					        <?php 
					        // data yang diambil dari database
			                
								if(count($graph)>0)
								{
								    foreach ($graph as $data) {
								   		echo "['" .$data->pilihanprodi . "'," . $data->jumlah ."],\n";
								    }
								}
					        ?>
					        ]
					    }]
					});
					</script>
				</div>
            </div>
        </div>
    </div>

	<?php $this->load->view("_partials/scrolltop.php") ?>
	<?php $this->load->view("_partials/modal.php") ?>
	<?php $this->load->view("_partials/js.php") ?>

</body>

</html>