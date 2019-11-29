 
<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>Register Invoice</title>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

 
	<link rel="icon" href="images/favicon.jpg" type="image/x-icon">
	<script type="text/javascript" src="files/bower_components/jquery/js/jquery.min.js"></script>
	<script type="text/javascript" src="files/assets/js/pace.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

	<link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">

	<link rel="stylesheet" type="text/css" href="files/assets/css/font-awesome-n.min.css">

	<link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="files/assets/css/pages.css">

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
							<i class="fa fa-sign-out"></i>
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
                                          <a href="index.php"><i class="fa fa-sign-out"> Logout</a></i>
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
											<h4 class="m-b-10">Invoice</h4>
										</div>
										<ul class="breadcrumb">
											<li class="breadcrumb-item">
												<a href="dashboard.html">
													<i class="fa fa-home"></i> Dashboard
												</a>
											</li>
 										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="pcoded-inner-content">

							<div class="main-body">
								<div class="page-wrapper">

									<div class="page-body">

										<div class="container">

											<div>

												<div class="card">
													<div class="row invoice-contact">
													  <div class="col-md-2 padding-40">
                                                         <img src="images/1_33.png" class="m-b-10" alt="">
													  </div>
														<div class="col-md-4 padding-40">
															<div class="invoice-box row">
																<div class="col-sm-12">
																	 <h4>FARMERS <br> FOUNDATION</h4>
																</div>
															</div>
														</div>	
														

														<div class="col-md-6">
															<h3>INVOICE NO :</h3>
                                                            <br>
															 <p>Date/Time: <span id="datetime"></span></p>
															  <form action="invoice_biogas_print_1.php" method="post" target="_blank">
 
 													           <button type="submit" name="invoice_biogas_print_1" class="btn btn-success btn-print-invoice m-b-10 btn-sm waves-effect waves-light m-r-20">Print</button>
													         </form> 
																<!-- <button type="button" class="btn btn-success btn-print-invoice m-b-10 btn-sm waves-effect waves-light m-r-20" onclick="myFunction()">Print</button> -->
																<!-- <button type="button" class="btn btn-danger waves-effect m-b-10 btn-sm waves-light" download>Download</button> -->
														 
												 
														</div>
														 
																									 
													</div>
													<div class="card-block">
														 
														<div class="row invoive-info">
															<div class="col-md-6 col-xs-12 invoice-client-info  ">
																<h4>Company Address :</h4> 
																<p class="m-0 m-t-10">Nalavariya aluvalagam,<br>Palaiyavettu vasathi variyam,<br>Ellis nagar(A),<br>Dharapuram,<br>Tirupur-638 657.</p>
																<p class="m-0"> +91 8903605577 - 9994695606</p>
																 
															</div>
 															<div class="col-md-6 col-sm-6">
 																<?php  $sno="1";
										                          $query=mysqli_query($conn,"SELECT * FROM biogas_scholarship ORDER BY id DESC limit 1");  WHILE($rows=mysqli_fetch_array($query)){
 																		$firstname=$rows['firstname'];
																		$father_name=$rows['father_name'];
 																		$student_aadhar=$rows['student_aadhar'];
																		$contact=$rows['contact'];
																		$address=$rows['address'];  
 									                               ?>
																 <h4>Candidate Details</h4>
																 <p>Name : <?php echo $firstname;?></p>
																 <p>Father Name : <?php echo $father_name;?></p>
																 <p>Aadhar No : <?php echo $student_aadhar;?></p>
																 <p>Address : <?php echo $address;?></p>
																 <p>Mobile No : <?php echo $contact;?></p>
																 <?php  } ?>	
															</div>
														</div>
 												 
 														<div class="row">
															<div class="col-sm-12">
																<div class="table-responsive">
																	<table class="table  invoice-detail-table">
																		<thead>
																			<tr class="thead-default"> 
																				<th>S.No</th>
																				<th>Name</th>
																				<th>Unit Amount</th>
																				<th>Total Amount</th> 
																			</tr>
																		</thead>
																		<tbody>
																			<?php  $sno="1";
										                                        $query=mysqli_query($conn,"SELECT * FROM biogas_scholarship ORDER BY id DESC limit 1");
										                                        WHILE($rows=mysqli_fetch_array($query)){
										                                        	$id=$rows['id']; 
										                                        	$firstname=$rows['firstname'];
 					                                                                $amount=$rows['amount'];

									                                            ?>
																			<tr>
																				<td><?php echo $sno;$sno=$sno+1;?></td>
																				<td><?php echo $firstname;?></td>
 																				<td><?php echo $amount;?></td>
 																				<td><?php echo $amount;?></td>
																			</tr>
																			 
																			 <?php  } ?>	
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<table class="table table-responsive invoice-table invoice-total">
																	<tbody>
  																		<tr class="text-info">
																			<td>
 																				<h5 class="text-primary">Total : </h5>
																			</td>
																			<td>
 																				<h5 class="text-primary"> Rs.15000</h5>
																			</td>
 																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<div class="row">
														  <div class="col-sm-12">
														   <h5 style="float: right;padding-bottom: 10px;">Fifteen Thousand Rupees Only</h5>
														  </div>
												    	</div>
												    	<div class="row">
														  <div class="col-sm-12">
														   <h5 style="float: right;padding-bottom: 60px; ">Signature</h5>
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
					</div>
				</div>
			</div>
		</div>
	</div>



	<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
	<script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>

	<script src="files/assets/pages/waves/js/waves.min.js"></script>

	<script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

	<script type="text/javascript" src="files/bower_components/modernizr/js/modernizr.js"></script>
	<script type="text/javascript" src="files/bower_components/modernizr/js/css-scrollbars.js"></script>

	<script src="files/assets/js/pcoded.min.js"></script>
	<script src="files/assets/js/vertical/vertical-layout.min.js"></script>
	<script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="files/assets/js/script.js"></script>
	<script>
	function myFunction() {
	  window.print();
	}
	</script>
	<script>
		var dt = new Date();
		document.getElementById("datetime").innerHTML = dt.toLocaleString();
    </script>
</body> 
</html>
