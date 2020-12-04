<?php
session_start();
// error_reporting(0);
include('../../Legalforms/includes/config.php');
$city = (isset($_GET['Acity']) ? $_GET['Acity'] : '');
// $query= "select * from lawyer where city='$city' ";
// $ret=mysqli_query($con,$query);
// $row=mysqli_fetch_array($ret);


?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Attorneys</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.css" >

    <link rel="stylesheet" href="../../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../../css/animate.css">
    
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">

    <link rel="stylesheet" href="../../css/aos.css">

    <link rel="stylesheet" href="../../css/ionicons.min.css">

    <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../../css/flaticon.css">
    <link rel="stylesheet" href="../../css/icomoon.css">
    <link rel="stylesheet" href="../../css/style.css">

   
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="../../index.php">Kachari</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item "><a href="../../index.php" class="nav-link">Home</a></li>
              <li class="nav-item active"><a href="../attorneys.php" class="nav-link active">Find a Lawyer</a></li>
              <li class="nav-item "><a href="../../learnlaw.php" class="nav-link">Learn About Law</a></li>
              <li class="nav-item "><a href="../../legalforms.php" class="nav-link">Legal Forms</a></li>
              <li class="nav-item "><a href="../../Blogs/blog.php" class="nav-link">Blog</a></li>
            </ul>

            <button class="nav-btnlawyer" type="button" onclick="location.href='../loginpage.php'">For Lawyer</button>
          </div>

        </div>
      </nav>
      <!-- END nav -->
     
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../../images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">

            <!-- .......................................Search............................... -->
            <div class="s01" style=" background: rgba(0, 0, 0, 0.5);margin-bottom: 100px;">
         
          <?php
$ret=mysqli_query($con,"select * from lawyer where city = '$city' ");
$row=mysqli_fetch_array($ret)
 
  ?>

        <h2 class="search-header"><span>Welcom to</span> <?php echo htmlentities($row['city']);?> <span>Kachari</span></h2>

       <?php?> 
       
    </div>

    <!-- .......................................Search End............................... -->

            <h1 class="mb-3 bread">Cities</h1>
            <p class="breadcrumbs">
            	<span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
            	<span class="mr-2"><a href="../attorneys.php">Find a Lawyer <i class="ion-ios-arrow-forward"></i></a></span> 
            	<span>Attorneys <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<!--  ========================== header end======================== -->


    <section class="ftco-section bg-light">
      <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Legal Attorneys</h2>
          </div>
        </div>
        <div class="row">


           <?php
$ret=mysqli_query($con,"select * from lawyer where city = '$city' ");
while ($row=mysqli_fetch_array($ret)) {
 
  ?>
      
       <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="block-2 ftco-animate">
              <div class="flipper">
                <div class="front" style="background-image: url('../<?php echo htmlentities($row['image']);?>')" >
                  <!-- <img  src="<?php echo htmlentities($row['image']);?>" data-echo="<?php echo htmlentities($row['image']);?>"  style="width: 437px; height:480px; max-width: 100%; max-height: 100%; " alt=""> -->
                  <div class="box">
                    <h2 href="lawyerinfo.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['name']);?></h2>
                    <p  href="lawyerinfo.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['PracticeAs']);?></p>
                  </div>
                </div>
                <div class="back">
                  
                  
                    <p>
                      <button  type="submit"  onclick="location.href='../Attorneysprofile.php?pid=<?php echo htmlentities($row['id']);?>'" >Lawyer Profile</button>

                    </p>
                  
                  <div class="author d-flex">
                    <div class="image mr-3 align-self-center">
                      <img src="../<?php echo htmlentities($row['image']);?>" data-echo="../<?php echo htmlentities($row['image']);?>" alt="">
                    </div>
                    <div class="name align-self-center" href="lawyerinfo.php?pid=<?php echo htmlentities($row['id']);?>"> <?php echo htmlentities($row['name']);?>
                     <span class="position"  href="lawyerinfo.php?pid=<?php echo htmlentities($row['id']);?>" ><?php echo htmlentities($row['PracticeAs']);?></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>


  <?php

}

