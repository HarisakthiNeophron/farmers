 <?php
 include 'connection.php';
 $today=date("Y-m-d");
 $timed=date("h:i:sa");
 $datetime= date('d/m/Y h:i A', time()); 
 ?>

 
<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>Invoice Biogas</title>


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
<?php 	 
if(isset($_POST['invoice_biogas_print_1']))
{
   ?>		
<body onload="window.print()">
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">

			
		 

 

			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">

				 

					<div class=" ">

					 

						<div class=" ">

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
															<!--  <form action="invoice_student_print.php" method="post" target="_blank">
 
 													           <button type="submit" name="invoice_student_print" class="btn btn-success btn-print-invoice m-b-10 btn-sm waves-effect waves-light m-r-20">Print</button>
													         </form>   -->
															<!-- 	<button type="button" class="btn btn-success btn-print-invoice m-b-10 btn-sm waves-effect waves-light m-r-20" onclick="myFunction()">Print</button> -->
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
 					                                                                $amount=$rows['amount'];

									                                            ?>
																			<tr>
																				<td><?php echo $sno;$sno=$sno+1;?></td>
																				<td><?php echo $father_name;?></td>
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

  <?php } ?>			

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
		var dt = new Date();
		document.getElementById("datetime").innerHTML = dt.toLocaleString();
    </script>
</body> 
</html>
