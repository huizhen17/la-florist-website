<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel = "icon" href="images/rose-favicon.jpg" type="image/ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
	<link href='css/styles.css' rel='stylesheet' type='text/css'>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util-login.css">
	<link rel="stylesheet" type="text/css" href="css/main-login.css">
<!--===============================================================================================-->
</head>
<body>
	<!--Server Database-->
	<?php 
		include('server.php');
	?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<!--Login Form-->
				<form class="login100-form validate-form" method="post" action="login-florist.php">
					<span class="w-full text-right" style="margin-top: -100px">
						<a href="index-florist.php" class="txt4">
							Back to Home &nbsp; <i class="fa fa-arrow-right"></i>
						</a>
					</span>
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="login-username" placeholder="User name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input id="password" class="input100" type="password" name="login-pass" placeholder="Password">
						<!--Toggle User Password-->
						<div id="eye-btn">
							<i id = "eyeBtn" class="fa fa-eye" onclick="myFunction()"></i>
						</div>
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Sign in
						</button>
					</div>
					<br><br><?php include("error.php");?>
					<div class="w-full text-center p-t-20 p-b-239">
						<a href="password-recovery.php" class="txt2">
							Forgot password?
						</a>						
					</div>
				
					<div class="w-full text-center">
						<a href="sign-up-florist.php" class="txt3">
							Sign Up
						</a>
					</div>										
				</form>
				<div class="login100-more" style="background-image: url('images/login-img.jpg');"></div>
			</div>
		</div>
	</div>

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
		
		//Toggle Password Visibility
		function myFunction() {
		  var eyeIcon = document.getElementById("eyeBtn");
		  var x = document.getElementById("password");
		  //if default input type is password set to text
		  if (x.type === "password") {
			eyeIcon.setAttribute("class","fa fa-eye-slash");
			x.type = "text"; 
		  } 
		  //if default input type is text set to password
		  else {
			eyeIcon.setAttribute("class","fa fa-eye");
			x.type = "password";
		  }
		}
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/login-main.js"></script>
	<script type="text/javascript" src="js/myScript.js"></script>

</body>
</html>