<?php
session_start();
// error_reporting(0);

include('../Legalforms/includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{
	// code for billing address updation
	if(isset($_POST['update']))
	{
		$education=$_POST['education'];
		$experience=$_POST['experience'];
		$PracticeAs=$_POST['PracticeAs'];
		$city=$_POST['city'];
		$file=$_FILES['image'];
		// print_r($file);
         
         $filename = $file['name'];
         $filepath = $file ['tmp_name'];
         $fileerror = $file['error'];

         if($fileerror == 0){

         	$destfile = 'upload/' .$filename;
         	move_uploaded_file($filepath, $destfile);

    }


		$query=mysqli_query($con,"update lawyer set education='$education', experience='$experience',PracticeAs='$PracticeAs',city='$city',image='$destfile' where id='".$_SESSION['id']."'");
		if($query)
		{
echo "<script>alert('Professional Info has been updated');</script>";
		}
	}

}






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
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="../Legalforms/assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="../Legalforms/assets/css/bootstrap-select.min.css">

		
		<link rel="stylesheet" href="../Legalforms/assets/css/config.css">

		
		<link rel="stylesheet" href="../Legalforms/assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="../Legalforms/assets/images/favicon.ico">

	<!-- 	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script> -->

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
	          <span>1</span>professional Info
	        </a>
	     </h4>
    </div>
    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
			<div class="row">		
				<div class="col-md-12 col-sm-12 already-registered-login">

<?php
$query=mysqli_query($con,"select * from lawyer where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
?>

					<form class="register-form" role="form" method="post" enctype="multipart/form-data">
<div class="form-group">
					    <label class="info-title" for="Education">Education<span>*</span></label>
					    <input class="form-control unicase-form-control text-input"  name="education" required="required" value= "<?php echo $row['education'];?>" required>
					  </div>



						<div class="form-group">
					    <label class="info-title" for="Experience ">Experience  <span>*</span></label>
			 <textarea type="text" class="form-control unicase-form-control text-input" id="experience" name="experience" required ="required"><?php echo $row['experience'];?></textarea>
					  </div>
					  <div class="form-group">
					    <label class="info-title" for="Experience ">Practice As  <span>*</span></label>
			 <input type="text" class="form-control unicase-form-control text-input" id="PracticeAs" name="PracticeAs" value="<?php echo $row['PracticeAs'];?>" required>
					  </div>
					  <div class="form-group">
					    <label class="info-title" for=" City">City <span>*</span></label>
					    <input type="text" class="form-control unicase-form-control text-input" id="city" name="city" required="required" value="<?php echo $row['city'];?>" >
					  </div>
 <div class="form-group">
					    <label class="info-title" for="image">Image <span>*</span></label>
					    <input type="file" class="form-control unicase-form-control" id="image" name="image" required="required" value="<?php echo $row['image'];?>" >
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

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>


	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
</body>
</html>
<?php ?>