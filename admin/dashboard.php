<?php
session_start();
if (isset($_SESSION['log'])) 
{
?>
<!DOCTYPE html>
<html lang="en"> <head>
	<title> Dashboard </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
   
	<link rel="icon" href="images/favicon.jpg" type="image/x-icon">
	<script type="text/javascript" src="files/bower_components/jquery/js/jquery.min.js"></script>
	<script type="text/javascript" src="files/assets/js/pace.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

	<link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">

	<link rel="stylesheet" type="text/css" href="files/assets/css/font-awesome-n.min.css">

	<link rel="stylesheet" href="files/assets/pages/chart/radial/css/radial.css" type="text/css" media="all">

	<link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="files/assets/css/widget.css">

	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">

			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">
					<div class="navbar-logo">
						<a href="index.php">
							<img class="img-fluid" src="images/favicon.jpg" alt="Theme-Logo" />
						</a>
						<a class="mobile-menu" id="mobile-collapse" href="#!">
							<i class="fa fa-bars"></i>
						</a>
						<a class="mobile-options waves-effect waves-light">
							<i class="feather icon-more-horizontal"></i>
						</a>
					</div>
					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li>
								<a href="#" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
									<i class="fa fa-desktop"></i>
								</a>
							</li>
							 
						</ul>
						<ul class="nav-right">
						 
							 
							<li class="header-notification">
								<div class="dropdown-primary dropdown">
									<div class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-sign-out"></i>
										<span class="badge bg-c-red">5</span>
									</div>
									<ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
										<li>
                                          <a href="index.php"><i class="fa fa-sign-out"> Logout</i></a>
										</li>
										 
										 
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
 
			  
			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">

					<nav class="pcoded-navbar">
						<div class="nav-list">
							<div class="pcoded-inner-navbar main-menu">
								<div class="pcoded-navigation-label">Navigation</div>
  								<ul class="pcoded-item pcoded-left-item">
 									<li class="">
										<a href="dashboard.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-home"></i>
											</span>
											<span class="pcoded-mtext">Dashboard</span>
										</a>
									</li>
									<li class="">
										<a href="student.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-user"></i>
											</span>
											<span class="pcoded-mtext">Student Scholarship</span>
										</a>
									</li>
									<li class="">
										<a href="biogas.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-fire"></i>
											</span>
											<span class="pcoded-mtext">Biogas Scholarship</span>
										</a>
									</li>
									<li class="">
										<a href="solar.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-sun-o"></i>
											</span>
											<span class="pcoded-mtext">Solar Scholarship</span>
										</a>
									</li>
									<li class="pcoded-hasmenu">
										<a href="javascript:void(0)" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-credit-card"></i>
											</span>
											 Reports 
										</a>
										<ul class="pcoded-submenu">
											<li class=" ">
												<a href="student_report.php" class="waves-effect waves-dark">
													<i class="fa fa-angle-right"></i>  Student Report  
												</a>
											</li> 
											<li class=" ">
												<a href="biogas_report.php" class="waves-effect waves-dark">
													<i class="fa fa-angle-right"></i>  Biogas Report
												</a>
											</li>
											<li class=" ">
												<a href="solar_report.php" class="waves-effect waves-dark">
													<i class="fa fa-angle-right"></i>   Solar Report 
												</a>
											</li>  

										</ul> 
									</li>
								</ul>
 							</div>
						</div>
					</nav>

					<div class="pcoded-content">

						<div class="page-header">
							<div class="page-block">
								<div class="row align-items-center">
									<div class="col-md-12">
										<div class="page-header-title">
											<h5 class="m-b-10">Dashboard</h5>
										</div>
 									</div>
								</div>
							</div>
						</div>

						<div class="pcoded-inner-content">

							<div class="main-body">
								<div class="page-wrapper">

									<div class="page-body">
										<div class="row">

											<div class="col-xl-3 col-md-6">
												<div class="card o-hidden bg-c-blue web-num-card">
													<div class="card-block text-white">
														<h5 class="m-t-15">Student Scholarship</h5>
														<h3 class="m-b-15"><i class="fa fa-rupee"></i> 150</h3>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-md-6">
												<div class="card o-hidden bg-c-green web-num-card">
													<div class="card-block text-white">
														<h5 class="m-t-15">Biogas Subsidy </h5>
														<h3 class="m-b-15"><i class="fa fa-rupee"></i> 15000</h3>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-md-6">
												<div class="card o-hidden bg-c-red web-num-card">
													<div class="card-block text-white">
														<h5 class="m-t-15">Solar Subsidy</h5>
														<h3 class="m-b-15"><i class="fa fa-rupee"></i> 3750</h3>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-md-6">
												<div class="card o-hidden bg-c-yellow web-num-card">
													<div class="card-block text-white">
														<h5 class="m-t-15">Donation</h5>
														<h3 class="m-b-15"><i class="fa fa-rupee"></i> 500</h3>
													</div>
												</div>
											</div>


											<!-- <div class="col-xl-8 col-md-6">
												<div class="card">
													<div class="card-header">
														<h5>Leads Overview</h5>
														<div class="card-header-right">
															<ul class="list-unstyled card-option">
																<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
																<li><i class="feather icon-maximize full-card"></i></li>
																<li><i class="feather icon-minus minimize-card"></i></li>
																<li><i class="feather icon-refresh-cw reload-card"></i></li>
																<li><i class="feather icon-trash close-card"></i></li>
																<li><i class="feather icon-chevron-left open-card-option"></i></li>
															</ul>
														</div>
													</div>
													<div class="card-block">
														<div id="lead-overview-chart" class="chart-shadow" style="height:345px"></div>
													</div>
												</div>
											</div>
											<div class="col-xl-4 col-md-6">
												<div class="card amount-close-card">
													<div class="card-header">
														<h5>Amount Closed by Lead Source</h5>
													</div>
													<div class="card-block">
														<div class="row align-items-center m-b-15">
															<div class="col-auto">
																<h6 class="m-b-0 text-c-blue">By Web</h6>
															</div>
															<div class="col text-right">
																<p class="m-b-0">64%</p>
															</div>
														</div>
														<div class="progress">
															<div class="progress-bar bg-c-blue" style="width:65%"></div>
														</div>
														<div class="row align-items-center m-b-15">
															<div class="col-auto">
																<h6 class="m-b-0 text-c-red">Phone Call</h6>
															</div>
															<div class="col text-right">
																<p class="m-b-0">23%</p>
															</div>
														</div>
														<div class="progress">
															<div class="progress-bar bg-c-red" style="width:23%"></div>
														</div>
														<div class="row align-items-center m-b-15">
															<div class="col-auto">
																<h6 class="m-b-0 text-c-yellow">E- mail</h6>
															</div>
															<div class="col text-right">
																<p class="m-b-0">44%</p>
															</div>
														</div>
														<div class="progress">
															<div class="progress-bar bg-c-yellow" style="width:44%"></div>
														</div>
														<div class="row align-items-center m-b-15">
															<div class="col-auto">
																<h6 class="m-b-0 text-c-green">Advertisement</h6>
															</div>
															<div class="col text-right">
																<p class="m-b-0">79%</p>
															</div>
														</div>
														<div class="progress">
															<div class="progress-bar bg-c-green" style="width:79%"></div>
														</div>
														<div class="row align-items-center m-b-15">
															<div class="col-auto">
																<h6 class="m-b-0 text-c-blue">By Application</h6>
															</div>
															<div class="col text-right">
																<p class="m-b-0">76%</p>
															</div>
														</div>
														<div class="progress">
															<div class="progress-bar bg-c-blue" style="width:46%"></div>
														</div>
													</div>
												</div>
											</div> -->
 
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				 

			</div>
		</div>
	</div>
 

<script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="files/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script src="files/assets/pages/widget/amchart/amcharts.js"></script>
<script src="files/assets/pages/widget/amchart/serial.js"></script>
<script src="files/assets/pages/widget/amchart/light.js"></script>

<script src="files/bower_components/chartist/js/chartist.js"></script>

<script src="files/assets/js/pcoded.min.js"></script>
<script src="files/assets/js/vertical/vertical-layout.min.js"></script>
<script type="text/javascript" src="files/assets/pages/dashboard/custom-dashboard.min.js"></script>
<script type="text/javascript" src="files/assets/js/script.min.js"></script>
</body> 
</html>
<?php
}
else {
    echo "please fill the details";
    header("refresh:2;url=index.php");
}

?>