
<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<title> Login</title>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="Phoenixcoded" />

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
</head>
<body themebg-pattern="theme1">
	<section class="login-block">

		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<form class="md-float-material form-material" action="login.php" method="post">
						<div class="text-center">
							<img src="images/logo.png" alt="logo.png">
						</div>
						<div class="auth-box card">
							<div class="card-block">
								<div class="row m-b-20">
									<div class="col-md-12">
										<h3 class="text-center">Sign In</h3>
									</div>
								</div>
								<div class="form-group form-primary">
									<input type="text" name="uname" class="form-control" required="" placeholder="Your Name">
									<span class="form-bar"></span>
									 
								</div>
								<div class="form-group form-primary">
									<input type="password" name="password" class="form-control" required="" placeholder="Password">
									<span class="form-bar"></span>
									 
								</div>
								<div class="row m-t-25 text-left">
									<div class="col-12">
										<div class="checkbox-fade fade-in-primary d-">
											<label>
												<input type="checkbox" value="">
												<span class="cr"><i class="cr-icon fas fa-check txt-primary"></i></span>
												<span class="text-inverse">Remember me</span>
											</label>
										</div>
										<div class="forgot-phone text-right float-right">
											<a href="#" class="text-right f-w-600"> Forgot Password?</a>
										</div>
									</div>
								</div>
								<div class="row m-t-30">
									<div class="col-md-12">
										<button type="submit" value="Login" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
									</div>
								</div>
								<hr />
								 
							</div>
						</div>
					</form>

				</div>

			</div>

		</div>

	</section>





	<script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
	<script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>

	<script src="../files/assets/pages/waves/js/waves.min.js"></script>

	<script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
	<script type="text/javascript" src="files/assets/js/common-pages.js"></script>
</body>
</html>
<?php
 session_destroy();

?>