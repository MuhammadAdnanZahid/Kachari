<?php
session_start();
// error_reporting(0);
include('Legalforms/includes/config.php');



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
          <a class="navbar-brand " href="index.php"><span class="flaticon-auction"></span>Kachari</a>
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

       <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
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
        <div class="container">
             
             <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-9 text-center heading-section ftco-animate" id="browse_city">
            <h2 class="mb-4">Look for Attorneys in Popular Cities</h2>
            <p class="subheading">Welcome to the Kachari Lawyer Directory, featuring detailed profiles of attorneys from across the 
                                  Pakistan. To get started use the search box or click on a city or legal issue. If you haven't hired an attorney before, you may want to consult Kachari <a href=" ">Guide to Hiring a Lawyer</a> and <a href=" ">Guide to the PAK. Legal System</a>.</p>
          </div>
        </div>

        <div class="thumbnails-content " id="#bylocation">
                        <?php

                $ret=mysqli_query($con,"select * from lawyer where city = 'Multan'");
                $row=mysqli_fetch_array($ret);
                  ?>

            <a href="Lawyers/FilterResults/Cities.php?Acity=<?php echo htmlentities($row['city']);?>">
            <div class="card category">
            <div class="multan" style="background-image: url('images/cities/multan.png');"></div>
            <p class="h6-style">Multan</p>
            </div>
            </a>
             <?php?>    

            <?php
                $ret=mysqli_query($con,"select * from lawyer where city = 'Kabirwala'");
                $row=mysqli_fetch_array($ret);
                 
                  ?>  
   
            <a href="Lawyers/FilterResults/Cities.php?Acity=<?php echo htmlentities($row['city']);?>">
            <div class="card category">
            <div class="kabirwala" style="background-image: url('images/cities/kabirwala.jpg');"></div>
            <p class="h6-style">Kabirwala</p>
            </div>
            </a>
            <?php?>  

            <?php
                $ret=mysqli_query($con,"select * from lawyer where city = 'Khanewal'");
                $row=mysqli_fetch_array($ret);
             
              ?>  
            <a href="Lawyers/FilterResults/Cities.php?Acity=<?php echo htmlentities($row['city']);?>">
            <div class="card category">
            <div class="khanewal" style="background-image: url('images/cities/khanewal.jpg');"></div>
            <p class="h6-style">Khanewal</p>
            </div>
            </a>
            <?php?>  

            <?php
                $ret=mysqli_query($con,"select * from lawyer where city = 'MianChanu'");
                $row=mysqli_fetch_array($ret);
             
              ?>
            <a href="Lawyers/FilterResults/Cities.php?Acity=<?php echo htmlentities($row['city']);?>">
            <div class="card category">
            <div class="mianchanu" style="background-image: url('images/cities/mianchanu.jpg'); "></div>
            <p class="h6-style">MianChanu</p>
            </div>
            </a>

            <?php
                $ret=mysqli_query($con,"select * from lawyer where city = 'Sahiwal'");
                $row=mysqli_fetch_array($ret);
 
                    ?> 
            <a href="Lawyers/FilterResults/Cities.php?Acity=<?php echo htmlentities($row['city']);?>">
            <div class="card category">
            <div class="sahiwal" style="background-image: url('images/cities/Univ-of-sahiwal.png');"></div>
            <p class="h6-style">Sahiwal</p>
            </div>
            </a>
            <?php?> 

             <?php
              $ret=mysqli_query($con,"select * from lawyer where city = 'Lahore'");
              $row=mysqli_fetch_array($ret);
 
                    ?> 
            <a href="Lawyers/FilterResults/Cities.php?Acity=<?php echo htmlentities($row['city']);?>">
            <div class="card category">
            <div class="lahore" style="background-image: url('images/cities/lahore1.png');"></div>
            <p class="h6-style">Lahore</p>
            </div>
            </a>  
            <?php?> 
                        
           </div>


            <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-9 text-center heading-section ftco-animate">
            <h2 class="mb-4">Learn About the Law</h2>
            <p class="subheading">Are you facing a legal issue, or just looking for more information about a specific legal topic? Kachari's Learn About the Law section is the perfect starting point. Learn About the Law features informational articles about a wide variety of legal topics, as well as specific information about subjects such as how to hire an attorney and understanding your state's unique laws.</p>
          </div>
        </div>
        <div class="row d-flex justify-content-center" >
            <div class="col-md-3 col-lg-2 text-center">
                <div class="practice-area ftco-animate" >
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-family"></span>
                    </div>
                    <h3><a href="Learnlaw/familylaw.php">Family Law</a></h3>
                </div>
            </div>
            <div class="col-md-3 col-lg-2 text-center">
                <div class="practice-area ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">

                        <span class="fa fa-building"></span>
                    </div>
                    <h3><a href="Learnlaw/businesslaw.php">Business Law</a></h3>
                </div>
            </div>
            <div class="col-md-3 col-lg-2 text-center">
                <div class="practice-area ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fa fa-graduation-cap"></span>
                    </div>
                    <h3><a href="Learnlaw/educationlaw.php">Eduction Law</a></h3>
                </div>
            </div>
            <div class="col-md-3 col-lg-2 text-center">
                <div class="practice-area ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-handcuffs"></span>
                    </div>
                    <h3><a href="Learnlaw/criminallaw.php">Criminal Law</a></h3>
                </div>
            </div>
            <div class="col-md-3 col-lg-2 text-center">
                <div class="practice-area ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-house"></span>
                    </div>
                    <h3><a href="Learnlaw/propertylaw.php">Property Law</a></h3>
                </div>
            </div>
            <div class="col-md-3 col-lg-2 text-center">
                <div class="practice-area ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-employee"></span>
                    </div>
                    <h3><a href="Learnlaw/employlaw.php">Employment Law</a></h3>
                </div>
            </div>
            <div class="col-md-3 col-lg-2 text-center">
                <div class="practice-area ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-fire"></span>
                    </div>
                    <h3><a href="Learnlaw/accidentlaw.php">Accident Law</a></h3>
                </div>
            </div>
            <div class="col-md-3 col-lg-2 text-center">
                <div class="practice-area ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-money"></span>
                    </div>
                    <h3><a href="Learnlaw/taxlaw.php">Tax Law</a></h3>
                </div>
            </div>
            <div class="col-md-3 col-lg-2 text-center">
                <div class="practice-area ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-medicine"></span>
                    </div>
                    <h3><a href="Learnlaw/druglaw.php">Drug Offenses</a></h3>
                </div>
            </div>
            <div class="col-md-3 col-lg-2 text-center">
                <div class="practice-area ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fa fa-traffic-light"></span>
                    </div>
                    <h3><a href="Learnlaw/trafficlaw.php">Traffic Law</a></h3>
                </div>
            </div>
        </div>
            
        </div>

        <div class="container">
            <div class="row">
                <h2 class="col-sm-12 heading">More Legal Topics</h2>
                <div class="col-md-3">
                    <ul class="no-bullet homepage_links">
                    
                        <li><a href="Learnlaw/Bankruptcy.php " title="Bankruptcy">Bankruptcy</a></li>
                    
                        <li><a href="Learnlaw/immigrationlaw.php " title="Immigration Law">Immigration Law</a></li>
                    
                        <li><a href="Learnlaw/caraccident.php " title="Car Accidents">Car Accidents</a></li>
                    </ul>
                </div>  

                 <div class="col-md-3">
                    <ul class="no-bullet homepage_links">
                        
                    
                        <li><a href="Learnlaw/estatelaw.php " title="Estate Planning">Estate Planning</a></li>
                    
                        <li><a href="Learnlaw/elderlaw.php " title="Elder Law">Elder Law</a></li>
                    
                        <li><a href="Learnlaw/civillaw.php " title="Civil Rights">Civil Rights</a></li>
                    
                        
                    </ul>
                </div>  

                 <div class="col-md-3">
                    <ul class="no-bullet homepage_links">
                        <li><a href="Learnlaw/consumerlaw.php " title="Consumer Protection">Consumer Protection</a></li>
                    
                        <li><a href="Learnlaw/Mediationlaw.php " title="Arbitration and Mediation">Arbitration and Mediation</a></li>
                    
                        <li><a href="Learnlaw/healthlaw.php " title="Health Care Law">Health Care Law</a></li>
                    
                    </ul>
                </div>  

                 <div class="col-md-3">
                    <ul class="no-bullet homepage_links">

                         <li><a href="Learnlaw/litigationlaw.php " title="Litigation and Appeals">Litigation and Appeals</a></li>
                    
                        <li><a href="Learnlaw/Militarylaw.php " title="Military Law">Military Law</a></li>

                        <li><a href="Learnlaw/retirementlaw.php " title="Social Security and Retirement Planning">Social Security and Retirement Planning</a></li>
                
                    </ul>
                </div>  
                
            </div>
            
        </div>

    </section>


  <!--   ...........................blog.................. -->

  <div class="contentcontainer responsivegrid section">
    
    
        
        <section class="section-marketing section-highlight">
            <!--  FindLaw Answers & News -->
            <div class="row">
                <div class="medium-10 medium-centered columns">
                    <div class="section-marketing-header">
                        <h2>What's New at Kachari</h2>
                    </div>
                    
                        <div class="reference parbase aem-GridColumn aem-GridColumn--default--12"><div class="cq-dd-paragraph"><div class="newsanswers newsAnswers">
    <div class="row" data-equalizer="n185qp-equalizer" data-equalize-on="medium" id="test-eq" data-resize="jlb2qs-eq" data-mutate="11hrlg-eq" data-events="resize">
    <div class="small-12 large-6 columns">
        <div class="card feature" data-equalizer-watch="" style="height: 1026px;">
            <img src="./images/legal-forms.png" class="blogs-img" alt="">
            <div class="card-desc">
                <h3>Trending Now</h3>
                <div class="min-height-news">
                    <h4 class="homepage_title">Featured Articles</h4>

                  
                    <ul class="no-bullet homepage_links">

                               <?php

