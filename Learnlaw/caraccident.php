<?php
session_start();
// error_reporting(0);
include('../Legalforms/includes/config.php');



?>




<!DOCTYPE html>
<html>
<head>
  <title>Car Accidents Law</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css" >

    <script></script>

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

 <style type="text/css" media="screen">
      .icon-checkmark{
        
         float: left; 
         height: 20px; 
         position: relative;
         margin-right: 10px;
         top: -5px;
       }

         .icon-checkmark img{
          width: 20px;
          display: inline-block;
          vertical-align: middle;
    height: auto;
         }

      .law-category h2{
         font-size: 1.1rem;line-height: 1.1rem;margin-bottom: .5rem;font-weight: 500;}
         .law-category a {
                color: #666;
                font-size: 13px;
                text-decoration: none;
                  }
            .law-category a:hover {
            color: #ffa100;
            text-decoration: underline;
               }
            .law-category h2 a {
                font-size: 1.1rem;
                text-decoration: none;
             }
      
    </style>

</head>
<body>


 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="../index.php"><span class="flaticon-auction">Kachari</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
              <li class="nav-item "><a href="../FindLawyer.php" class="nav-link">Find a Lawyer</a></li>
              <li class="nav-item active"><a href="../learnlaw.php" class="nav-link">Learn About Law</a></li>
              <li class="nav-item "><a href="../legalforms.php" class="nav-link">Legal Forms</a></li>
              <li class="nav-item "><a href="../Blogs/blog.php" class="nav-link">Blog</a></li>
            </ul>

            <button class="nav-btnlawyer" type="button" onclick="location.href='../Lawyers/loginpage.php'">For  Lawyers</button>
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
            <h1 class="mb-3 bread">Practise Area</h1>
            <p class="breadcrumbs">
                <span class="mr-2"><a href="../index.php">Home <i class="ion-ios-arrow-forward"></i></a></span>
                <span class="mr-2"><a href="../learnlaw.php">Practise Area <i class="ion-ios-arrow-forward"></i></a></span>
                <span>Car Accidents Law <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<!-- ============== law detail==================== -->
    <section style="background-color: #f8f9fa;">

      <div class="container">
        <div class="row justify-content-left py-5">
          <div class="col-lg-12 col-md-12 " style="color: #666; " >


              <div class="media-object-section">
        <div class="thumbnail">
            <a class="card-category">
                <h1 class="mb-4"><span class="fa fa-car" style="margin-right: 12px;"></span>Car Accidents Law</h1>
            </a>
        </div>
    </div>

                   <p class="text-justify">Car accidents can be terrifying experiences. Often, at least some of the people involved are injured, sometimes severely, and the automobiles that crashed are damaged. The legal system can help the parties sort out who is at fault for the accident, and which party needs to pay the doctors' and mechanics' bills.</p>

                   <h2>How a Car Accident Case Works</h2>

                    <p class="text-justify">
                    Car accident law is a combination of traffic and personal injury law. Someone who is injured in an auto accident can hire an attorney who will negotiate with the other drivers to determine who should pay for the damage, and if necessary, the attorney will file a lawsuit. The courts will piece together exactly what happened using police reports, photos, and other evidence, and then use the local traffic laws as well as legal concepts such as to determine who caused the accident. Whoever is at fault usually has to compensate the other party for medical and property expenses, as well as for harm such as lost wages and pain and suffering.
                   </p>

                    <p class="text-justify">
                    However, this is not always a simple calculation, since sometimes both drivers are at fault. Each state has slightly different rules for situations in which there is more than one person responsible for the crash. Some states require that one party pays all the bills, whereas others allow the two parties to split the bills according to the amount each party is to blame.
                   </p>
                   
                   <h2>The Role of Auto Insurance</h2>
                    <p class="text-justify">
                        Fortunately, most people do not pay all of the damages stemming from a collision out of pocket. Automobile insurance may pay to repair at least some of the damages or replacement cost for all or some of the vehicles involved, and may pay for some medical expenses as well. Insurance companies may also pay for an attorney, if necessary, although clients do not usually get to choose their own attorney. State laws vary widely on the extent and types of insurance required to drive a vehicle.     </p>

                   <h2>Determining Who Is At Fault</h2>

                   <p class="text-justify">
                    The laws on who is at fault vary depending on the types of vehicles involved. Most states give more protections to pedestrians and bicyclists, since they are more vulnerable to injuries from a collision. Similarly, motorcyclists may have greater injuries, but motorcyclists also must follow different traffic rules since they can be faster and more nimble than an automobile. Truck drivers are usually professionally trained and certified, and have to drive more carefully than most other drivers. Determining who pays for the damage after a collision with a truck is slightly more complicated than other kinds of accidents because trucks are often commercially owned, so the liability may rest not only on the driver, but on the owner of the truck as well.
                   </p>
                    <p class="text-justify">
                    Look through the articles in this section to find more information on the different types of collisions, how auto insurance works, and on what to do after a car accident to ensure that any legal case that follows goes as smoothly as possible.
                   </p>


                 <div class="law-category">
        <div class="icon-checkmark">
            <img src="../images/checkmark.svg" alt="">
        </div>
        <h2 >
            <a href="files/accident.pdf" target="_dpdf">Download Complete Car Accidents law Ordinence</a>
        </h2>
    </div>
    
                  


          </div>
        </div>
      </div>  
    </section>


  
    <!-- .............................Footer............................ -->

<footer class="footer footer-alternate"> <a class="back-to-top" href="#"><span class="back-to-top-icon fa fa-arrow-circle-up" aria-hidden="true" id="#ftc"> </span>Back to Top</a>
        
      <div class="footer-upper">
        <div class="row">
          <div class="footer-col-1">
            <nav class="footer-nav">
              <ul class="footer-nav-list">
                <li class="footer-nav-section"> 
                  <span class="footer-nav-title">
                    <a href="../Footer/aboutus.php ">About Us</a> 
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
                    <a href="../Lawyers/attorneys.php">Find a Lawyer</a>
                   
                  </span>
                  <ul id="footer-nav-sublist-2" class="footer-nav-sublist">
                    <li><a href="../Lawyers/attorneys.php ">By Location</a></li>
                    <li><a href="../Lawyers/attorneys.php ">By Legal Issue</a></li>
                    <li><a href="../Lawyers/attorneys.php ">By Name</a></li>
                  </ul>
                </li>
                <li class="footer-nav-section">
                  <span class="footer-nav-title">
                    <a href=" ">Consumer Resources</a> 
                  </span>
                  <ul id="footer-nav-sublist-3" class="footer-nav-sublist">
                    <li><a href="../Lawyers/loginpage.php " target="_blank">Super Lawyers</a></li>
                    <li><a href="../learnlaw.php " target="_blank">LawInfo</a></li>
                  </ul>
                </li>
                <li><span class="footer-nav-title"><a href="../Lawyers/loginpage.php ">Attorney Resources </a></span></li>
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