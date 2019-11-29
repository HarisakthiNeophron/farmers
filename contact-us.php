
<!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8">
<title>Farmers Foundation NGO | contact us</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
<link rel="icon" href="images/favicon.jpg" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet"> 
</head>


<body>
      <?php
        if(isset($_POST['sendmail'])) {

            require 'PHPMailerAutoload.php';
            require 'credential.php';

            $mail = new PHPMailer;

            // $mail->SMTPDebug = 4;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = EMAIL;                 // SMTP username
            $mail->Password = PASS;                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            $mail->setFrom(EMAIL, 'Farmersfoundation');
            $mail->addAddress(EMAIL);     // Add a recipient

            $mail->addReplyTo($_POST['email']);

            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Name = $_POST['name']; 
            $mail->Address = $_POST['address'];
            $mail->Body    = $_POST['message'];
            $mail->AltBody = $_POST['message'];

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }
        }
     ?>
<div class="page-wrapper">  
    <!-- Preloader -->
    

    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->

    <!--Header search-->
    <section class="header-search">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="search-form pull-right">
                        <form action="#">
                            <div class="search">
                                <input type="search" name="search" value="" placeholder="Search Something">
                                <button type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Header search-->


    <!-- Main Header-->
      <header class="main-header">
        <div class="header-top">
            <div class="container">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="main-logo">
                        <figure>
                            <a href="index.php"><img src="images/1_3.jpg" alt=""></a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="main-header-info clearfix">
                        <div class="header-info">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h6>Call Us:</h6>
                            <span>8903605577 / 9994695606</span>
                        </div>
                        <div class="header-info">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <h6>Email Us:</h6>
                            <a href="#"><span>farmersfoundation@yahoo.com </span></a>
                        </div>
                        <!-- <div class="search-button">
                            <div class="toggle-search">
                                <button><span class="fa fa-search" aria-hidden="true"></span></button>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
                    
        <div class="header-lower">
            <div class="container">
                <div class="header-area">
                    <nav class="main-menu">
                        <div class="navbar-header clearfix">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="service.php">Services</a></li>
                                 <li class="dropdown"><a href="#">Apply Scholarship</a>
                                    <ul>
                                        <li><a href="student.php">Student Scholarship</a></li>
                                        <li><a href="biogas.php">Biogas Scholarship</a></li>
                                        <li><a href="solar.php">Solar Scholarship</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.php">Gallery </a></li>
                                <li class="current"><a href="contact-us.php">Contact</a></li>
                             </ul>
                        </div>                    
                    </nav>
                    <div class="link-btn">
                       <a href="student.php" class="theme-btn btn-style-one">Apply Scholarship</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-header">
            <div class="container clearfix">
                <!--Logo-->
                <div class="logo">
                    <a href="index.php"><img src="images/1_33.png" alt=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header clearfix">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="service.php">Services</a></li>
                                 <li class="dropdown"><a href="#">Apply Scholarship</a>
                                    <ul>
                                        <li><a href="student.php">Student Scholarship</a></li>
                                        <li><a href="biogas.php">Biogas Scholarship</a></li>
                                        <li><a href="solar.php">Solar Scholarship</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.php">Gallery </a></li>
                                <li class="current"><a href="contact-us.php">Contact</a></li>
                             </ul>
                        </div>                    
                    </nav><!-- Main Menu End-->
                </div>                
            </div>
        </div>
    </header>
    <!--End Main Header -->
     

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/3.jpg);">
        <div class="container">
            <div class="title-text clearfix">
                <h1>Contact Us</h1>
                <ul class="title-menu">
                    <li><a href="index.php">home</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>Contact Us</li>
                </ul>
            </div>           
        </div>
    </section>
    <!--End Page Title-->
       

    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="sec-title">
                        <h3>Contact <span>Info</span></h3>
                    </div>                    
                    <ul class="contact-list">
                        <li class="item">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h5>Address</h5>
                            <p>Nalavariya aluvalagam,Palaiyavettu vasathi variyam,Ellis nagar(A),Dharapuram,Tirupur-638 657</p>
                         </li>
                        <li class="item">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h5>Phone</h5>
                            <p>8903605577 <br> 9994695606</p>
                        </li>
                        <li class="item">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <h5>Email</h5>
                            <p>farmersfoundation@yahoo.com </p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="sec-title">
                        <h3>Send <span>Message</span></h3>
                    </div>                    
                    <div class="default-form-area">
                        <form id="contact-form" name="contact_form" class="default-form" action="http://html.tonatheme.com/2017/charity2/inc/sendmail.php" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name" id="name_1" name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="email" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Address" id="address" name="address">
                                    </div>
                                    <div class="form-group">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="btn-style-two" type="submit" id="submit" name="sendmail" data-loading-text="Please wait...">send message</button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea placeholder="message"></textarea>
                                    </div>
                                </div>
                            </div>                                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Start Google map area-->
    <section class="google-map-area">
          <div class="sec-title text-center pdb-30">
                <h3>Contact <span>Map</span></h3> 
            </div> 
      <div class="container">
        <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=VINAYAGA%20MOTORS%2C%20MANGALAM%2C%20TIRUPUR%20-%20641%20663&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div> 
        </div>
     </div>
     <!--    <div class="container">
            <div 
                class="google-map" 
                id="contact-google-map" 
                data-map-lat="44.799511" 
                data-map-lng="-106.951309" 
                data-icon-path="images/resource/map-marker_1.png" 
                data-map-title="Sheridan School Special Education" 
                data-map-zoom="12"
                data-markers='{
                    "marker-1": [44.799511, -106.951309, "<h4>Sheridan School Special Education</h4><p>201 N Connor St Sheridan, WY 82801</p>","images/resource/map-marker_1.png"]
                }'>

            </div>                    
        </div>        -->   
     
    </section>
    <!--End Google map area-->  


   
    <!--Main Footer-->
    <footer class="main-footer">
        <div class="container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row">                          
                    <!--Footer Column-->
                    <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                        <div class="about-widget">
                            <div class="footer-logo">
                                <a href="index.php"><img src="images/1_33.png" alt=""></a>
                            </div> 
                            <div class="widget-content">
                                 <p> The Farmers Foundation is today’s conversation catalyst for INDIAN  agriculture, with a history of leading the discussion around critical issues.  </p>
                            </div> 
                            <div class="link-btn">
                                <a href="contact-us.php">contact us</a>
                            </div>                 
                        </div>
                    </div>                            
                    <!--Footer Column-->
                    <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                        <div class="links-widget">
                            <h4>quick links</h4>
                            <ul class="links-list">
                                <li><a href="about.php"><i class="fa fa-angle-right" aria-hidden="true"></i> About</a></li>
                                <li><a href="service.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Services</a></li>
                                <li><a href="student.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Student Scholarship</a></li>
                                <li><a href="biogas.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Biogas Scholarship</a></li>
                                <li><a href="solar.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Solar Scholarship</a></li>
                                <li><a href="gallery.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Gallery </a></li>
                                <li><a href="contact-us.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact</a></li>
                             </ul>
                        </div>
                    </div>
                    <!--Footer Column-->
                    <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                        <div class="contact-links">
                            <h4>contuct us</h4>                         
                           
                            <div class="widget-content">
                                <div class="footer-info">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <h6>Nalavariya aluvalagam,Palaiyavettu vasathi variyam,Ellis nagar(A),Dharapuram,Tirupur-638 657</h6>
                                </div>
                                <div class="footer-info">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h6>8903605577 / 9994695606</h6>
                                </div>
                                <div class="footer-info">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <a href="#"><h6>farmersfoundation@yahoo.com </h6></a>
                                </div>
                            </div>
                        </div>
                    </div>                                              
                    <!--Footer Column-->
                    <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                        <h4>gallery</h4>
                        <div class="gallery-widget">
                            <div class="row">
                                <div class="image-column col-md-4 col-sm-4 col-xs-12">
                                    <figure>
                                        <a href="#"><img src="images/footer/1_1.jpg" alt=""></a>
                                    </figure>
                                </div>
                                <div class="image-column col-md-4 col-sm-4 col-xs-12">
                                    <figure>
                                        <a href="#"><img src="images/footer/2_2.jpg" alt=""></a>
                                    </figure>
                                </div>
                                <div class="image-column col-md-4 col-sm-4 col-xs-12">
                                    <figure>
                                        <a href="#"><img src="images/footer/3_3.jpg" alt=""></a>
                                    </figure>
                                </div>
                                <div class="image-column col-md-4 col-sm-4 col-xs-12">
                                    <figure>
                                        <a href="#"><img src="images/footer/4_4.jpg" alt=""></a>
                                    </figure>
                                </div>
                                <div class="image-column col-md-4 col-sm-4 col-xs-12">
                                    <figure>
                                        <a href="#"><img src="images/footer/5_5.jpg" alt=""></a>
                                    </figure>
                                </div>
                                <div class="image-column col-md-4 col-sm-4 col-xs-12">
                                    <figure>
                                        <a href="#"><img src="images/footer/6_6.jpg" alt=""></a>
                                    </figure>
                                </div>
                            </div>                            
                        </div>
                    </div>                   
                </div>
            </div>         
        </div>        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-text text-center">Copyright &copy;   2019. All Rights Reserved</div>
            </div>            
        </div>         
    </footer>
    <!--Main Footer-->


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>



<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.js"></script> 
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/html5lightbox.js"></script>
<script src="js/circle-progress.js"></script>
<script src="js/owl.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script src="js/masterslider/masterslider.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.countTo.js"></script>



<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>


<script src="js/script.js"></script>





</body> 
</html>
