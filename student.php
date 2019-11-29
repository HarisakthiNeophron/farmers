<?php
include('connection.php');
?>

<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <title>Farmers Foundation NGO | Student Scholarship</title>
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
                                <li class="dropdown current"><a href="#">Apply Scholarship</a>
                                    <ul>
                                        <li ><a href="student.php">Student Scholarship</a></li>
                                        <li><a href="biogas.php">Biogas Scholarship</a></li>
                                        <li><a href="solar.php">Solar Scholarship</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.php">Gallery </a></li>
                                <li><a href="contact-us.php">Contact</a></li>
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
                            <li class="dropdown current"><a href="#">Apply Scholarship</a>
                                <ul>
                                    <li><a href="student.php">Student Scholarship</a></li>
                                    <li><a href="biogas.php">Biogas Scholarship</a></li>
                                    <li><a href="solar.php">Solar Scholarship</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery.php">Gallery </a></li>
                            <li><a href="contact-us.php">Contact</a></li>
                        </ul>
                    </div>                    
                </nav><!-- Main Menu End-->
            </div>                
        </div>
    </div>
</header>
<!--End Main Header -->


<!--Page Title-->
<section class="page-title" style="background-image:url(images/main-slider/student.png);">
    <div class="container">
        <div class="title-text clearfix">
            <h1>Student Scholarship</h1>
            <ul class="title-menu">
                <li><a href="index.php">home</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Student Scholarship</li>
            </ul>
        </div>           
    </div>
</section>
<!--End Page Title-->


