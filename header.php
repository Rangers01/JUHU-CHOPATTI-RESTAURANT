<?php
session_start();
?>
<!DOCTYPE html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Juhu Chopatti|The Mini Restaurant</title>
  <link href="style.css" type="text/css" rel="stylesheet"/>
  <link href="Bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
  <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
  <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
  <link href="generic.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
  <link type="text/css" href="css/bootstrap-timepicker.min.css" />
  <script src="js/jquery-1.12.1.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
  <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
  
  <style>
#lean_overlay {
	position: fixed;
	z-index: 100;
	top: 0px;
	left: 0px;
	height: 100%;
	width: 100%;
	background: #000;
	display: none;
}
.popupContainer {
	position: absolute;
	width: 330px;
	height: auto;
	left: 45%;
	top: 80px;
	background: #FFF;
}
#modal_trigger {
	margin-top: 43px;
	margin-left: 30px;
	background-color: #ED6347;
	width: 100px;
	display: block;
	position:relative;
	display:inline-block;
}
#modal_trigger1 {
	margin-left: 10px;
	background-color: #ED6347;
	width: 120px;
	display: block;
}
.btn {
	padding: 10px;
	background: #F4F4F2;
	z-index:1;
}
.btn_red {
	background: #ED6347;
	color: #FFF;
}
.btn:hover {
	background: #E4E4E2;
}
.btn_red:hover {
	background: #C12B05;
}
a.btn {
	color: #666;
	text-align: center;
	text-decoration: none;
}
a.btn_red {
	color: #FFF;
}
.one_half {
	width: 100%;
	display: block;
	float: left;
}
.one_half2 {
	width: 45%;
	display: block;
	float: left;
}
.one_half.last2 {
	width: 50%;
}
/* Popup Styles*/
.popupHeader {
	font-size: 18px;
	text-transform: uppercase;
}
.popupHeader {
	background: #F4F4F2;
	position: relative;
	padding: 10px 20px;
	border-bottom: 1px solid #DDD;
	font-weight: bold;
}
.popupHeader .modal_close {
	position: absolute;
	right: 0;
	top: 0;
	padding: 10px 15px;
	background: #E4E4E2;
	cursor: pointer;
	color: #aaa;
	font-size: 20px;
}
.popupBody {
	padding: 20px;
}
/* Social Login Form */
.social_login {
}
.social_login .social_box {
	display: block;
	clear: both;
	padding: 5px;
	margin-bottom: 8px;
	background: #F4F4F2;
	overflow: hidden;
}
.social_login .icon {
	display: block;
	width: 10px;
	padding: 5px 20px 5px 10px;
	margin: 10px 5px 10px 5px;
	float: left;
	color: #FFF;
	font-size: 16px;
	text-align: center;
}
.social_login .fb .icon {
	background: #3B5998;
}
.social_login .google .icon {
	background: #DD4B39;
}
.social_login .icon_title {
	display: block;
	padding: 5px 5px 10px 5px;
	float: left;
	font-weight: bold;
	font-size: 20px;
	color: #777;
}
.social_login .social_box:hover {
	background: #E4E4E2;
}
.centeredText {
	text-align: center;
	margin: 20px 0;
	clear: both;
	overflow: hidden;
	text-transform: uppercase;
}
.action_btns {
	clear: both;
	overflow: hidden;
}
.action_btns a {
	display: block;
}
/* User Login Form */
.user_login {
	display: none;
}
.user_login label {
	display: block;
	margin-bottom: 5px;
	font-size: 16px;
}
.user_login input[type="text"], .user_login input[type="email"], .user_login input[type="password"] {
	display: block;
	width: 90%;
	padding: 10px;
	border: 1px solid #DDD;
	color: #666;
	font-size: 14px;
	margin-left: 10px;
}
.user_login input[type="checkbox"] {
	float: left;
	margin-right: 5px;
}
.user_login input[type="checkbox"]+label {
	float: left;
}
.user_login .checkbox {
	margin-bottom: 10px;
	clear: both;
	overflow: hidden;
}
.forgot_password {
	display: block;
	margin: 20px 0 10px;
	clear: both;
	overflow: hidden;
	text-decoration: none;
	color: #ED6347;
	font-size: 16px;
}
.set {
	margin-top: 43px;
	width:100%;
}
.welcome {
	margin: 30px 0 0 0;
	width: 100%;
	font-size: 16px;
	position: relative;
}
@media (max-width: 600px) {
.set {
	margin: -4.5em 0em 0em 10em;
	position: relative;
}
}
</style>
  </head>
<body>
 <?php
						 include('connect.php');
						 if(isset($_POST['submit']))
						 {
							
							$fname=$_REQUEST['name'];
							$email=$_REQUEST['email'];
							$message=$_REQUEST['message'];
							$sql1="insert into `feedback` (`name` , `email`, `message`)values('$fname', '$email', '$message')";
							$res=mysqli_query($con,$sql1);
							if($res>=1)
							{
								
								echo '<div class="success">Thank you for
								connecting with us!, we will contact you soon...</div>';
							}
							else
							{
								echo '<div class="errormsgbox">oops! Error Occured in connecting, Try again after sometime...</div>';
							}
						  }
					   ?>
