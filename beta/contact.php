<?php 
if(isset($_POST['submitNow']))
{
    $mail_message="";
	$fname = $_POST['firstName'];
	$lname = $_POST['lastName'];
	$email = $_POST['email'];
	$msg = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
	
	if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {  
                $_SESSION['errors'] = "Only alphabets and white space are allowed in firs name.";  
     }elseif(empty($fname)){
		 $_SESSION['errors']="First name can not be empty";
	 }
	 else{
		 $fname = $fname;
	 }	
	if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {  
               $_SESSION['errors'] = "Only alphabets and white space are allowed in last name.";  
     }elseif(empty($lname)){
		 $_SESSION['errors']="Last name can not be empty";
	 }
	 else{
		 $lname = $lname;
	 }	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  $_SESSION['errors'] = "Invalid email format";
	}else{
		$email = $email;
	}
	
	if(empty($_SESSION['errors']))
	{
		$to = 'info@explore-insights.net';
         $subject = "Message from ".$email;
         
         $message = "Dear, <br>";
         $message.= $msg."<br><br><br>";
         $message.="From: <br>";
         $message.=$fname." ".$lname;
         $header='';
         $header.= "MIME-Version: 1.0\r\n";
         $header.= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            $mail_message="Message has been sent successfully...";
         }else {
            $mail_message= "Message could not be sent...";
         }
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Explore|Insights Contact Us</title>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" type="text/css">
<link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

<!--Header-->

<header class="main-header flex flex-wrap align-center desk-bar" >  <div class="container">    <div id="mySidenav" class="navbar flex flex-wrap justify-between">      <div class="header-left flex align-center">        <div class="main-logo">           <a href="index.html"> <img src="images/main-logo.svg" alt=""> </a>         </div>      </div>      <div class="header-right flex flex-wrap align-center justify-end">        <div class="nav-menu">          <ul class="desk-menu flex flex-wrap">            <li class="nav-drop"><a href="#">Solutions <span> <img src="images/down-arw.svg" alt=""> </span> </a>              <div class="right-submenu">                <ul>				  <li><a href="platfrom.html">The Phoenix</a></li>                  <li><a href="custom-solutions.html">Custom Solutions</a></li>                  <li class="hide"><a href="data-scientists-list.html">Data Scientists List</a></li>                </ul>              </div>            </li>            <li><a href="pricing.html">Pricing</a></li>			<li class="nav-drop"><a href="#">About Us <span> <img src="images/down-arw.svg" alt=""> </span> </a>              <div class="right-submenu">                <ul>				  <li><a href="analytics-teams.html">Analytics Teams</a></li>                  <li><a href="our-values.html">Our Values</a></li>                </ul>              </div>            </li>            <li class="hide"><a href="blog.html">Blog</a></li>            <li class="menu-active"><a href="contact.html">Contact Us</a></li>          </ul>        </div>        <div class="nav-btns flex flex-wrap justify-end">          <ul class="flex flex-wrap">            <li class="hide"><a class="log-btn" href="login.html">Log In</a></li>            <li><a class="cont-btn" href="contact.html">Contact Us</a></li>          </ul>        </div>      </div>    </div>  </div>  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></header>

<!-- mobile-header -->
<div class="mobile-header flex flex-wrap align-center">
  <div class="container">
    <div class="mobile-bar flex flex-wrap align-center">
      <div class="mobile-left flex flex-wrap align-center">
        <a href="index.html"> <img src="images/main-logo.svg" alt=""> </a> 
      </div>
      <div class="mobile-right flex flex-wrap justify-end align-center">
        <span class="mobile-menu" onclick="openNav()">&#9776;</span>
      </div>
    </div>
  </div>
</div>


