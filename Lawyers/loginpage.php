
<?php
session_start();
error_reporting(0);
include('../Legalforms/includes/config.php');
// Code user Registration
if(isset($_POST['submit']))
{
$name=$_POST['username'];
$email=$_POST['useremail'];
$contactno=$_POST['contactno'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into lawyer(name,email,contactno,password) values('$name','$email','$contactno','$password')");
if($query)
{
    echo "<script>alert('You are successfully register');</script>";
}
else{
echo "<script>alert('Not register something went worng');</script>";
}
}
// Code for User login
if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);
$query=mysqli_query($con,"SELECT * FROM lawyer WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="lawyer-account.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['name'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into lawyerlog(lawyeremail,lawyerip,status) values('".$_SESSION['login']."','$lawyerip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$extra="loginpage.php";
$email=$_POST['email'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysqli_query($con,"insert into lawyerlog(lawyeremail,lawyerip,status) values('$email','$lawyerip','$status')");
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="Invalid email id or Password";
exit();
}
}


?>


<!DOCTYPE html>
 <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Kachari/Lawyer/Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
<script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>
        <script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

    </head>
    <body>
            

                         
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
        
                <span class="right">
                    <a href="../index.php">
                        <strong>Back to Home</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Welcome to Kachari <span>A Step to Future</span></h1>   
            </header>
  
        <section>   

                <div id="container_demo" >
                     
                   
                   <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                           


                        <div id="login" class="animate form">

                            <form  action=" " autocomplete="off" method="POST"> 
                                <h1>Log in</h1> 
                               <span style="color:red;" >
                                    <?php
                                    echo htmlentities($_SESSION['errmsg']);
                                    ?>
                                    <?php
                                    echo htmlentities($_SESSION['errmsg']="");
                                    ?>
    </span>
                                <p> 
                                    <label for="email" class="eamil" data-icon="u" > Your email </label>
                                    <input id="eamil" name="email" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
                                    <!-- <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />  -->
                                    <a href="forget-password.php"><label style="cursor: pointer;" for="loginkeeping">Forgot your Password </label></a>
                                </p>
                                <p class="login button"> 
                                    <input type="submit" name="login" value="Login" /> 
                                </p>
                                 <p class="login button"> 
                                    <input type="submit" name="login" value="Facebook Login" /> 
                                </p>
                                <p class="change_link">
                                    Not a member yet ?
                                    <a href="#toregister" class="to_register">Join us</a>
                                </p>
                            </form>
                        </div>


                        <div id="register" class="animate form">
                            <form  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> " autocomplete="off" method="POST" name="register" onsubmit ="return valid();"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="email" name="useremail" required="required" type="email" placeholder="mysupermail@gmail.com" onblur="userAvailability()" /> 
                                    <span id="user-availability-status1" style="font-size:12px;"></span>
                                </p>
                                 <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your Contact</label>
                                    <input  name="contactno" required="required" type="text" placeholder="03001234567" id="contactno" maxlength="11" /> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="confirmpassword" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="confirmpassword" name="confirmpassword" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
                                    <input type="submit" id="submit" name="submit" value="Sign up"/> 
                                </p>
                                <p class="change_link">  
                                    Already a member ?
                                    <a href="#tologin" class="to_register"> Go and log in </a>
                                </p>
                            </form>
                        </div>
                        
                    </div>
                </div>  
            </section>
        </div>
</body>
</html>