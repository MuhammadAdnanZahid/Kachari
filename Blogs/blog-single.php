<?php 
session_start();
// error_reporting(0);

include('../Legalforms/includes/config.php');

$id = (isset($_GET['pid']) ? $_GET['pid'] : '');

if(isset($_POST['comment']) )
{
  
  $name=$_POST['name'];
  $summary=$_POST['summary'];
  $review=$_POST['review'];
   
  mysqli_query($con,"insert into blogreviews(reid,name,summary,review) values('$id','$name','$summary','$review')");

 }

?>
<style type="text/css" media="screen">

  .faqs {
    margin-top: 1.2rem;
    padding: 0 .1rem;
    margin-top: 100px;
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
}
.faq-item dd, .faq-item dt {
    display: inline;
    font-size: 13px;
}
  
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kachari/Blog/Blog Single</title>
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
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php"><span class="flaticon-auction"></span>Kachari</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item "><a href="../index.php" class="nav-link">Home</a></li>
              <li class="nav-item "><a href="../Lawyers/attorneys.php" class="nav-link">Find a Lawyer</a></li>
              <li class="nav-item "><a href="../learnlaw.php" class="nav-link">Learn About Law</a></li>
              <li class="nav-item "><a href="../legalforms.php" class="nav-link">Legal Forms</a></li>
              <li class="nav-item active"><a href="../Blogs/blog.php" class="nav-link">Blog</a></li>
            </ul>

            <button class="nav-btnlawyer" type="submit" onclick="location.href='../Lawyers/loginpage.php'" >For  Lawyers</button>
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
            <!-- .......................................End Search............................... -->
            <h1 class="mb-3 bread">Our Blog</h1>
            <p class="breadcrumbs">
              <span class="mr-2"><a href="../index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
              <span class="mr-2"><a href="../index.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> 
              <span>Blog Single<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<?php 



$ret=mysqli_query($con,"select * from blogs where id='$id' ");
$row=mysqli_fetch_array($ret);


?>

   	
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-md-last ftco-animate">
          	<p>
              <img src="../Legalforms/admin/<?php echo htmlentities($row['bpic']);?>" alt="" class="img-fluid">
            </p>
            <h2 class="mb-3"><?php echo htmlentities($row['btitle']);?></h2>
            <h5 class="mb-3"><?php echo htmlentities($row['bdate']);?></h5>
            
            <p><?php echo nl2br ($row['bbody']);?></p>
            
            
                    


            <div class="pt-5 mt-5">
              <h3 class="mb-5">Comments</h3>

              <?php 
              $sql="select * from blogreviews where reid='$id'";
              $result=mysqli_query($con,$sql) ;
while($rvw=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
?>
              <ul class="comment-list">
                <li class="comment">
                  <div class="comment-body">
                    <h3><?php echo htmlentities($rvw['name']);?></h3>
                    <div class="meta"><?php echo htmlentities($rvw['reviewDate']);?></div>
                    <div class="meta"><?php echo htmlentities($rvw['summary']);?></div>
                    <p><?php echo htmlentities($rvw['review']);?></p>
                    
                  </div>
                </li>



                <?php }


                 ?>

                     

                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
            
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form  method="POST" role="form" name="review" class="p-5 bg-light" autocomplete="on">
                  <div class="form-group">
                    <label for="name">Your Name *</label>
                    <input type="text" class="form-control" id="name" name="name" required="required">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" name="summary" required="required">
                  </div>

                  <div class="form-group">
                    <label for="message">Review *</label>
                    <textarea name="review" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <button  type="submit" name="comment"  class="btn py-3 px-4 btn-primary">Post Comment</button>
                  </div>

                </form>
              </div>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            
            <div class="sidebar-box ftco-animate" style="margin-top: 50px;">
              <div class="categories" >
                <h3>Categories</h3>
                <li><a href="../Learnlaw/familylaw.php">Family Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="../Learnlaw/businesslaw.php">Business Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="../Learnlaw/criminallaw.php">Criminal Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="../Learnlaw/educationlaw.php">Education Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="../Learnlaw/employlaw.php">Emloyment Law <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="../Learnlaw/propertylaw.php">Property Law <span class="ion-ios-arrow-forward"></span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>

              <?php
             $sql = "select * from blogs LIMIT 5 OFFSET 0";
   $result = mysqli_query($con, $sql) or die( mysqli_error($con));
while ($row=mysqli_fetch_array($result)) {
 
  ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(../Legalforms/admin/<?php echo htmlentities($row['bpic']);?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="blog-single.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['btitle']);?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span><?php echo htmlentities($row['bdate']);?></a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  </div>
                </div>
              </div>

              <?php
}
?>

              

            

            
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

        </div>
      </div>
    </section> <!-- .section -->


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
  
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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