<!--about-section Style-->
<section class="about-section bg">
    <div class="container">
        <div class="sec-title text-center">
            <h3 class="pdb-30">Student <span>Registration</span></h3>
        </div>

        <div class="row">
            <div class="col-md-1 col-sm-6 col-xs-12 ">

            </div>
            <div class="col-md-10 col-sm-6 col-xs-12 ">
             <form method="post" action="process.php" enctype="multipart/form-data">
                <div class="form-group row">
                   <label for="firstName" class="col-sm-4 control-label">1.) மாணவன் பெயர் <br> Student Name : </label>
                    <div class="col-sm-8">
                        <input type="text" id="firstName" name="student_name" placeholder="Student name" class="form-control" autofocus required>

                    </div>
                </div>
                <div class="form-group row">
                   <label for="farmersname" class="col-sm-4 control-label">2.) விவசாயி பெயர்  <br>(அ) விவசாய தொழிலார் பெயர்  <br> Farmers Name:</label>
                    <div class="col-sm-8">
                       <input type="text" id="farmers_name" name="farmers_name" placeholder="Farmers Name" class="form-control" required>

                   </div>
               </div>
               <div class="form-group row">
                 <label for="studentname" class="col-sm-4 control-label">3.)மாணவன் பிறந்த தேதி  <br> Student Date of Birth : </label>
                <div class="col-sm-8">
                    <input type="date" id="dob" name="dob" placeholder="Student name" class="form-control" required>

                </div>
            </div>
            <div class="form-group row">
                 <label for="studentage" class="col-sm-4 control-label">4.) மாணவர்  வயது   <br> Student Age : </label>
                <div class="col-sm-8">
                    <input type="text" id="student_age" name="student_age" placeholder="Student Age" class="form-control" required>

                </div>
            </div>
            <div class="form-group row">
                 <label for="studentaadhar" class="col-sm-4 control-label">5.) மாணவர் ஆதார் என்    <br> Student Aadhar No: </label>
                <div class="col-sm-8">
                    <input type="text" id="student_aadhar" name="student_aadhar" placeholder="Student Aadhar Number" class="form-control" required >

                </div>
            </div>
            <div class="form-group row">
                <label for="contact" class="col-sm-4 control-label"> 6.) மாணவர் தொடர்பு  என்    <br> Student Contact No: </label>
                <div class="col-sm-8">
                    <input type="text" id="student_aadhar" name="student_contact"  placeholder="Student Contact Number" class="form-control" required>

                </div>
            </div>
            <div class="form-group row">
                 <label for="address" class="col-sm-4 control-label">7.) முகவரி   <br> Address : </label>
                <div class="col-sm-8">
                    <textarea type="text" id="address" name="address" placeholder="Address" class="form-control" required></textarea>

                </div>
            </div>
            <div class="form-group row">
                <label for="religion" class="col-sm-4 control-label">8.) மதம்    <br> Religion : </label>
                <div class="col-sm-8">
                   <select id="religion" name="religion" class="form-control" required>
                    <option>Hindu</option>
                    <option>Muslim</option>
                    <option>Christian</option> 
                </select>  

            </div>
        </div>
        <div class="form-group row">
             <label for="cast" class="col-sm-4 control-label">9.) சமூகம்     <br> Cast : </label>
            <div class="col-sm-8">
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
         <label for="account" class="col-sm-4 control-label">10.) மாணவர் (அ) பெற்றோர் வாங்கி கணக்கு என் <br> Student (or) Parents Bank Account No : </label>
        <div class="col-sm-8">
            <input type="text" id="account_no" name="bank_account" placeholder="Bank Account Number" class="form-control" required>

        </div>
    </div>
    <div class="form-group row">
         <label for="year" class="col-sm-4 control-label">11.) பள்ளியில் படிக்கும் வகுப்பு <br> Class at study  (அ) கல்லூரியில் படிக்கும் ஆண்டு பிரிவு  <br> Annual section of the college : </label>
        <div class="col-sm-8">
            <input type="text" id="students_year" name="student_year" placeholder=" Students Year" class="form-control" required>

        </div>
    </div>
    <div class="form-group row">
        <label for="address" class="col-sm-4 control-label">12.) பள்ளி (அ) கல்லூரி முகவரி <br> School (or) College Address : </label>
        <div class="col-sm-8">
            <textarea type="text" id="sc_address" name="student_address" placeholder="Address" class="form-control" required></textarea>

        </div>
    </div>
    <div class="form-group row">
         <label for="amount" class="col-sm-4 control-label">13.) தேதி <br> Date : </label>
        <div class="col-sm-8">
            <input type="date" id="date" name="date"   class="form-control" equired> 

        </div>
    </div>
    <div class="form-group row">
         <label for="amount" class="col-sm-4 control-label">14.) Amount : </label>
        <div class="col-sm-8">
            <input type="text" id="sc_address" name="amount" value="Rs.150 /-" class="form-control"  accept="image/x-png,image/gif,image/jpeg" readonly required> 

        </div>
    </div> 
    <div class="form-group row">
         <label for="photo" class="col-sm-4 control-label">15.) Photo : </label>
        <div class="col-sm-8">
            <img src="images/dummy.jpg" onclick="triggerClick()" id="profileDisplay"hidden />

            <input type="file" name="profileImage" onchange="displayImage(this)" id="image" class="form-control" required>
        </div>
    </div> 





    <div class="form-group row">
        <label class="col-sm-4"></label>
        <div class="col-sm-8">
         <button type="submit" name="save_user_1" class="btn btn-primary m-b-0">Register</button> 
     </div>
 </div>
