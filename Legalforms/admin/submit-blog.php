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
	$btitle=$_POST['btitle'];
		$bdes=$_POST['bdes'];
		$bwri=$_POST['bwri'];
		$bbody=$_POST['bbody'];
		$file=$_FILES['bpic'];

		$filename = $file['name'];
         $filepath = $file ['tmp_name'];
         $fileerror = $file['error'];

         if($fileerror == 0){

         	$destfile = 'blogimage/' .$filename;
         	move_uploaded_file($filepath, $destfile);

$query=mysqli_query($con,"insert into blogs(btitle,bdes,bwri,bbody,bpic) values('$btitle','$bdes','$bwri' ,'$bbody','$destfile')");

$_SESSION['msg']="Blog Inserted Successfully !!";

}
header("Location:insert-Blog.php")

?>