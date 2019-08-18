<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
		<!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
	</div>

	<form class="col-lg-12">
		<div class="form-group row">

			<div class="col-lg-3">
				<input class="form-control" type="date" value="<?=date("Y-m-d");?>" id="example-date-input">
			</div>
			<div class="col-lg-2">
				<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
			</div>
		</div>
	</form>
	<!-- Content Row -->
	<div class="row">
		<?php 
                
                $num1 = rand(); 
                $num3 = rand(); 
                $num4 = rand(); 
                $num5 = rand(); 
               
                $grwq1 = rand(1, 100000);
                $grwq2 = rand(1, 100000);
                $grwq3 = rand(1, 100000);
                $grwq4 = rand(1, 100000);
                $grwq5 = rand(1, 100000);
                $grwq6 = rand(1, 100000);
                $grwq7 = rand(1, 100000);
                $grwq8 = rand(1, 100000);
                $grwq9 = rand(1, 100000);
                $grwq10 = rand(1, 100000);
                $grwq11 = rand(1, 100000);
                $grwq12 = rand(1, 100000);
                
                
                // echo "Random number in range (7, 100): ", $num2; 
                
                ?>
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Barang Masuk</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo formatCurrency($num1);?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-wallet fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barang Keluar</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo formatCurrency($num3);?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Barang Expired</div>
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo formatCurrency($num4);?></div>
								</div>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Pending Requests Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kas Masuk</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo formatCurrency($num5);?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-money-check-alt fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Row -->

	<div class="row">

		<!-- Area Chart -->
		<div class="col-xl-6 col-lg-7">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Sales Graph</h6>
					<div class="dropdown no-arrow">
						<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
							<div class="dropdown-header">Dropdown Header:</div>
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<div class="chart-area">
						<canvas id="myAreaChart"></canvas>
					</div>
				</div>
			</div>
		</div>

		<!-- Pie Chart -->
		<div class="col-xl-6 col-lg-4">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Inventory composition</h6>

				</div>
				<div class="card-body">
					<div id="chartdiv"></div>
				</div>

			</div>
		</div>
	</div>

	<!-- Content Row -->


</div>


<style>
	#chartdiv {
		width: 100%;
		height: 320px;
	}

</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/material.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
	am4core.ready(function () {

		// Themes begin
		am4core.useTheme(am4themes_material);
		am4core.useTheme(am4themes_animated);
		// Themes end

		// Create chart
		var chart = am4core.create("chartdiv", am4charts.PieChart);
		chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

		chart.data = [{
				country: "Makanan",
				value: <?php echo $grwq1;?>
			},
			{
				country: "Baju",
				value: <?php echo $grwq2;?>
			},
			{
				country: "Tools",
				value: <?php echo $grwq3;?>
			},
		];

		var series = chart.series.push(new am4charts.PieSeries());
		series.dataFields.value = "value";
		series.dataFields.radiusValue = "value";
		series.dataFields.category = "country";
		// series.slices.template.cornerRadius = 6;
		series.colors.step = 3;

		series.hiddenState.properties.endAngle = -90;

		// chart.legend = new am4charts.Legend();

	}); // end am4core.ready()

</script>

<!-- HTML -->
