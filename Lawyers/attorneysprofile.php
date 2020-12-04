<?php 
session_start();
// error_reporting(0);
include('../Legalforms/includes/config.php');

$id = (isset($_GET['pid']) ? $_GET['pid'] : '');
$ret=mysqli_query($con,"select * from lawyer where id='$id' ");
$row=mysqli_fetch_array($ret);


 if(isset($_POST['submit'])){


    $to = $row['email'];
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
     $number = $_REQUEST['number'];
      $date = $_REQUEST['date'];
    $subject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "Kachari-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have Message from your Kachari Client.";

    $logo = 'images/law.svg';
    $link = 'https://www.Kachari.com/';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Client Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "<td style='border:none;'><strong>Client number:</strong> {$number}</td>";
	$body .= "<td style='border:none;'><strong>Appointment Date:</strong> {$date}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

	$Send=mail($to, $subject, $body, $headers);

    if ($Send) {
     	echo "Email has successfully sent";
     } else{
     	echo "Email not sent";
     }

    
     
     
   
        
    	
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kachari/Find a Lawyer</title>
	
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css" >
    

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
     <link rel="stylesheet" href="../css/style.css">

</head>
<body>
	 <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="../index.php"><span class="flaticon-auction">Kachari</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item "><a href="../index.php" class="nav-link">Home</a></li>
              <li class="nav-item active"><a href=" attorneys.php" class="nav-link">Find a Lawyer</a></li>
              <li class="nav-item "><a href="../learnlaw.php" class="nav-link">Learn About Law</a></li>
              <li class="nav-item "><a href="../legalforms.php" class="nav-link">Legal Forms</a></li>
              <li class="nav-item "><a href="../Blogs/blog.php" class="nav-link">Blog</a></li>
            </ul>

            <button class="nav-btnlawyer" type="submit" onclick="location.href='loginpage.php'" >For  Lawyers</button>
          </div>

        </div>
      </nav>
      <!-- END nav -->

       <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">

            <!-- .......................................Search............................... -->
  <?php 
     
     include('include/searchbar2.php');

   ?>

    <!-- .......................................Search End............................... -->
            <h1 class="mb-3 bread">Search Top Lawyers Near You</h1>
            <p class="breadcrumbs">
                <span class="mr-2"><a href="../index.php">Home <i class="ion-ios-arrow-forward"></i></a></span>
                <span class="mr-2"><a href="attorney.php">Find a Lawyer <i class="ion-ios-arrow-forward"></i></a></span>
                <span>Lawyer Profile  <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-marketing section-hero">
            <div class="row links">
            <nav class="nav-browse-by">
            <h3>Lawyer's Profile</h3>
            <ul>
            
            </ul>
            </nav>
            </div>
</section>




<!-- .....................................Legal Areas................................ -->

   
	
	  <!--================Home Banner Area =================-->


    
        <section class="profile_area" >
            <div class="container">
                <div class="profile_inner p_120">
                    <div class="row" id="#profile">
                        <div class="col-lg-5" >
                            <img class="img-fluid" src="<?php echo htmlentities($row['image']);?>" data-echo="<?php echo htmlentities($row['image']);?>" alt=""  height="428" width="561">
                        </div>
                        <div class="col-lg-7">
                            <div class="personal_text">
                                <h6>Hello Everybody, i am</h6>
                                <h3><?php echo htmlentities($row['name']);?></h3>
                                <h4><?php echo htmlentities($row['PracticeAs']);?></h4>
                                <p><?php echo htmlentities($row['experience']);?></p>
                                <ul class="list basic_info no-bullet ">
                                    <li><a href="#" style="display: inherit;"><i class="fa fa-book"></i><p style= "margin-bottom: 0;"><?php echo htmlentities($row['education']);?></p></a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i><?php echo htmlentities($row['contactno']);?></a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i><?php echo htmlentities($row['email']);?></a></li>
                                    <li><a href="#"><i class="fa fa-home"></i><?php echo htmlentities($row['city']);?></a></li>
                                </ul>
                                <ul class="list personal_social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->


         <div class="appointment_area" >
        <div class="container">
            <div class="row align-items-center" id="appointment">
              

                <div class="col-xl-5 col-md-6 col-lg-6" >
                    <div class="appiontment_thumb d-none d-lg-block">
                        <img src="../images/1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-md-6 col-md-12 col-lg-6" style="flex: 20px !important;">
                    <div class="appointment_info">
                        <div class="opacity_icon d-none d-lg-block">
                            <i class="flaticon-balance"></i>
                        </div>
                        <h3>Make an Appointment</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <form  method="POST">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                            <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                            <input type="email" name="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                            <input type="text" name="number" placeholder="Phone no.">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <input id="datepicker" name="date" placeholder="Appointment date">

                                    </div>
                                    <div class="col-xl-12">
                                        <textarea placeholder="Message" name="message" ></textarea>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="appoinment_button">
                                            <button class="boxed-btn5 " type="submit" >Submit</button>

                                            
                                        </div>
                                    </div>
                                </div>
        
                            </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

<!-- .............................Footer............................ -->
<footer class="footer footer-alternate"> <a class="back-to-top" href="#"><span class="back-to-top-icon fa fa-arrow-circle-up" aria-hidden="true" id="#ftc"> </span>Back to Top</a>
        
      <div class="footer-upper">
        <div class="row">
          <div class="footer-col-1">
            <nav class="footer-nav">
              <ul class="footer-nav-list">
                <li class="footer-nav-section"> 
                  <span class="footer-nav-title">
                    <a href="Footer/aboutus.php ">About Us</a> 
                  </span>
                  <ul id="footer-nav-sublist-1" class="footer-nav-sublist">
                    <li><a href="../Footer/contactus.php ">Contact Us</a></li>
                    <li><a href="../Footer/contactus.php ">Privacy</a></li>
                    <li><a href=" ">Terms</a></li>
                    <li><a href=" ">Disclaimer</a></li>
                   
        
                  </ul>
                </li>
                <li class="footer-nav-section">
                  <span class="footer-nav-title">
                    <a href="attorneys.php">Find a Lawyer</a>
                   
                  </span>
                  <ul id="footer-nav-sublist-2" class="footer-nav-sublist">
                    <li><a href="attorneys.php ">By Location</a></li>
                    <li><a href="attorneys.php ">By Legal Issue</a></li>
                    <li><a href="attorneys.php ">By Name</a></li>
                  </ul>
                </li>
                <li class="footer-nav-section">
                  <span class="footer-nav-title">
                    <a href=" ">Consumer Resources</a> 
                  </span>
                  <ul id="footer-nav-sublist-3" class="footer-nav-sublist">
                    <li><a href="loginpage.php " target="_blank">Super Lawyers</a></li>
                    <li><a href="../learnlaw.php " target="_blank">LawInfo</a></li>
                  </ul>
                </li>
                <li><span class="footer-nav-title"><a href="loginpage.php ">Attorney Resources </a></span></li>
              </ul>
            </nav>
          </div>
          <div class="col-lg bushours">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Business Hours</h2>
              <div class="opening-hours">
                <h4>Opening Days:</h4>
                <p class="pl-3">
                  <span>Monday – Friday : 9am to 20 pm</span><br>
                  <span>Saturday : 9am to 17 pm</span>
                </p>
                <h4>Vacations:</h4>
                <p class="pl-3">
                  <span>All Sunday Days</span><br>
                  <span>All Official Holidays</span>
                </p>
              </div>
            </div>
          </div>
          <div class="footer-col-3">        
            <div class="footer-social">
              <h3 class="footer-social-title">Follow us:</h3>
              <ul>
                <li>
                  <a class="footer-social-facebook" rel="nofollow noopener" href="https://www.facebook.com/ " target="_blank"><span class="footer-social-icon fab fa-facebook-f" aria-hidden="true"></span>Facebook</a>
                </li>
                <li>
                  <a class="footer-social-youtube" rel="nofollow noopener" href="https://www.youtube.com/ " target="_blank"><span class="footer-social-icon fab fa-youtube" aria-hidden="true"></span>YouTube</a>
                </li>
                <li>
                  <a class="footer-social-twitter" rel="nofollow noopener" href="https://twitter.com/" target="_blank"><span class="footer-social-icon fab fa-twitter" aria-hidden="true"></span>Twitter</a>
                </li>
                <li>
                  <a class="footer-social-pinterest" rel="nofollow noopener" href="https://pinterest.com/" target="_blank"><span class="footer-social-icon fab fa-pinterest" aria-hidden="true"></span>Pinterest</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      


    </footer>

	 <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>