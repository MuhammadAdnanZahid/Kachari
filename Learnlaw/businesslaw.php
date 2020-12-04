<?php
session_start();
// error_reporting(0);
include('../Legalforms/includes/config.php');



?>



<!DOCTYPE html>
<html>
<head>
	<title>Business Law</title>

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
                <span>Busines Law <i class="ion-ios-arrow-forward"></i></span></p>
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
                <h1 class="mb-4"><span class="fa fa-building" style="margin-right: 7px;"></span> Business  Law</h1>
            </a>
        </div>
    </div>
    				

                   <p class="text-justify">Starting and running a  business requires a very broad skill set and nerves of steel. It's not for everyone, and even successful entrepreneurs encounter failure from time to time. In order to help you stay ahead of the curve, FindLaw's  Business Law section covers everything from obtaining financing and hiring employees, to choosing the right insurance policies and filing taxes. Those who operate  businesses typically wear many different hats, but also must know when and how to seek help from others.
                   </p>

                   <h2>What Makes a Business a "Small" Business?</h2>

                    <p class="text-justify">A  business owner may operate a convenience store, a plumbing service, a salon, a fast food franchise, or virtually any type of business in a given field. While there is no clear definition,  businesses share some common characteristics. They are independently owned and operated, organized for profit, and are not dominant in their field, as defined by the U.S.  Business Administration (SBA).

The vast majority of businesses in the U.S. are considered  businesses, which employ roughly half of all workers in the country.
                   </p>

                   <h2>What Legal Issues Do Business Owners Typically Encounter?</h2>

                   <p class="text-justify">

				All businesses will encounter certain legal matters, such as questions about taxes or drafting contracts. But a  business owner's legal obligations and risks generally depend on the type of industry, business model, inherent risks involved, state laws, and a host of other considerations he or she faces. It's always best to consult an attorney before opening up shop, but anyone starting a  business will likely be confronted one or more of the following legal issues:
				<ul>
				<li>Choosing a legal structure (such as a partnership, limited liability company, or corporation);</li>
				<li>Hiring and managing employees in accordance with state and federal employment laws;</li> 
				<li>Protecting inventions and trademarks through intellectual property law;</li>
				<li>Extending credit and collecting on past due amounts in accordance with federal laws;</li> 
				<li>Complying with health and safety regulations when constructing or preparing a work site;</li>
        <li>Maintaining the required level of workers' compensation insurance coverage.</li>
				</ul></p>

                <h2>How Can an Attorney Help My Business?</h2>
				   <p class="text-justify">
				While  business owners act in a number of capacities, the successful entrepreneur knows when to ask for help. This is especially true of legal matters, which can sink a business if handled poorly or ignored altogether. Certain things can sometimes be done without a lawyer, such as creating a legal partnership agreement, submitting necessary tax forms, and drafting contracts with partners.</p>

<p>But some issues are too time-consuming, too complex, or too high-stakes to handle without the care and expertise of a business lawyer. These include defending against wrongful termination claims by former employees, making a "special allocation" of profits and losses, or negotiating for the acquisition of another company's assets. Again, your legal needs will be unique to your business.</p>

<p>And while seeking counsel for complex legal issues is smart, retaining an attorney to help prevent legal problems from occurring in the first place may be even smarter.</p>
                 
                  <div class="law-category">
                      <div class="icon-checkmark">
                          <img src="../images/checkmark.svg" alt="">
                      </div>
                      <h2 >
                          <a href="files/business.pdf" target="_dpdf">Download Complete Business law Ordinence</a>
                      </h2>
                  </div>


    			</div>
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
                    <a href=" ">Find a Lawyer</a>
                   
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