</form>

               <!--  <form class="form-horizontal" role="form" method="post" action="process.php">

                    <div class="form-group">
                        <label for="firstName" class="col-sm-4 control-label">1).மாணவன் பெயர் <br> Student Name : </label>
                        <div class="col-sm-8">
                            <input type="text" id="firstName" name="student_name" placeholder="Student name" class="form-control" autofocus required>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="farmers_name" class="col-sm-4 control-label">2).விவசாயி பெயர்  <br>(அ) விவசாய தொழிலார் பெயர்  <br> Farmers Name: </label>
                        <div class="col-sm-8">
                            <input type="text" id="farmers_name" name="farmers_name" placeholder="Farmers Name" class="form-control" required>
                         </div>
                    </div>

                     <div class="form-group">
                        <label for="dob" class="col-sm-4 control-label">3).மாணவன் பிறந்த தேதி  <br> Student Date of Birth : </label>
                        <div class="col-sm-8">
                            <input type="date" id="dob" name="dob" placeholder="Student name" class="form-control" required>
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="student_age" class="col-sm-4 control-label">4).மாணவர்  வயது   <br> Student Age : </label>
                        <div class="col-sm-8">
                            <input type="text" id="student_age" name="student_age" placeholder="Student Age" class="form-control" required>
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="student_aadhar" class="col-sm-4 control-label">5).மாணவர் ஆதார் என்    <br> Student Aadhar No: </label>
                        <div class="col-sm-8">
                            <input type="text" id="student_aadhar" name="student_aadhar" placeholder="Student Aadhar Number" class="form-control" required >
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="student_aadhar" class="col-sm-4 control-label">6).மாணவர் தொடர்பு  என்    <br> Student Contact No: </label>
                        <div class="col-sm-8">
                            <input type="text" id="student_aadhar" name="student_contact"  placeholder="Student Contact Number" class="form-control" required>
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="address" class="col-sm-4 control-label">7).முகவரி   <br> Address : </label>
                        <div class="col-sm-8">
                            <textarea type="text" id="address" name="address" placeholder="Address" class="form-control" required></textarea>
                         </div>
                     </div>
                    <div class="form-group">
                        <label for="religion" class="col-sm-4 control-label">8).மதம்    <br> Religion : </label>
                        <div class="col-sm-8">
                             <select id="religion" name="religion" class="form-control" required>
                                <option>Hindu</option>
                                <option>Muslim</option>
                                <option>Christian</option> 
                            </select>  
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="cast" class="col-sm-4 control-label">9).சமூகம்     <br> Cast : </label>
                        <div class="col-sm-8">
                             <select id="cast" name="cast" class="form-control" required>
                                <option>OC</option>
                                <option>BC</option>
                                <option>MBC</option>
                                <option>SC</option>
                                <option>ST</option> 
                            </select> 
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="account_no" class="col-sm-4 control-label">10).மாணவர் (அ) பெற்றோர் வாங்கி கணக்கு என் <br> Student (or) Parents Bank Account No : </label>
                        <div class="col-sm-8">
                            <input type="text" id="account_no" name="bank_account" placeholder="Bank Account Number" class="form-control" required>
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="students_year" class="col-sm-4 control-label">11).பள்ளியில் படிக்கும் வகுப்பு <br> Class at study  (அ) கல்லூரியில் படிக்கும் ஆண்டு பிரிவு  <br> Annual section of the college : </label>
                        <div class="col-sm-8">
                            <input type="text" id="students_year" name="student_year" placeholder=" Students Year" class="form-control" required>
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="sc_address" class="col-sm-4 control-label">12).பள்ளி (அ) கல்லூரி முகவரி <br> School (or) College Address : </label>
                        <div class="col-sm-8">
                            <textarea type="text" id="sc_address" name="student_address" placeholder="Address" class="form-control" required></textarea>
                         </div>
                     </div>
                     <div class="form-group row">
                      <label for="photo" class="col-sm-4 control-label">13.) Photo : </label>
                       <div class="col-sm-8">
                        <img src="images/dummy.jpg" onclick="triggerClick()" id="profileDisplay" hidden="" />
                         <input type="file" name="photo" onchange="displayImage(this)" id="image" class="form-control" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="sc_address" class="col-sm-4 control-label">14).Amount : </label>
                        <div class="col-sm-8">
                            <input type="text" id="amount" name="amount" value="Rs.150 /-" class="form-control" readonly required> 
                         </div>
                     </div>
 
                
                    <div class="form-group">
                        <div class="col-sm-3 col-sm-offset-4">
                            <button type="submit" name="submit" class="btn btn-success btn-block">Register</button>
                        </div>
                    </div>
                </form> --> <!-- /form -->
                <div class="col-md-12 border_1">
                    <h4 class="condition">நிபந்தனைகள் : </h4>
                    <p class="conditon-p">தங்கள் Foundation மூலம் உதவி தொகை பெற Foundation-க்கோ, சார்ந்த நபருக்கோ பணம் எதுவும் வழங்கப்படவில்லை.Foundation மின்னிதழ் பக்கத்தில் பதிவேற்றம் செய்வது எங்களது சொந்த செலவாகும் என்பதை பார்த்து முழுமனதுடன் சம்மதிக்கிறோம்.</p>
                </div>

            </div>
            <div class="col-md-1 col-sm-6 col-xs-12 ">

            </div>

        </div>
    </div>
</section>
<!--about-section Style-->



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
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.js"></script> 
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
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
<script src="js/script.js"></script>
</body> 
</html>
