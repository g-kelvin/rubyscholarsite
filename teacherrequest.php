<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>RUBICOM LIMITED</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <!-- <a href="index.html" style="color: #0000A0" >  <STRONG >Njeru Nyaga & Company</STRONG>  <BR><SMALL  >&nbsp;&nbsp;&nbsp;Certified Public Accountants</SMALL>  </a> -->
                             <a href="index.html"><img src="img/core-img/p-01.png" alt=""></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="P.O Box 1234, Block H, Waititu Plaza, 2nd Flr, Mombasa Road ,Nairobi - Kenya"><img src="img/core-img/placeholder.png" alt=""> <span>P.O Box 1234, Block H, Waititu Plaza, 2nd Flr, Mombasa Road ,Nairobi - Kenya</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="info@rubicom.co.ke"><img src="img/core-img/message.png" alt=""> <span>info@rubicom.co.ke</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    
                                    <li><a href="post.html">Blog</a></li>
                                    <li><a href="#">Sign Up</a>
                                        <ul class="dropdown">
                                            <li><a href="newspregister.php">Register</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="#"><img src="img/core-img/call2.png" alt="">+254 704 447 775</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

  

     <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Student Request</h2>
                        <p>Rubicom Limited</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <p> <?php 
	if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $oname = $_POST['oname'];
        $age = $_POST['age'];
        $idnumber = $_POST['idnumber'];
        $gender = $_POST['gender'];
        $email = $_POST['email']; 
		$telephone = $_POST['tel'];
        $county = $_POST['county'];
        $town = $_POST['town'];
        $estate = $_POST['estate'];
        $education = $_POST['education'];
        $curriculum = $_POST['curriculum'];
        $teach = $_POST['teach'];
        $yoteaching = $_POST['yoteaching'];
        $employer = $_POST['employer'];
        $subjects = $_POST['subjects'];
        $message = $_POST['message'];
	

		$to = "request@rubicom.co.ke";
		$subject = 'Teacher Registration Request'." , ";
		$msg ="Name: ".$fname." ".$lname." ".$oname."  "."Age: ".$age." , "."ID Number: ".$idnumber." , "."Gender: ".$gender." ,"." Telephone Number".$tel." , "." County: ".$county." , "." Town: ".$town." , ".$estate." ,". " My Highest Education Level is: ".$education." , "." I teacher this Curriculum:".$curriculum." , "."I Can Teach this level : ".$teach." , "." Have Taught for This Years: ".$yoteaching." , "." My Current Employer is: ".$employer." , "." Am Good in Teaching the Following Subjects:".$subjects." , "." My Bio is: ".$message ;
		$headers ="From: ".$email;
         if(mail($to,$subject,$msg,$headers)){
         	
	      echo "<b>Message Sent. Thank You $name for your message.<b>";
}

else {
	echo "Not Sent";
	
}

       


	}
	else
	{
		echo "try again";
	}

 ?></p>

                
               
                 
               
            </div>
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->


 <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">About Us</h5>
                        <!-- Nav -->
                        <nav>
                        
                                <p style="color: white"> Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.Morbi ut dapibus dui. </p>
                                
                           
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Quick Links</h5>
                        <!-- Nav -->
                        <nav>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="post.html">Blog</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Our Loans</h5>
                        <!-- Nav -->
                        <nav>
                            <ul style="color: white">
                            <li><i class="flaticon-032-placeholder"></i>P.O Box 1234, Block H, Waititu Plaza, 2nd Flr, Mombasa Road ,Nairobi - Kenya</li>
                             <li><i class="flaticon-025-arroba"></i>info@profwaititu.com</li>
                              <p style="color: white">+254 704 447 775</p>
                            <li><i class="flaticon-038-wall-clock"></i>Everyday: 08:00 -18:00 pm</li>
                        </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Latest News</h5>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/7.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">How to get the best loan?</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/8.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">A new way to get a loan</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single News Area -->
                        <div class="single-latest-news-area d-flex align-items-center">
                            <div class="news-thumbnail">
                                <img src="img/bg-img/9.jpg" alt="">
                            </div>
                            <div class="news-content">
                                <a href="#">Finance you home</a>
                                <div class="news-meta">
                                    <a href="#" class="post-author"><img src="img/core-img/pencil.png" alt=""> Jane Smith</a>
                                    <a href="#" class="post-date"><img src="img/core-img/calendar.png" alt=""> April 26</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Footer Logo -->
                            <div class="logo">
                            <a href="index.html"  > <h4 style="color: white"> <STRONG >&nbsp;&nbsp;Prof Waititu</STRONG>  <BR><SMALL  >Company Limited</SMALL>  </h4></a>
                        </div>

                            <!-- Copywrite Text -->
                            <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |Developed </i> By <a href="https://softwaretechn.co.ke" target="_blank">Software Technology Kenya</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>