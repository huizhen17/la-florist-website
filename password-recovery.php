<!DOCTYPE html>
<html lang="en">
<head>
	<title>Password Recovery</title>
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
				<?php
					if(isset($_POST['search-email'])){
						$email = mysqli_real_escape_string($db,$_POST['check-mail']);
						$query = "SELECT * FROM user WHERE email='$email'";
						$result = mysqli_query($db,$query);
							
						if($row= mysqli_fetch_array($result)){?>
							<form id="" class="login100-form validate-form" method="post" action="">
								<span class="w-full text-right" style="margin-top: -100px">
									<a href="login-florist.php" class="txt4">
										Back to Login &nbsp; <i class="fa fa-arrow-right"></i>
									</a>
								</span>
								<span class="login100-form-title p-b-34">
									Account Recovery
								</span>
								
								<!--Set New Password To Recover Account-->
								<div class="w-full text-center p-b-10">
									<span class="txt1">
										Enter new password. 
									</span>						
								</div>
								<div class="w-full text-center p-t-10 p-b-120">
									<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="contain at least one number and one uppercase and lowercase letter and at least 8 or more characters">
										<input type="hidden" name="email" class="form-control" style="display:none;" value="<?php echo $row['email']; ?>">
										<input id="password" class="input100" type="password" oninvalid="this.setCustomValidity('Must contain at least 1 number and 1 uppercase and lowercase letter and at least 8 or more characters')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" name="pass" placeholder="New Password">
										<div id="eye-btn">
											<i id = "eyeBtn" class="fa fa-eye" onclick="myFunction()"></i>
										</div>
										<span class="focus-input100"></span>
									</div>
									<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Retype password">
										<input class="input100" type="password" name="repass" placeholder="Repeat Password">
										<span class="focus-input100"></span>
									</div>
									<br><?php include("error.php");?>
									<div class="container-login100-form-btn">
										<button class="login100-form-btn" name="recovery">
											Recovery
										</button>
									</div>						
								</div>						
							</form>	
				  <?php }
						else{
							array_push($error,"Error: No email found.");?>
							<form id="form-search" class="login100-form validate-form" method="post" action="">
							<span class="w-full text-right" style="margin-top: -100px">
								<a href="login-florist.php" class="txt4">
									Back to Login &nbsp; <i class="fa fa-arrow-right"></i>
								</a>
							</span>
							<span class="login100-form-title p-b-34">
								Account Recovery
							</span>
							
							<div class="w-full text-center p-b-10">
								<span class="txt1">
									Enter your email address to recover your account. 
								</span>						
							</div>
							
							<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-10" data-validate="Type email">
								<input class="input100" type="email" name="check-mail" placeholder="Email">
								<span class="focus-input100"></span>
							</div>	
							<br><br><?php include("error.php");?>
							<div class="w-full text-center p-t-30 p-b-200">
							<div class="container-login100-form-btn">
								<button class="login100-form-btn" type="submit" name="search-email">
									Submit
								</button>
							</div>
							</div>
						</form>			
				  <?php }	
					}
					else{?>
						<!--Account Recovery Form-->
						<form id="form-search" class="login100-form validate-form" method="post" action="">
							<span class="w-full text-right" style="margin-top: -100px">
								<a href="login-florist.php" class="txt4">
									Back to Login &nbsp; <i class="fa fa-arrow-right"></i>
								</a>
							</span>
							<span class="login100-form-title p-b-34">
								Account Recovery
							</span>
							
							<div class="w-full text-center p-b-10">
								<span class="txt1">
									Enter your email address to recover the account. 
								</span>						
							</div>
							
							<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-10" data-validate="Type email">
								<input class="input100" type="email" name="check-mail" placeholder="Email">
								<span class="focus-input100"></span>
							</div>	
							<br><br><?php include("error.php");?>
							<div class="w-full text-center p-t-30 p-b-200">
							<div class="container-login100-form-btn">
								<button class="login100-form-btn" type="submit" name="search-email">
									Submit
								</button>
							</div>
							</div>
						</form>						
				  <?php }	
				?>

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