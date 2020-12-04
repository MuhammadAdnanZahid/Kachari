<?php
session_start();
// error_reporting(0);
include('../Legalforms/includes/config.php');



?>


<!DOCTYPE html>
<html>
<head>
  <title>Elder Law</title>

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
                <span>
Elder Law <i class="ion-ios-arrow-forward"></i></span></p>
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
                <h1 class="mb-4"> <img src="../images/icon-elderlaw.svg" alt="" style="width: 70px; height: 70px; margin-bottom: 9px;">Elder's Law</h1>
            </a>
        </div>
    </div>
           

                   <p class="text-justify">
We all aim for a long and prosperous life, complete with financial security and good health. In our golden years we can hopefully enjoy leisurely retirement while finding new pursuits outside of work. But, as we get older, we may face issues with our health, such as decreasing mobility and mental clarity. Further, having enough money for retirement is never guaranteed and individuals with a fixed income may face a number of potential challenges. FindLaw's Elder Law section covers a wide range of legal matters unique to aging and elderly Americans, such as long-term care options and elder abuse.</p>

                   <h2>What Exactly is Elder Law?</h2>

                    <p class="text-justify">
                    Elder law includes a wide range of issues affecting older individuals, from drafting a power of attorney to seeking recourse for consumer scams that target the elderly. An elder law attorney may help his or her clients with a variety of issues, such as the following:

                    <ul>
                      <li>Problems with Health Care Benefits (Insurance, Medicare, or Medicaid)</li>
                      <li>Social Security Issues</li>
                      <li>Estate Planning</li>
                      <li>Elder Abuse</li>
                      <li>Long-Term Care</li>
                      <li>Guardianship and Conservatorship</li>
                    </ul>
                   </p>

                    <p class="text-justify">
                   Passage of the Older Americans Act (OOA) in 1965, the same year Medicare was created, marked a significant federal recognition of legal matters unique to the elderly. The OOA created the Administration on Aging within the Department of Health and Human Services and established state grants for research and community services affecting older individuals. Later amendments to OOA included a national nutrition program for the elderly and the National Family Caregiver Support Program, which was intended to help families caring for older loved ones through support groups and financial assistance.
                   </p>
                   
                   <h2>Does Elder Law Include End of Life Issues?</h2>
                    <p class="text-justify">
                        Most end of life issues fall within the scope of elder law, although family members of the elderly often help with the process. As we approach the end of our lives, we or our loved ones may choose to draft a living will, appoint a health care agent, sign an advance directive, and even state how we would like our remains treated after death. A handful of states even allow the terminally ill to end their lives through assisted suicide.   </p>

                         <h2>How Can an Elder Law Attorney Help Me?</h2>

                   <p class="text-justify">
                    An elder law attorney can help you navigate the complexities of various state and federal laws to help you better plan for your later years, giving you peace of mind. Although elder law as a practice area is quite diverse, the best elder law attorneys understand the unique needs of elderly clients.
                   </p>


                 <div class="law-category">
        <div class="icon-checkmark">
            <img src="../images/checkmark.svg" alt="">
        </div>
        <h2 >
            <a href="files/elder.pdf" target="_dpdf">Download Complete 
Elder law Ordinence</a>
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