$ret=mysqli_query($con,"select * from blogs LIMIT 3 OFFSET 0");

While($row=mysqli_fetch_array($ret)) {
 
  ?>
                        <li><a  rel="nofollow" href="Blogs/blog-single.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['btitle']);?></a></li>
                        
                          <?php 
                    }
                    ?>
                        <li><a href="Blogs/blog.php " rel="nofollow">More Articles »</a></li></ul>

                       
             
                </div>
                <div class="min-height-news">
                    <h4 class="homepage_title">Featured Legal Blog Posts</h4>
                    <ul class="no-bullet homepage_links">

                        <?php

$ret=mysqli_query($con,"select * from blogs LIMIT 3 OFFSET 4");

While($row=mysqli_fetch_array($ret)) {
 
  ?>

                        <li><a  rel="nofollow" href="Blogs/blog-single.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['btitle']);?></a></li>
                         <?php 
                    }
                    ?>
                        
                        <li><a href="Blogs/blog.php" rel="nofollow" class="rightcolvisit">More Legal Blogs »</a></li></ul>
                </div>
          </div>
        </div>
    </div>

    <div class="small-12 large-6 columns">
        <div class="card feature" data-equalizer-watch="" style="height: 1026px;">
            <img src="./images/podcasts.jpg" class="blogs-img" alt="">
            <div class="card-desc">
                <h3>Podcasts and Blogs</h3>
                <div class="min-height-news">
                    <h4 class="homepage_title">Latest Kachari Podcasts</h4>
                    <ul class="no-bullet homepage_links">

                           <?php

