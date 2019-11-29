
<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>Student Scholarship</title>
 

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   
  <meta name="author" content="Phoenixcoded" />
  <meta http-equiv='Pragma' content='no-cache'>
  <meta http-equiv='Expires' content='-1'>
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
  <style>
  	#profileDisplay{
              /*  display: block;*/
                width: 57%;
                margin: 10px auto;
                border-radius: 100px;
                width: 175px;
                height: 175px;
            }
  </style>
  	 
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
											<h4 class="m-b-10">Student Scholarship</h4>
										</div>
										<div class="page-header-title text-right">
										    	<a href="student_display.php"><button class="btn btn-primary">View</button></a>
										 </div>
										<ul class="breadcrumb">
											<li class="breadcrumb-item">
												<a href="dashboard.php">
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

									<div class="page-body ">
										<div class="row scroll-2">
											<div class="col-sm-12">

												<div class="card">
													<div class="card-header">
														<h5>Student Scholarship</h5>
 													</div>
													<div class="card-block">
														<form method="post" action="process.php" enctype="multipart/form-data">
															<div class="form-group row">
																<label class="col-sm-2 col-form-label">மாணவன் பெயர் <br> Student Name : </label>
																<div class="col-sm-10">
                                                                  	<input type="text" id="firstName" name="student_name" placeholder="Student name" class="form-control" autofocus required>
																	 
																</div>
															</div>
															<div class="form-group row">
																<label class="col-sm-2 col-form-label">விவசாயி பெயர்  <br>(அ) விவசாய தொழிலார் பெயர்  <br> Farmers Name:</label>
																<div class="col-sm-10">
																	 <input type="text" id="farmers_name" name="farmers_name" placeholder="Farmers Name" class="form-control" required>
																	 
																</div>
															</div>
															<div class="form-group row">
																<label class="col-sm-2 col-form-label">மாணவன் பிறந்த தேதி  <br> Student Date of Birth : </label>
																<div class="col-sm-10">
																	<input type="date" id="dob" name="dob" placeholder="Student name" class="form-control" required>
																	 
																</div>
															</div>
															<div class="form-group row">
																<label class="col-sm-2 col-form-label">மாணவர்  வயது   <br> Student Age : </label>
																<div class="col-sm-10">
																	<input type="text" id="student_age" name="student_age" placeholder="Student Age" class="form-control" required>
																	 
																</div>
															</div>
															<div class="form-group row">
																<label class="col-sm-2 col-form-label">மாணவர் ஆதார் என்    <br> Student Aadhar No: </label>
																<div class="col-sm-10">
																	<input type="text" id="student_aadhar" name="student_aadhar" placeholder="Student Aadhar Number" class="form-control" required >
																	 
																</div>
															</div>
															<div class="form-group row">
																<label class="col-sm-2 col-form-label"> மாணவர் தொடர்பு  என்    <br> Student Contact No: </label>
																<div class="col-sm-10">
																	<input type="text" id="student_aadhar" name="student_contact"  placeholder="Student Contact Number" class="form-control" required>
																	 
																</div>
															</div>
															<div class="form-group row">
																<label class="col-sm-2 col-form-label"> முகவரி   <br> Address : </label>
																<div class="col-sm-10">
																	<textarea type="text" id="address" name="address" placeholder="Address" class="form-control" required></textarea>
																	 
																</div>
															</div>
															<div class="form-group row">
																<label class="col-sm-2 col-form-label"> மதம்    <br> Religion : </label>
																<div class="col-sm-10">
																	 <select id="religion" name="religion" class="form-control" required>
										                                <option>Hindu</option>
										                                <option>Muslim</option>
										                                <option>Christian</option> 
										                            </select>  
																	 
																</div>
															</div>
															<div class="form-group row">
																<label class="col-sm-2 col-form-label"> சமூகம்     <br> Cast : </label>
																<div class="col-sm-10">
																  <select id="cast" name="cast" class="form-control" required>
									                                <option>OC</option>
									                                <option>BC</option>
									                                <option>MBC</option>
									                                <option>SC</option>
									                                <option>ST</option> 
									                            </select> 
																	 
																</div>
															</div>
															<div class="form-group row">
																<label class="col-sm-2 col-form-label"> மாணவர் (அ) பெற்றோர் வாங்கி கணக்கு என் <br> Student (or) Parents Bank Account No : </label>
																<div class="col-sm-10">
																	<input type="text" id="account_no" name="bank_account" placeholder="Bank Account Number" class="form-control" required>
																	 
																</div>
															</div>
															<div class="form-group row">
																<label class="col-sm-2 col-form-label"> பள்ளியில் படிக்கும் வகுப்பு <br> Class at study  (அ) கல்லூரியில் படிக்கும் ஆண்டு பிரிவு  <br> Annual section of the college : </label>
																<div class="col-sm-10">
																	<input type="text" id="students_year" name="student_year" placeholder=" Students Year" class="form-control" required>
																	 
																</div>
															</div>
															<div class="form-group row">
																<label class="col-sm-2 col-form-label"> பள்ளி (அ) கல்லூரி முகவரி <br> School (or) College Address : </label>
																<div class="col-sm-10">
																	<textarea type="text" id="sc_address" name="student_address" placeholder="Address" class="form-control" required></textarea>
																	 
																</div>
															</div>
															<div class="form-group row">
																<label class="col-sm-2 col-form-label"> Amount : </label>
																<div class="col-sm-10">
																	<input type="text" id="sc_address" name="amount" value="Rs.150 /-" class="form-control"  accept="image/x-png,image/gif,image/jpeg" readonly required> 
																	 
																</div>
															</div> 
 										                      <div class="form-group row">
																<label class="col-sm-2 col-form-label"> Photo : </label>
																<div class="col-sm-10">
																	<img src="images/dummy.jpg" onclick="triggerClick()" id="profileDisplay" />
                     
																	 <input type="file" name="profileImage" onchange="displayImage(this)" id="image" class="form-control" required>
 																</div>
														       </div> 

                                     
                      
                      
                       						 
 															<div class="form-group row">
																<label class="col-sm-2"></label>
																<div class="col-sm-10">
																	 <a href="news_display.php?t_id=<?php echo $id;?>" target="_blank">  <button type="submit" name="save_user_1" class="btn btn-primary m-b-0">Register</button> </a>
 																</div>
															</div>
														</form>
														<hr />
														<div class="col-sm-12 border_1">
															 <h4 class="condition">நிபந்தனைகள் : </h4>
                                                             <p class="conditon-p">தங்கள் Foundation மூலம் உதவி தொகை பெற Foundation-க்கோ, சார்ந்த நபருக்கோ பணம் எதுவும் வழங்கப்படவில்லை.Foundation மின்னிதழ் பக்கத்தில் பதிவேற்றம் செய்வது எங்களது சொந்த செலவாகும் என்பதை பார்த்து முழுமனதுடன் சம்மதிக்கிறோம்.</p>
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


 

<script>
    function triggerClick() {
    document.querySelector('#profileImage').click();
    }
    function displayImage(e){
        if (e.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e){
                document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
    }
</script>
<script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="files/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script type="text/javascript" src="files/assets/pages/form-validation/validate.js"></script>

<script type="text/javascript" src="files/assets/pages/form-validation/form-validation.js"></script>
<script src="files/assets/js/pcoded.min.js"></script>
<script src="files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="files/assets/js/script.js"></script>

 </body> 
</html>