<!-- banner -->
<section class="banner-inner blog-bnr contact-bnr">
  <div class="container">
    <div class="home-bnr-area">
      <h1>Contact Us</h1>
      <p>Send your message below and a dedicated client manager will make contact with you as soon as possible. For immediate assistance please call our sales number.
      </p>
    </div>
  </div>
  <div class="contact-area-sec">
    <div class="container">
      <div class="contact-area flex flex-wrap">
        <div class="cont-left">
          <h2>Head Office</h2>
          <ul>
            <li>
              <div class="cont-img">
                <img src="images/location-icon.svg" alt="">
              </div>
              <div class="cont-disc">
                <h6>Location : </h6>
                <p>Brickfield Canvas, 35 Brickfield Rd, 1st Floor, Salt River, Cape Town, 7925</p>
              </div>
            </li>
            <li>
              <div class="cont-img">
                <img src="images/email-icon.svg" alt="">
              </div>
              <div class="cont-disc">
                <h6>Email : </h6>
                <a href="mailto:info@explore-insights.net">info@explore-insights.net</a>
              </div>
            </li>
            <li>
              <div class="cont-img">
                <img src="images/call-icon.svg" alt="">
              </div>
              <div class="cont-disc">
                <h6>Call :  </h6>
                <a href="tel:+27(83)5651150">+27 (83) 565 1150</a>
              </div>
            </li>
          </ul>
          <div class="cont-map">
            <img src="images/map-img.jpg" alt="">
          </div>
        </div>
        <div class="cont-right">
          <div class="get-in">
            <h2>Get In Touch</h2>
            <form action="" method="post">
              <ul class="cont-form">
                <li>
                  <div class="cont-input">
                    <input type="text" name="firstName" placeholder="First Name">
                    <input type="text" name="lastName" placeholder="Last Name">
                  </div>
                </li>
                <li>
                  <input type="email" name="email" placeholder="Email Address">
                </li>
                <li>
                  <textarea name="message" placeholder="Your Message"></textarea>
                </li>
              </ul>
			  <ul>
			  <?php if(!empty($_SESSION['errors']))
					{
						 /* foreach($_SESSION['errors'] as $err)
						  {
							  
							 echo "<li style='color:red'>".$err."</li>";
							 
						  }*/ print_r($_SESSION['errors']);
				  
					}
					echo $mail_message;
				  ?>
				  </ul>
              <button class="btn cont-submit" name="submitNow" type="submit" >Submit Now</button>
            </form>
          </div>
        </div>
      </div>		
    </div>
  </div>
</section>

<!-- footer -->
<footer class="footer-main">    <div class="container">      <div class="footer-area flex flex-wrap">        <div class="footer-left">          <div class="footer-logo">            <img src="images/logo-ftr.svg" alt="">          </div>          <div class="social-ftr social-dsk">            <ul class="flex">              <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>	              <li><a href="#"> <i class="fab fa-linkedin-in"></i> </a></li>            </ul>          </div>          <p class="dsk-cp">Copyright © EXPLORE Insights 2019.<br>            All rights reserved.</p>        </div>        <div class="footer-right">          <div class="footer-1">            <h4>Solutions</h4>            <ul>              <li><a href="custom-solutions.html">Custom Solutions</a></li>              <li><a href="platfrom.html">The Phoenix</a></li>            </ul>          </div>          <div class="footer-2">            <h4>About Us</h4>            <ul>              <li><a href="analytics-teams.html">Analytics Teams</a></li>              <li><a href="our-values.html">Our Values</a></li>            </ul>          </div>          <div class="footer-3">            <h4>Company</h4>            <ul>              <li><a href="pricing.html">Pricing</a></li>              <li><a href="contact.html">Contact us</a></li>            </ul>          </div>        </div>        <div class="footer-left social-mb">          <div class="social-ftr">            <ul class="flex">              <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>              <li><a href="#"> <i class="fab fa-linkedin-in"></i> </a></li>            </ul>          </div>          <p>Copyright © EXPLORE Insights 2019.<br> All rights reserved.      </div>    </div></footer>


<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>

</body>
</html>