$ret=mysqli_query($con,"select * from blogs ORDER BY id DESC LIMIT 3");

While($row=mysqli_fetch_array($ret)) {
 
  ?>
                        <li><a  rel="nofollow" href="Blogs/blog-single.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['btitle']);?></a></li>
                         <?php 
                    }
                    ?>
                        
                        <li><a href="Blogs/blog.php " rel="nofollow">More Podcasts »</a></li></ul>
             
                </div>
                <div class="min-height-news">
                    <h4 class="homepage_title">Latest Kachari Blog Posts</h4>
                    <ul class="no-bullet homepage_links">

                        <?php

$ret=mysqli_query($con,"select * from blogs LIMIT 3 OFFSET 7");

While($row=mysqli_fetch_array($ret)) {
 
  ?>
                        <li><a  rel="nofollow" href="Blogs/blog-single.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['btitle']);?></a></li>
                         <?php 
                    }
                    ?>
                        <li><a href="Blogs/blog.php " rel="nofollow" class="rightcolvisit">More Kachari Blogs »</a></li></ul>
                </div>
          </div>
        </div>
    </div>
        </div>
    </div>
</div>


</div>
</div>
</div>
                        
                    
                </div>
            </div>
        </section>
        
    


<!-- .............................Footer............................ -->
<?php 
      
      include('Footer/footer.php')

 ?>


   


    

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