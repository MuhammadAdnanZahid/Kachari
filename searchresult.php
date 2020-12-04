<?php
session_start();
// error_reporting(0);
include('Legalforms/includes/config.php');
$find="%{$_POST['product']}%";
$location="%{$_POST['city']}%";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Kachari</title>

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css" >

    <script></script>

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
   

    </head>
    <body>

     <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php"><span class="flaticon-auction">Kachari</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
              <li class="nav-item "><a href="Lawyers/attorneys.php" class="nav-link">Find a Lawyer</a></li>
              <li class="nav-item "><a href="learnlaw.php" class="nav-link">Learn About Law</a></li>
              <li class="nav-item "><a href="legalforms.php" class="nav-link">Legal Forms</a></li>
              <li class="nav-item "><a href="Blogs/blog.php" class="nav-link">Blog</a></li>
            </ul>

            <button class="nav-btnlawyer" type="submit" onclick="location.href='Lawyers/loginpage.php'" >For  Lawyers</button>
          </div>

        </div>
      </nav>
      <!-- END nav -->

       <div class="hero-wrap " style="background-image: url('images/bg_1.jpg'); height: 330px; " data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">


        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We are here to help!</h2>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                <span>Experience</span> . <span>Innovation</span> . <span>Excellence</span>
            </h1>
          </div>
        </div>
      </div>
    </div>
<!-- .......................................Search............................... -->

          <?php 
             
             include('include/searchbar1.php');

           ?>

<!-- .....................................Legal Areas................................ -->

     <section class="ftco-section bg-light">
      <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Your Search Result</h2>
          </div>
        </div>
        <div class="row">


           <?php
$ret=mysqli_query($con,"select * from lawyer where PracticeAs like '$find' and city like '$location'");
while ($row=mysqli_fetch_array($ret)) {
 
  ?>
      
       <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="block-2 ftco-animate">
              <div class="flipper">
                <div class="front" style="background-image: url('Lawyers/<?php echo htmlentities($row['image']);?>')" >
                  <!-- <img  src="<?php echo htmlentities($row['image']);?>" data-echo="<?php echo htmlentities($row['image']);?>"  style="width: 437px; height:480px; max-width: 100%; max-height: 100%; " alt=""> -->
                  <div class="box">
                    <h2 href="lawyerinfo.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['name']);?></h2>
                    <p  href="lawyerinfo.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['PracticeAs']);?></p>
                  </div>
                </div>
                <div class="back">
                  
                  
                    <p>
                      <button  type="submit"  onclick="location.href='Lawyers/Attorneysprofile.php?pid=<?php echo htmlentities($row['id']);?>'" >Lawyer Profile</button>

                    </p>
                  
                  <div class="author d-flex">
                    <div class="image mr-3 align-self-center">
                      <img src="Lawyers/<?php echo htmlentities($row['image']);?>" data-echo="Lawyers/<?php echo htmlentities($row['image']);?>" alt="">
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
        
    


<!-- .............................Footer............................ -->
<footer class="footer footer-alternate"> <a class="back-to-top" href="#"><span class="back-to-top-icon fa fa-arrow-circle-up" aria-hidden="true"></span>Back to Top</a>
        
      <div class="footer-upper">
        <div class="row">
          <div class="footer-col-1">
            <nav class="footer-nav">
              <ul class="footer-nav-list">
                <li class="footer-nav-section"> 
                  <span class="footer-nav-title">
                    <a href=" ">About Us</a> 
                  </span>
                  <ul id="footer-nav-sublist-1" class="footer-nav-sublist">
                    <li><a href=" ">Contact Us</a></li>
                    <li><a href=" ">Privacy</a></li>
                    <li><a href=" ">Terms</a></li>
                    <li><a href=" ">Disclaimer</a></li>
                   
        
                  </ul>
                </li>
                <li class="footer-nav-section">
                  <span class="footer-nav-title">
                    <a href="Fin">Find a Lawyer</a>
                   
                  </span>
                  <ul id="footer-nav-sublist-2" class="footer-nav-sublist">
                    <li><a href=" ">By Location</a></li>
                    <li><a href=" ">By Legal Issue</a></li>
                    <li><a href=" ">By Name</a></li>
                  </ul>
                </li>
                <li class="footer-nav-section">
                  <span class="footer-nav-title">
                    <a href=" ">Consumer Resources</a> 
                  </span>
                  <ul id="footer-nav-sublist-3" class="footer-nav-sublist">
                    <li><a href=" " target="_blank">Super Lawyers</a></li>
                    <li><a href=" " target="_blank">Abogado</a></li>
                    <li><a href=" " target="_blank">LawInfo</a></li>
                  </ul>
                </li>
                <li><span class="footer-nav-title"><a href=" ">Attorney Resources </a></span></li>
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


   


    

        <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
    </body>
</html>