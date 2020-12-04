<?php
session_start();
// error_reporting(0);
include('../Legalforms/includes/config.php');



?>


<!DOCTYPE html>
<html>
<head>
  <title>Health Care Law</title>

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
Health Care Law <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<!-- ============== law detail==================== -->
    <section style="background-color: #f8f9fa;">

      <div class="container">
        <div class="row justify-content-left py-5">
          <div class="col-lg-12 col-md-12 " style="color: #666; " >
            <h1 class="mb-4"><img src="../images/icon-healthcare.svg" alt="" style="width: 70px; height: 70px; margin-bottom: 9px;">Health Care Law</h1>

                   <p class="text-justify">
                    If you or a loved one has ever dealt with a serious illness, you probably understand the difficult decisions people face while seeking medical treatment. When navigating the health care system, it's important to have a working knowledge of your rights as a patient and the payment options at your disposal. This section provides a number of resources on the laws and regulations protecting patients, as well as the federal programs helping vulnerable individuals get the medical services they need. You'll find articles on choosing a physician, patient rights, informed consent, planning long-term care, medical marijuana laws, the differences between Medicare and Medicaid, and more.
                   </p>  

                   <h2>Patient Rights</h2>

                    <p class="text-justify">
                    A number of state and federal laws protect patients' interests. These laws cover a wide range of areas related to medical care, patient records, and available treatment methods. For example, informed consent laws require medical professionals to disclose the potential risks, benefits, and alternatives involved with any treatment. The physician must then obtain the patient's written consent before proceeding.</p>

                <p class="text-justify">
                  Once a patient has consulted with a physician, the Health Insurance Portability and Accountability Act (HIPAA) prevents the physician or any other medical providers from disclosing the patient's records without his or her consent. Legal issues often arise when a doctor or hospital makes an improper disclosure of a patient's records or fails to obtain informed consent before moving forward with a course of treatment. Finally, a number of states, including California and Colorado, have passed laws approving the use of marijuana as a medical treatment.
                                   </p>
                   
                   <h2>Medicare and Medicaid</h2>
                    <p class="text-justify">
                       Anyone who has fallen ill or made a trip to the emergency room knows how expensive medical treatment can be. It probably comes as no surprise that many Americans are unable to pay the high costs of health care on their own. That's where Medicare and Medicaid come in. While Medicare is available to senior citizens and administered equally across all states, Medicaid is available to low-income Americans of any age and handled by the states.
                          </p>
                    <p class="text-justify">
                        Americans who are at least 65 years old are eligible for Medicare benefits. While Part A of Medicare covers base level medical services, Part B is an optional supplemental plan that's based on the patient's income level. Medicaid, on the other hand, covers the basic health care costs of individuals who fall below a certain income level.
                          </p>
                           <h2>Health Care Attorneys</h2>
                    <p class="text-justify">
                       If you've been the victim of an improper disclosure, received treatment without informed consent, or are involved in a dispute over Medicare or Medicaid benefits, you should consult with a health care attorney. Health care attorneys are versed in HIPAA regulations, the state and federal laws governing patient rights, as well as the intricacies of the Medicare and Medicaid systems.
                          </p>
                    <p class="text-justify">
                        In addition, many health care attorneys practice medical malpractice law as well. These attorneys will be able to help you with any injury claims that may have resulted from your treatment. Since health care law is such a broad area of practice, it's important that you find an attorney who is experienced in the particular area involved in your case.
                          </p>


                 <div class="law-category">
        <div class="icon-checkmark">
            <img src="../images/checkmark.svg" alt="">
        </div>
        <h2 >
            <a href="files/health.pdf" target="_dpdf">Download Complete 
Health Care law Ordinence</a>
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