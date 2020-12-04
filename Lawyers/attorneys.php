<?php
session_start();
// error_reporting(0);
include('../Legalforms/includes/config.php');



?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Attorneys</title>

    <meta charset="utf-8">
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


    <style type="text/css" media="screen">


      .expandcity {
    width: 100%;
    height: 100px;
    padding-top: 20px;
    transition: height 2s;
    -webkit-transition: height 2s; /* Safari 3.1 to 6.0 */
}

.expandcity:hover {
    height: 500px;
}
.rec-btn{
   background: rgba(0, 0, 0, 0.5); white-space: nowrap; font-size: 16px; color: #fff; transition: all .2s ease-out, color .2s ease-out; border: 0; cursor: pointer; border-radius: 4px; text-transform: uppercase; font-weight: 700;margin: 0 auto;width: 180px; height: 35px;margin-top: 15px;
}

.faqs {
    margin-top: 10px;
    padding: 0 .1rem;
    color: #666;
    /*background-color: #2c2f3a;*/
    border-radius: 15px
}
.faq-item {
    margin-top: 1.2rem;
    padding: 0 .1rem;
}
.faq-item h2 {
    font-size: 18px;
    text-transform: capitalize;
}
.faq-item p {
    font-size: 13px;
    margin-bottom: 8px;
}
.faq-item dl {
    line-height: normal;
}
.faq-item dt {
    margin-bottom: .3rem;
    font-weight: 700;
    color: #ff8c00;
}
.faq-item dd, .faq-item dt {
    display: inline;
    font-size: 13px;
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

            <h1 class="mb-3 bread">Our Legal Advisors</h1>
            <p class="breadcrumbs">
            	<span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
            	<span class="mr-2"><a href="FindLawyer.html">Find a Lawyer <i class="ion-ios-arrow-forward"></i></a></span> 
            	<span>Attorneys <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<!--  ========================== header end======================== -->

<section class="expandcity bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-9 text-center heading-section ftco-animate" id="browse_city">
            <h2 class="mb-4" style="background-color: rgba(0, 0, 0, 0.5); border: 0; border-radius: 4px;">Look for Attorneys in Popular Cities</h2>
            <p class="subheading">Welcome to the Kachari Lawyer Directory, featuring detailed profiles of attorneys from across the 
                                  Pakistan. To get started use the search box or click on a city or legal issue. If you haven't hired an attorney before, you may want to consult Kachari <a href=" ">Guide to Hiring a Lawyer</a> and <a href=" ">Guide to the PAK. Legal System</a>.</p>
          </div>
        </div>


         
        <div class="thumbnails-content ">
            <?php
                $ret=mysqli_query($con,"select * from lawyer where city = 'Multan'");
                $row=mysqli_fetch_array($ret);
                  ?>

            <a href="FilterResults/Cities.php?Acity=<?php echo htmlentities($row['city']);?>">
            <div class="card category">
            <div class="multan" style="background-image: url('../images/cities/multan.png');"></div>
            <p class="h6-style">Multan</p>
            </div>
            </a>
             <?php?>    

            <?php
                $ret=mysqli_query($con,"select * from lawyer where city = 'Kabirwala'");
                $row=mysqli_fetch_array($ret);
                 
                  ?>  
   
            <a href="FilterResults/Cities.php?Acity=<?php echo htmlentities($row['city']);?>">
            <div class="card category">
            <div class="kabirwala" style="background-image: url('../images/cities/kabirwala.jpg');"></div>
            <p class="h6-style">Kabirwala</p>
            </div>
            </a>
            <?php?>  

            <?php
                $ret=mysqli_query($con,"select * from lawyer where city = 'Khanewal'");
                $row=mysqli_fetch_array($ret);
             
              ?>  
            <a href="FilterResults/Cities.php?Acity=<?php echo htmlentities($row['city']);?>">
            <div class="card category">
            <div class="khanewal" style="background-image: url('../images/cities/khanewal.jpg');"></div>
            <p class="h6-style">Khanewal</p>
            </div>
            </a>
            <?php?>  

            <?php
                $ret=mysqli_query($con,"select * from lawyer where city = 'MianChanu'");
                $row=mysqli_fetch_array($ret);
             
              ?>
            <a href="FilterResults/Cities.php?Acity=<?php echo htmlentities($row['city']);?>">
            <div class="card category">
            <div class="mianchanu" style="background-image: url('../images/cities/mianchanu.jpg');"></div>
            <p class="h6-style">MianChanu</p>
            </div>
            </a>

            <?php
                $ret=mysqli_query($con,"select * from lawyer where city = 'Sahiwal'");
                $row=mysqli_fetch_array($ret);
 
                    ?> 
            <a href="FilterResults/Cities.php?Acity=<?php echo htmlentities($row['city']);?>">
            <div class="card category">
            <div class="sahiwal" style="background-image: url('../images/cities/Univ-of-sahiwal.png');"></div>
            <p class="h6-style">Sahiwal</p>
            </div>
            </a>
            <?php?> 

             <?php
              $ret=mysqli_query($con,"select * from lawyer where city = 'Lahore'");
              $row=mysqli_fetch_array($ret);
 
                    ?> 
            <a href="FilterResults/Cities.php?Acity=<?php echo htmlentities($row['city']);?>">
            <div class="card category">
            <div class="lahore" style="background-image: url('../images/cities/lahore1.png');"></div>
            <p class="h6-style">Lahore</p>
            </div>
            </a>  
            <?php?> 
           </div>  
                   </div>
        </div>

    </section>

<section class="ftco-section testimony-section bg-secondary">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          
            <h2 class="mb-4">Top Recomemded Lawyer</h2>

          </div>
        </div>



        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl" id="owl-demo">
                     <?php
          $sql = "select * from reclawyer";
   $result = mysqli_query($con, $sql) or die( mysqli_error($con));
while ($rrow=mysqli_fetch_array($result)) {
 
  ?>
              <div class="item"   >
                <div class="testimony-wrap text-center py-4 pb-5"  >
                  <div class="user-img mb-4" style="background-image: url('../Legalforms/admin/<?php echo htmlentities($rrow['rimage']);?>')">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4" ><?php echo htmlentities($rrow['rdes']);?></p>
                    <p class="name"><?php echo htmlentities($rrow['rname']);?></p>
                   <span class="position" ><?php echo htmlentities($rrow['rprac']);?></span><br>
                     <span class="position" ><?php echo htmlentities($rrow['rcity']);?></span><br>

                      <button class="rec-btn" type="submit"  onclick="location.href='reclawyerprofile.php?pid=<?php echo htmlentities($rrow['id']);?>'" >Lawyer Profile</button>

                  </div>
                  </div>
                </div>
                <?php
}
?>
              </div>
          

             
              

            </div>

          </div>
        </div>
      </div>
    </section>
    


    <section class="ftco-section bg-light">
      <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Legal Attorneys</h2>
          </div>
           <div class="faqs">
<div class="faq-item">
<h2 class="faq-question">How do I choose a lawyer?</h2>
<div class="faq-answer"><p class="consiferf">Consider the following:</p>
<dl>
<dt>Comfort Level</dt>
<dd> - Are you comfortable telling the lawyer personal information? Does the lawyer seem interested in solving your problem? </dd><br>
<dt>Credentials</dt>
<dd> - How long has the lawyer been in practice? Has the lawyer worked on other cases similar to yours? </dd><br>
<dt>Cost</dt>
<dd> - How are the lawyer's fees structured - hourly or flat fee? Can the lawyer estimate the cost of your case? </dd><br>
<dt>City</dt>
<dd> - Is the lawyer's office conveniently located?</dd><br>
</dl></div>
</div>
</div>
        </div>

 

        <div class="row">


           <?php
$ret=mysqli_query($con,"select * from lawyer");
while ($row=mysqli_fetch_array($ret)) {
 
  ?>
      
       <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="block-2 ftco-animate">
              <div class="flipper">
                <div class="front" style="background-image: url('<?php echo htmlentities($row['image']);?>')" >
                  <!-- <img  src="<?php echo htmlentities($row['image']);?>" data-echo="<?php echo htmlentities($row['image']);?>"  style="width: 437px; height:480px; max-width: 100%; max-height: 100%; " alt=""> -->
                  <div class="box">
                    <h2 href="lawyerinfo.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['name']);?></h2>
                    <p  href="lawyerinfo.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['PracticeAs']);?></p>
                  </div>
                </div>
                <div class="back">
                  
                  
                    <p>
                      <button  type="submit"  onclick="location.href='Attorneysprofile.php?pid=<?php echo htmlentities($row['id']);?>'" >Lawyer Profile</button>

                    </p>
                  
                  <div class="author d-flex">
                    <div class="image mr-3 align-self-center">
                      <img src="<?php echo htmlentities($row['image']);?>" data-echo="<?php echo htmlentities($row['image']);?>" alt="">
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
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" staroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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