<?php 
session_start();
// error_reporting(0);
include('../Legalforms/includes/config.php');

$id = (isset($_GET['pid']) ? $_GET['pid'] : '');
$ret=mysqli_query($con,"select * from reclawyer where id='$id' ");
$row=mysqli_fetch_array($ret);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kachari/Find a Lawyer</title>
	
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

</head>
<body>
	 <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php"><span class="flaticon-auction">Kachari</a>
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
            <h1 class="mb-3 bread">Search Top Lawyers Near You</h1>
            <p class="breadcrumbs">
                <span class="mr-2"><a href="../index.php">Home <i class="ion-ios-arrow-forward"></i></a></span>
                <span class="mr-2"><a href="attorney.php">Find a Lawyer <i class="ion-ios-arrow-forward"></i></a></span>
                <span>Lawyer Profile  <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-marketing section-hero">
            <div class="row links">
            <nav class="nav-browse-by">
            <h3>Lawyer's Profile</h3>
            <ul>
            
            </ul>
            </nav>
            </div>
</section>




<!-- .....................................Legal Areas................................ -->

   
	
	  <!--================Home Banner Area =================-->


    
        <section class="profile_area" >
            <div class="container">
                <div class="profile_inner p_120">
                    <div class="row" id="#profile">
                        <div class="col-lg-5" >
                            <img class="img-fluid" src="../Legalforms/admin/<?php echo htmlentities($row['rimage']);?>" data-echo="<?php echo htmlentities($row['image']);?>" alt=""  height="428" width="561">
                        </div>
                        <div class="col-lg-7">
                            <div class="personal_text">
                                <h6>Hello Everybody, i am</h6>
                                <h3><?php echo htmlentities($row['rname']);?></h3>
                                <h4><?php echo htmlentities($row['rprac']);?></h4>
                                <p><?php echo htmlentities($row['rexp']);?></p>
                                <ul class="list basic_info no-bullet ">
                                    <li><a href="#" style="display: inherit;"><i class="fa fa-book"></i><p style= "margin-bottom: 0;"><?php echo htmlentities($row['redu']);?></p></a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i><?php echo htmlentities($row['rcontact']);?></a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i><?php echo htmlentities($row['remail']);?></a></li>
                                    <li><a href="#"><i class="fa fa-home"></i><?php echo htmlentities($row['rcity']);?></a></li>
                                </ul>
                                <ul class="list personal_social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->


         <div class="appointment_area" >
        <div class="container">
            <div class="row align-items-center" id="#appointment">
                <div class="col-xl-5 col-md-6 col-lg-6" >
                    <div class="appiontment_thumb d-none d-lg-block">
                        <img src="../images/1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-md-6 col-md-12 col-lg-6" style="flex: 20px !important;">
                    <div class="appointment_info">
                        <div class="opacity_icon d-none d-lg-block">
                            <i class="flaticon-balance"></i>
                        </div>
                        <h3>Make an Appointment</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <form action="makeappointment.php" method="POST">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                            <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                            <input type="email" name="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                            <input type="text" name="number" placeholder="Phone no.">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <input id="datepicker" name="date" placeholder="Appointment date">

                                    </div>
                                    <div class="col-xl-12">
                                        <textarea placeholder="Message" name="message" ></textarea>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="appoinment_button">
                                            <button class="boxed-btn5 " type="submit" >Submit</button>

                                            
                                        </div>
                                    </div>
                                </div>
        
                            </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

<!-- .............................Footer............................ -->
<?php 
      
      include('Footer/footer.php')

 ?>


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