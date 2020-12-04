<?php
session_start();
// error_reporting(0);
include('../Legalforms/includes/config.php');



?>


<!DOCTYPE html>
<html>
<head>
  <title>Immigration Law</title>

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
          <a class="navbar-brand" href="../index.php"><span class="flaticon-auction"></span>Kachari</a>
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
                <span>Immigration Law <i class="ion-ios-arrow-forward"></i></span></p>
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
                <h1 class="mb-4"> <span class="fa fa-plane" style="margin-right: 9px;"></span>Immigration Law</h1>
            </a>
        </div>
    </div>
            <h1 class="mb-4"></h1>

                   <p class="text-justify">Immigration is the act of entering a country with the intent to permanently live and/or work there. United States immigration laws encompass a wide range of situations that involve a person from a foreign country coming to this country, whether for a temporary visit, or to live here permanently.</p>

 <p class="text-justify">The American immigration system is set up primarily to grant immigration status based on factors such as family reunification, in-demand work skills, and capital investment. The immigration system also covers refugees and asylum seekers, and provides a "lottery" for immigration status to people who have less pressing immigration needs. The procedure for gaining legal immigrant status will depend upon, among various factors, which path you are eligible to pursue based on your employment, education, and family situation.
                   </p>

                   <h2>A Nation of Immigrants</h2>

                    <p class="text-justify">
                     Millions of men and women from around the world have immigrated to the United States. Indeed, immigration has made the United States of America into a world power, particularly in terms of its economic growth. But attitudes toward new immigrants have cycled between favorable and hostile for more two centuries, and the immigration laws have often tracked these attitudes.
                   </p>

                    <p class="text-justify">
                    The Naturalization Act of 1790 was the first attempt to naturalize foreigners. The first significant federal legislation restricting immigration was the 1882 Chinese Exclusion Act. Quotas and immigration acts of all types have followed. But while Americans routinely acknowledge that the United States is a nation of immigrants, the system of laws that govern who can immigrate, who can visit, who can stay, and under what conditions can be downright confounding.
                   </p>
                   
                    <p class="text-justify">
                      Take the Immigration and Nationality Act (INA) of 1952. This is a collection of laws that does everything from setting forth qualifications for naturalization, to regulating foreign students, to managing temporary workers, to authorizing humanitarian protections such as asylum and refugee admissions. New laws in 1965 ended the quota system that favored European immigrants, and today, the majority of the country's immigrants hail from Asia and Latin America.
                   </p>
                   <h2>Enforcement of Immigration Laws</h2>
                    <p class="text-justify">
                      The enforcement of immigration laws changed dramatically after the passage of Homeland Security Act of 2002, which created the Department of Homeland Security (DHS). The U.S. Citizenship and Immigration Services (USCIS), carries out the administrative functions involved in immigration. The U.S. Immigration and Customs Enforcement (ICE) and the U.S. Customs and Border Protection (CBP), enforce the laws and protect the U.S. borders.        </p>

                     <p class="text-justify"> Deportation, referred to as "removal" in legal terms, occurs when the federal government orders that a non-citizen be removed from the United States. This can happen for many reasons, but typically occurs after the immigrant violates immigration laws or the more serious criminal laws.</p>

                   <h2>Navigating the Immigration System</h2>

                   <p class="text-justify">
                    FindLaw's Immigration Center has a wealth of information and resources on applying for U.S. citizenship, green cards, temporary visas, as well as information on dealing with immigration violations. You may also learn about the citizenship and naturalization process, permanent residency, temporary work visas, student visas, protection from deportation, and more.
                   </p>
                    <p class="text-justify">
                    But immigration laws are some of the most complex on the books. Maneuvering through the maze of immigration regulation can be a significant challenge. A qualified immigration lawyer is often a crucial requirement for anything beyond the most simple and straight-forward immigration law issues. An immigration lawyer should know the immigration laws inside and out, have experience in immigration courts and can assist in navigating the federal immigration system.
                   </p>


                 <div class="law-category">
        <div class="icon-checkmark">
            <img src="../images/checkmark.svg" alt="">
        </div>
        <h2 >
            <a href="files/immigration.pdf" target="_dpdf">Download Complete Immigration law Ordinence</a>
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