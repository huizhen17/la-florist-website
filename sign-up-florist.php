<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel = "icon" href="images/rose-favicon.jpg" type="image/ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
				<!--Sign Up Form-->
				<form class="signup100-form validate-form" method="post" action="sign-up-florist.php">
					<span class="w-full text-right" style="margin-top: -60px">
						<a href="index-florist.php" class="txt4">
							Back to Home &nbsp; <i class="fa fa-arrow-right"></i>
						</a>
					</span>
					<span class="login100-form-title p-b-34">
						Create A New Account
					</span>
					
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<!--Display Error Message-->
						 <?php if (isset($name_error)): ?>
							<span><p><?php echo $name_error; ?></p></span>
						<?php endif ?>
					</div>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input id="password" class="input100" type="password" name="pass" oninvalid="this.setCustomValidity('Must contain at least one special character and one uppercase and lowercase letter and at least 8 or more characters')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity('')" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}"  placeholder="Password">
						<div id="eye-btn">
							<i id = "eyeBtn" class="fa fa-eye" onclick="myFunction()"></i>
						</div>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Retype password">
						<input class="input100" type="password" name="repass" placeholder="Repeat Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type = "hidden" name="register">
							Sign Up
						</button>
					</div>
					<br/><?php include("error.php");?>
					<div class="w-full text-center p-t-10 p-b-50">
						<span class="txt1">
							By Signing up, I agree to 
						</span>

						<a href="#" class="txt2" onclick="openModal()">
							Terms of User
						</a>
						
						<!--Display user rules-->
						<div class="w-full text-left p-t-10 p-b-10 modal-1" id="lightbox"  style="background-color:#fff">
							<span class="txt1">	
								<ul>
									<li>1. Users must be above 18 years old to use the website.</li>
									<li>2. Must not post violent, nude, discriminatory, unlawful,sensitive and copyright images and contents.</li>
								</ul>
							</span>	
						</div>	
					</div>			

					<div class="w-full text-center">
						<a href="login-florist.php" class="txt3">
							Sign in
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/sign-up.jpg');"></div>
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
		
		//Toggle password visibility
		function myFunction() {
		  var eyeIcon = document.getElementById("eyeBtn");
		  var x = document.getElementById("password");
		  if (x.type === "password") {
			eyeIcon.setAttribute("class","fa fa-eye-slash");
			x.type = "text";
		  } else {
			eyeIcon.setAttribute("class","fa fa-eye");
			x.type = "password";
		  }
		}
		
		//Display the rules else hide the rules
		function openModal() {
			var x = document.getElementById("lightbox");
			if (x.style.display === "none") {
				x.style.display = "block";
			} 
			else {
				x.style.display = "none";
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

</body>
</html>