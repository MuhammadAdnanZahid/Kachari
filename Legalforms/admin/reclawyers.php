
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	
if(isset($_POST['submit']))
{
	
	$rname=$_POST['rname'];
	$redu=$_POST['redu'];
	$rprac=$_POST['rprac'];
	$rcity=$_POST['rcity'];
	$rexp=$_POST['rexp'];
	$remail=$_POST['remail'];
	$rcontact=$_POST['rcontact'];
	$file=$_FILES["rimage"];
	
      $filename= $file['name'];
         $filepath = $file ['tmp_name'];
         $fileerror = $file['error'];

         if($fileerror == 0){

         	$destfile = 'rlawyerpic/' .$filename;
         	move_uploaded_file($filepath, $destfile);

    }

		$query=mysqli_query($con,"insert into reclawyer(rname,redu,rprac,rexp,rcity,remail,rcontact,rimage) values('$rname','$redu','$rprac','$rexp' ,'$rcity','$remail','$rcontact','$destfile')");
		if($query)
		{
echo "<script>alert('Lawyer has been successfully add');</script>";
		}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Recomanded Lawyers</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<!-- <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script> -->

   <script>


function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	


</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Recomended Layers</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">



<div class="control-group">
<label class="control-label" for="basicinput">Lawyer Name</label>
<div class="controls">
<input type="text"    name="rname"  placeholder="Enter Lawyer Name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Education</label>
<div class="controls">
<input type="text"    name="redu"  placeholder="Education" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Practice As</label>
<div class="controls">
<input type="text"    name="rprac"  placeholder="Practice As" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">City</label>
<div class="controls">
<input type="text"    name="rcity"  placeholder="City" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Experience</label>
<div class="controls">
<textarea  name="rexp"  placeholder="Experience" rows="6" class="span8 tip">
</textarea>  
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Email</label>
<div class="controls">
<input type="text"    name="remail"  placeholder="Email" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Contact</label>
<div class="controls">
<input type="text"    name="rcontact"  placeholder="Contact" class="span8 tip" required>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Insert Image</label>
<div class="controls">
<input type="file" name="rimage" id="rimage" value="" class="span8 tip" required>
</div>
</div>


	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Insert</button>
											</div>
										</div>
									</form>
							</div>
						</div>


	
						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php } ?>