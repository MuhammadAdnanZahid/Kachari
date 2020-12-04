<?php
session_start();
// error_reporting(0);
include('../Legalforms/includes/config.php');



?>



<!DOCTYPE html>
<html>
<head>
	<title>Family Law</title>

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
                <span>Family Law <i class="ion-ios-arrow-forward"></i></span></p>
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
                <h1 class="mb-4"> <span class="flaticon-family" style="margin-right: 7px;"></span>Family Law</h1>
            </a>
        </div>
    </div>
    				

                   <p class="text-justify ">Just about anyone can start a family on their own, but certain procedures affecting the responsibilities of family life must be pursued in court. While matters of the heart are very personal, the rights of same-sex couples to get married, laws regarding divorce, and the process of adopting a child are governed by state and federal laws. "Family law," therefore, refers to rules, regulations, and court procedures involving the family unit. While some family law matters may be handled without counsel, processes such as divorce and child custody often require the skill and expertise of a skilled attorney.</p>
                  <p class="text-justify "> FindLaw's Family Law Center includes information about marriage, child custody, divorce, reproductive rights, adoption, paternity, domestic violence, and other relevant topics. This section provides legal tips, overviews, summaries of state laws, and other resources to help you make the right decisions for you and your family.
                   </p>

                   <h2>What Does Family Law Cover?</h2>

                   <p class="text-justify ">

				Civil procedures and legal matters involving family members' financial responsibilities, custodial rights, eligibility, and other obligations generally fall under the family law category. Domestic violence and child abuse are included in this section, although they are criminal matters. The following is a list of family law topics:
				<ul>
				<li style="font-weight:bold ;">Marriage & Living Together:</li>
				<p class="text-justify "> Eligibility requirements such as age and gender (i.e., same-sex marriage) are primarily governed at the state level. Also, different states have different laws governing legal partnerships other than marriage.
				Divorce & Alimony: Also called "dissolution of marriage," divorces come about via court order, either with or without legal representation. Sometimes one spouse will be required to provide financial support for the other after a divorce.</p>
				<li style="font-weight:bold">Child Custody & Child Support:</li> 
				<p class="text-justify ">When parents get divorced, the court must decide what is in the best interests of the children, which includes living arrangements and financial support.</p>
				<li style="font-weight:bold">Adoption & Foster Care:</li>
				<p class="text-justify "> A variety of legal considerations may come into play when adopting or fostering a child.
				Parental Liability & Emancipation: Parents often are liable for the actions of their children. Some children may become "emancipated" if they can prove their maturity and ability to live apart from their parents.</p>
				<li style="font-weight:bold">Reproductive Rights:</li> 
				<p class="text-justify ">Laws governing abortion, birth control, artificial conception, and other reproductive rights are established at the state level and change often.</p>
				<li style="font-weight:bold">Domestic Violence & Child Abuse:</li>
				<p class="text-justify "> While these violations are handled in criminal court, they often raise legal issues affecting the family, as well.</p>
				</ul></p>

                <h2>When Do I Need a Family Law Attorney?</h2>
				   <p class="text-justify ">
				As with most other areas of the law, whether you need a family law attorney depends on a number of factors specific to your case. For example, a couple generally won't need a lawyer to get married, but attorneys may be required if one party asks the other to sign a prenuptial agreement.</p>

				<p class="text-justify ">Individuals often benefit from hiring an attorney when dealing with divorce, child support, and especially child custody matters. Because emotions can run high during some divorces, hiring an attorney for her legal knowledge and skills, as well as to negotiate with the other party to resolve difficult issues, can be invaluable.</p>

			<p class="text-justify ">	Most lawyers offer free initial consultations, so it may be worth your time to speak with a family law attorney if you have additional questions or learn more on our family law attorney legal answers page.</p>
                 
                  
         <div class="law-category">
        <div class="icon-checkmark">
            <img src="../images/checkmark.svg" alt="">
        </div>
        <h2 >
            <a href="files/family.doc" target="_ddocx">Download Complete Family law Ordinence</a>
        </h2>
    </div>

     <div class="law-category">
        <div class="icon-checkmark">
            <img src="../images/checkmark.svg" alt="">
        </div>
        <h2 >
            <a href="files/marriage.docx" target="_ddocx">Download Complete Marriage law Ordinence</a>
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