<div class="feedback" id="b">
    <h2 class="text-center">Have Enquiry..?</h2>
    <form class="feedback-form" method="post" action="">
    <input type="text" name="name" class="form-control" placeholder="Name" required/>
    <input type="email" name="email" class="form-control" placeholder="email" required/>
    <textarea class="form-control" rows="8" name="message" placeholder="Please write Feedback here" required></textarea>
    <center>
        <button name="submit" class="btn btn-block btn-primary"
              style="background-color:green; margin-top:10px;">Send Feedback <span class="glyphicon glyphicon-send"></span></button>
      </center>
  </form>
</div>
<div class="open">
    <button class="feed"></button>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div id="logo">
        <h1> JUHU CHOPATTI</h1>
        <span><a href="index.php" style="text-decoration:none">THE MINI RESTAURANT</a></span>
        </div>
    </div>
    <?php
	      if(isset($_SESSION['fname']))
		   {
		   	
			?>
    <div class="col-md-3"></div>
    <div class="col-md-3">
        <div class="welcome"> Welcome, <?php echo '<span style=" color:#09C; font-weight:bold; margin-left:10px;">' .$_SESSION["fname"]. '</span>'; ?> <a style="margin-left:10px; padding:5px; background-color:maroon; color:white; font-weight:bold;" href="logout.php"
             class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
        </div>
    </div>
   </div>
    <?php
		   }
		   else
		   {
		  ?>
    <div class="col-md-3"></div>
    <div class="col-md-3"> 
        <a id="modal_trigger" href="#modal" class="btn" style="color:#FFF">Login</a>
        <a id="modal_trigger" class="btn" style="color:white;" href="signup.php">Sign Up</a>
     </div>
  </div>
    <?php } ?>
  <div class="row">
    <div class="col-md-12">
      <div id="navbar">
        <nav role="navigation" id="navbar-main" class="navbar navbar-inverse" style="background-color:transparent; border:none;">
            <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse">
               <ul class="navbar-nav">
                <li class="active"><a href="index.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" href="#" >Menu <span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
            	 <?php $que=mysqli_query($con,"select * from add_cat");
            		while($cate=mysqli_fetch_array($que)){
            ?>
            		<li><a href="menu.php?#<?php echo $cate['add_cat'];?>"><?php echo $cate['add_cat'];?></a></li><?php }?>
                    
            	</ul>
            </li>
                <li><a href="reservation.php">RESERVATION</a></li>
                <li><a href="onlineorder.php">ORDER ONLINE</a></li>
                <li><a href="contactus.php">CONTACT US</a></li>
              </ul>
            </div>
        </nav>
      </div>
   </div>
  </div>
</div>
<div class="container">
  <div id="modal" class="popupContainer" style="display:none;">
    <header class="popupHeader">
     <span class="header_title">Login</span>
     <span class="modal_close"><i class="fa fa-times"></i></span>
    </header>
    <section class="popupBody">
    <!-- Social Login -->
      <div class="social_login">
        <div class=""> 
         <a href="#" class="social_box fb">
         <span class="icon"><i class="fa fa-facebook"></i></span> 
         <span class="icon_title">Connect with Facebook</span> </a> <a href="#" class="social_box google">
         <span class="icon"><i class="fa fa-google-plus"></i></span>
         <span class="icon_title">Connect with Google</span> </a> 
        </div>
        <div class="centeredText"> <span style="font-size:16px;">Or use your Email address</span> </div>
          <div class="action_btns">
            <div class="one_half">
            <a href="#" id="login_form" class="btn">Login</a>
            </div>
          </div>
      </div>
    <!-- Social Login End -->
    <!-- Username & Password Login form -->
    <?php
				include("connect.php");
				if(isset($_POST['login']))
				{
				$email=$_POST['email'];
				$pass=$_POST['pass']; 
				$sql="select * from register_users where Email='$email' AND Password='$pass'";
				
				$res= mysqli_query($con,$sql);
				$data= mysqli_fetch_array($res); 
				if(is_array($data))
				{
				$_SESSION['fname'] = $data['firstname'];
				echo "<script>
						alert('Login Successful');
						window.location.href='index.php';
						</script>";
				}
				else
				{
					echo "<script>
						alert('Invalid Email And password! Retry');
						window.location.href='index.php';
						</script>";
				}
				}
			   ?>
    <div class="user_login">
        <form method="post" action="">
        <label>Email</label>
        <input type="email" name="email" required="required" />
        <br />
        <label>Password</label>
        <input type="password" name="pass" required="required" />
        <br />
        <div class="checkbox">
            <input id="remember" type="checkbox" />
            <label for="remember">Remember me on this computer</label>
        </div>
        <div class="action_btns">
        <div class="one_half last2">
            <input type="submit" name="login" class="btn btn-primary" id="modal_trigger1" value="Login">
        </div>
        <div class="one_half2"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
        </div>
    </form>
    <a href="#" class="forgot_password">Forgot password?</a>
   </div>
    </section>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});


		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
        var i=0;
		$(document).ready(function() {
        $(".feed").click(function(){
			if(i==0)
			{
			$("#b").animate({marginLeft:'0px'});
			$(".feed").animate({marginLeft:'252px'});
			i=1;
			}
			else
			{
				$("#b").animate({marginLeft:'-252px'});
			$(".feed").animate({marginLeft:'0px'});
			i=0;
				}
			});
    	});
</script>