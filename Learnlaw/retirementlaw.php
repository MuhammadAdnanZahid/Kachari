<?php
session_start();
// error_reporting(0);
include('../Legalforms/includes/config.php');



?>



<!DOCTYPE html>
<html>
<head>
  <title>Social Security and Retirement Planning Law</title>

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
          <a class="navbar-brand" href="../index.php"><span class="flaticon-auction"></span> Kachari</a>
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
Social Security and Retirement Planning Law <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<!-- ============== law detail==================== -->
    <section style="background-color: #f8f9fa;">

      <div class="container">
        <div class="row justify-content-left py-5">
          <div class="col-lg-12 col-md-12 " style="color: #666; " >
            <h1 class="mb-4"> <img src="../images/icon-socialsecurity.svg" alt="" style="width: 70px; height: 70px; margin-bottom: 9px;"> Social Security and Retirement Planning Law</h1>

                   <p class="text-justify">
                   Eventually, most individuals working today will leave their job and settle into a new life as a retiree. Whether retirement is a time to look forward to, or a time to be feared, depends largely on how well you plan and prepare during your working years. This section has useful information on the different ways to prepare for retirement, including information on social security, as well as private retirement saving funds.
                   </p>  

                   <h2>Social Security</h2>

                    <p class="text-justify">
                   Social Security is a safety net for elderly and disabled people who are no longer able to work. The program is funded through mandatory taxes everyone pays during their working years. When you reach retirement age, which is between 62 and 67 (depending on when you were born and how long you worked), you can apply for benefits. How much you receive in benefits largely depends on how much money you were able to pay in social security taxes during your working life.</p>
                   <p class="text-justify">
                   Social Security benefits are also available to citizens who can show that they are afflicted with a long- term illness which prevents them from working. People who apply for social security disability typically need to show medical records and or a letter from a doctor in order to prove they can no longer work.</p>

                    <h2>Retirement Planning</h2>
                <p class="text-justify">
                 Even though most people can count on a Social Security check, the reality is that social security doesn't always provide enough income to live comfortably in retirement. Fortunately, there are a number of other ways to save money:
                 <ul>
                   <li>Pensions: Pensions are employer sponsored plans that pay benefits to retired employees typically based on how many years of service an employee had with a company. The employer manages the pension fund and pays benefits to the employee after they retire.</li>
                   <li>401(k), 403(b), and 457 plans: Many employers set up retirement investment accounts for their employees. The maintenance fees are paid by the employer, while the employee then contributes to the account and invests the money. Some employers offer matching contributions.</li>
                   <li>Individual Retirement Account (IRA): An IRA is similar to a 401(k), except an individual may set up an IRA without the help of her employer.</li>
                   <li>Keogh Plans: Keogh plans are similar to 401(k)'s, but they are designed for the self-employed. They have different rules about how much the owner can contribute and whether those contributions are tax-favored.</li>
                 </ul>
                                   </p>
                  <p class="text-justify">
                 This section has more in-depth information about the different types of retirement plans, as well as tips on how to create a budget and savings goals so you can live comfortably both in retirement and in the present.
                  </p>
                          <h2>Social Security Attorneyss</h2>          
                                   <p class="text-justify">
                     The social security process is one that often can be handled without an attorney's involvement. Social security attorneys primarily handle social security claims that have been denied, or where a dispute has arisen over benefits. During the appeal process, they will evaluate a claimant's medical condition and challenge the basis for the initial administrative decision. Because social security is an administrative process quite unlike a courtroom, it can be very helpful to have an attorney who specializes in the procedures and laws involved.


                          </p>

                            <p class="text-justify">
                       As far as retirement planning is concerned, attorneys specializing in estate planning and/or tax laws may be very helpful in finding the right investment and estate planning vehicles to create and preserve assets for one's golden years.
                          </p>

                          <h2>Social Security Disability Benefits</h2>          
                                   <p class="text-justify">
                      A person's physical or mental disabilities can significantly limit or halt their ability to make a living. Programs such as Social Security Disability Insurance (SSDI) and Supplemental Security Insurance (SSI) may be available for those who are unable to work because of an ongoing medical condition. Learning how Social Security works may help you decide whether and when to apply for these important benefits. This section provides helpful information on the types of Social Security disability benefits that are available, including Social Security disability definitions and medical conditions that qualify. Click on the links below or learn about state-specific laws on our Social Security disability legal answers page.
                          </p>
                         <h2> Mental Health Disability Claims</h2>
                          <p class="text-justify">
                       A look at Social Security benefits for mental disorders. Learn which mental impairments are covered by the SSA, how the SSA assesses mental disorders, and how claims for substance abuse are treated.
                          </p>
                          <h2> Social Security Benefits for Disabled Children</h2>
                          <p class="text-justify">
                       Disabled children can be eligible for the SSA’s Supplemental Security Income (SSI) program. Learn about the eligibility requirements for SSI, the SSI review process, and much more.
                          </p>

                   
                   <h2> What is the Difference Between SSDI and SSI?</h2>
                    <p class="text-justify">
                       A guide to the differences between Social Security Disability Insurance (SSDI) and Supplemental Security Income (SSI), including eligibility requirements and the benefits involved with each.
                          </p>
                    

                 <div class="law-category">
        <div class="icon-checkmark">
            <img src="../images/checkmark.svg" alt="">
        </div>
        <h2 >
            <a  href="files/SOCIAL-SECURITY.pdf" target="_dpdf">Download Complete 
Social Security and Retirement Planning law Ordinence</a>
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