?>

         
          
        </div>
        
      </div>
    </section>


   	
    
      

     


    <!-- ....................Footer................................... -->

    <footer class="footer footer-alternate"> <a class="back-to-top" href="#"><span class="back-to-top-icon fa fa-arrow-circle-up" aria-hidden="true"></span>Back to Top</a>
        
      <div class="footer-upper">
        <div class="row">
          <div class="footer-col-1">
            <nav class="footer-nav">
              <ul class="footer-nav-list">
                <li class="footer-nav-section"> 
                  <span class="footer-nav-title">
                    <a href="https://www.findlaw.com/company.html">About Us</a> 
                  </span>
                  <ul id="footer-nav-sublist-1" class="footer-nav-sublist">
                    <li><a href="https://www.findlaw.com/company/contact-us/contacts.html">Contact Us</a></li>
                    <li><a href="https://www.findlaw.com/company/privacy/privacy-citiesment.html">Privacy</a></li>
                    <li><a href="https://www.findlaw.com/company/findlaw-terms-of-service.html">Terms</a></li>
                    <li><a href="https://www.findlaw.com/company/disclaimer.html">Disclaimer</a></li>
                   
        
                  </ul>
                </li>
                <li class="footer-nav-section">
                  <span class="footer-nav-title">
                    <a href="https://lawyers.findlaw.com/">Find a Lawyer</a>
                   
                  </span>
                  <ul id="footer-nav-sublist-2" class="footer-nav-sublist">
                    <li><a href="https://lawyers.findlaw.com/lawyer/cities.jsp">By Location</a></li>
                    <li><a href="https://lawyers.findlaw.com/lawyer/practice.jsp">By Legal Issue</a></li>
                    <li><a href="https://lawyers.findlaw.com/lawyer/lawyer_dir/search/jsp/name_search.jsp">By Name</a></li>
                  </ul>
                </li>
                <li class="footer-nav-section">
                  <span class="footer-nav-title">
                    <a href="https://www.findlaw.com/company/consumer-resources.html">Consumer Resources</a> 
                  </span>
                  <ul id="footer-nav-sublist-3" class="footer-nav-sublist">
                    <li><a href="https://www.superlawyers.com/" target="_blank">Super Lawyers</a></li>
                    <li><a href="https://www.abogado.com/" target="_blank">Abogado</a></li>
                    <li><a href="https://www.lawinfo.com/" target="_blank">LawInfo</a></li>
                  </ul>
                </li>
                <li><span class="footer-nav-title"><a href="https://www.findlaw.com/company/resources-for-legal-professionals.html">Attorney Resources </a></span></li>
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
                  <a class="footer-social-facebook" rel="nofollow noopener" href="https://www.facebook.com/FindLawConsumers" target="_blank"><span class="footer-social-icon fab fa-facebook-f" aria-hidden="true"></span>Facebook</a>
                </li>
                <li>
                  <a class="footer-social-youtube" rel="nofollow noopener" href="https://www.youtube.com/watch?v=WQiNbzazOhw" target="_blank"><span class="footer-social-icon fab fa-youtube" aria-hidden="true"></span>YouTube</a>
                </li>
                <li>
                  <a class="footer-social-twitter" rel="nofollow noopener" href="https://twitter.com/findlawconsumer" target="_blank"><span class="footer-social-icon fab fa-twitter" aria-hidden="true"></span>Twitter</a>
                </li>
                <li>
                  <a class="footer-social-pinterest" rel="nofollow noopener" href="https://pinterest.com/findlawconsumer/" target="_blank"><span class="footer-social-icon fab fa-pinterest" aria-hidden="true"></span>Pinterest</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" staroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/jquery.easing.1.3.js"></script>
  <script src="../../js/jquery.waypoints.min.js"></script>
  <script src="../../js/jquery.stellar.min.js"></script>
  <script src="../../js/owl.carousel.min.js"></script>
  <script src="../../js/jquery.magnific-popup.min.js"></script>
  <script src="../../js/aos.js"></script>
  <script src="../../js/jquery.animateNumber.min.js"></script>
  <script src="../../js/bootstrap-datepicker.js"></script>
  <script src="../../js/jquery.timepicker.min.js"></script>
  <script src="../../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../../js/google-map.js"></script>
  <script src="../../js/main.js"></script>
    
  </body>
</html>