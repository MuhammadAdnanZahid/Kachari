<?php
session_start();
// error_reporting(0);
include('../Legalforms/includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:../Legalforms/index.php');
}
else{
	if(isset($_POST['update']))
	{
		$name=$_POST['name'];
		$contactno=$_POST['contactno'];
		$query=mysqli_query($con,"update lawyer set name='$name',contactno='$contactno' where id='".$_SESSION['id']."'");
		if($query)
		{
echo "<script>alert('Your info has been updated');</script>";
		}
	}


date_default_timezone_set('Asia/Karachi');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );




?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>My Account</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="../Legalforms/assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="../Legalforms/assets/css/main.css">
	    
	    <link rel="stylesheet" href="../Legalforms/assets/css/owl.carousel.css">
		<link rel="stylesheet" href="../Legalforms/assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="../Legalforms/../Legalforms/assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="../Legalforms/assets/css/animate.min.css">
		<link rel="stylesheet" href="../Legalforms/assets/css/rateit.css">
		<link rel="stylesheet" href="../Legalforms/assets/css/bootstrap-select.min.css">

		
		<link rel="stylesheet" href="../Legalforms/assets/css/config.css">

		
		<link rel="stylesheet" href="../Legalforms/assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="../Legalforms/assets/images/favicon.ico">


	</head>
    <body class="cnt-home">
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<?php include('include/top-header.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->



</header>
<!-- ============================================== HEADER : END ============================================== -->


<div class="body-content outer-top-bd">
	<div class="container">
		<div class="checkout-box inner-bottom-sm">
			<div class="row">
				<div class="col-md-8">
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->
		<div class="panel-heading">
    	<h4 class="unicase-checkout-title">
	        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
	          <span>1</span>My Profile
	        </a>
	     </h4>
    </div>
    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
			<div class="row">		
<h4>Personal info</h4>
				<div class="col-md-12 col-sm-12 already-registered-login">

<?php
$query=mysqli_query($con,"select * from lawyer where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
?>

					<form class="register-form" role="form" method="post">
<div class="form-group">
					    <label class="info-title" for="name">Name<span>*</span></label>
					    <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $row['name'];?>" id="name" name="name" required="required">
					  </div>



						<div class="form-group">
					    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
			 <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="<?php echo $row['email'];?>" readonly>
					  </div>
					  <div class="form-group">
					    <label class="info-title" for="Contact No.">Contact No. <span>*</span></label>
					    <input type="text" class="form-control unicase-form-control text-input" id="contactno" name="contactno" required="required" value="<?php echo $row['contactno'];?>"  maxlength="10">
					  </div>
					  <button type="submit" name="update" class="btn-upper btn btn-primary checkout-page-button">Update</button>
					</form>
					<?php } ?>
				</div>	
				<!-- already-registered-login -->		

			</div>			
		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- checkout-step-01  -->
					    <!-- checkout-step-02  -->
					  	
					  	<!-- checkout-step-02  -->
					  	
					</div><!-- /.checkout-steps -->
				</div>
			<?php include('include/myaccount-sidebar.php');?>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
	

</div>
</div>

	<script src="../Legalforms/assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="../Legalforms/assets/js/bootstrap.min.js"></script>
	
	<script src="../Legalforms/assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="../Legalforms/assets/js/owl.carousel.min.js"></script>
	
	<script src="../Legalforms/assets/js/echo.min.js"></script>
	<script src="../Legalforms/assets/js/jquery.easing-1.3.min.js"></script>
	<script src="../Legalforms/assets/js/bootstrap-slider.min.js"></script>
    <script src="../Legalforms/assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="../Legalforms/assets/js/lightbox.min.js"></script>
    <script src="../Legalforms/assets/js/bootstrap-select.min.js"></script>
    <script src="../Legalforms/assets/js/wow.min.js"></script>
	<script src="../Legalforms/assets/js/scripts.js"></script>

	
	
	
</body>
</html>
<?php } ?>