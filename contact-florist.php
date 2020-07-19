<!DOCTYPE html>
<html lang="en">
  <head>
    <title>La Florist | Flowers are never a bad idea.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon upload -->
	<link rel = "icon" href="images/rose-favicon.jpg" type="image/ico"> 
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
  </head>
  
  <body>
	<!--Navigation-->
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
		  <a class="navbar-brand" href="index-florist.php"><span class="flaticon-lotus"></span>LA FLORIST</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			  </button>
			  <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto" id="my">
				  <li class="nav-item"><a href="about-florist.php" class="nav-link">About</a></li>
				  <li class="nav-item"><a href="flower-florist.php" class="nav-link">Know Your Flower</a></li>
				  <li class="nav-item"><a href="flower-facts.php" class="nav-link">Flower Facts</a></li>	
				  <li class="nav-item active"><a href="contact-florist.php" class="nav-link">Contact</a></li>
				  <li class="nav-item" style="margin-top:20px;"><p><a href="login-florist.php" class="btn btn-primary p-2 px-4">Login</a></p></li>		  
				</ul>
			  </div>
		</div>
	</nav>
    <!-- END nav -->
	
	<!--Contact Server-->
	<?php	
		include("contact-server.php");
	?>
	
	<!--BreadCrumb-->
    <section class="hero-wrap js-fullheight" style="background-image: url('images/breadcrumb-bg.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index-florist.php">Home</a></span><span>|  </span> <span>Contact</span></p>
          </div>
        </div>
      </div>
    </section>
		
	<!--Content-->
	<section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9">
			<div class="col-md-4 contact-info ftco-animate bg-light p-4">
				<div class="row">
					<div class="col-md-12 mb-4">
						<h2 class="h4">Contact Information</h2>
					</div>
					<div class="col-md-12 mb-3">
					  <p><span>Address:</span> China Street, Georgetown Penang, Malaysia</p>
					</div>
					<div class="col-md-12 mb-3">
					  <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
					</div>
					<div class="col-md-12 mb-3">
					  <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@florist.com</a></p>
					</div>
					<div class="col-md-12 mb-3">
					  <p><span>Website:</span> <a href="index-florist.php">la-florist.com</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
			<!--FeedBack Form-->
			<div class="col-md-6 ftco-animate">
				<form method="post" action="contact-florist.php" class="contact-form">
					<div class="row">
						<!--Notice user email sent-->
						<?php include("notice.php");?>
					</div>	
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							  <input type="text" name="contact-name" class="form-control" placeholder="Your Name (required)" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							  <input type="email" name="contact-email" class="form-control" placeholder="Your Email (required)" data-error="Invalid Email Address" required>
							  <div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="text" name="contact-subject" class="form-control" placeholder="Subject">
					</div>
					<div class="form-group">
						<textarea name="contact-message" id="" cols="30" rows="7" class="form-control" placeholder="Message (required)" data-error="Please type out the message" required></textarea>
					</div>
					<div class="form-group">
						<input name="contact-submit" type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
					</div> 
				</form>					
			</div>
        </div>
      </div>
    </section>
	
	<!--Embedd Google Map-->
	<section class="ftco-section" style="padding:0;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63553.16509551743!2d100.27432687398354!3d5.4058788962312585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac397ad2b7bd5%3A0x239ae45978a9b934!2sGeorge%20Town%2C%20Penang!5e0!3m2!1sen!2smy!4v1590497450585!5m2!1sen!2smy" width="100%" height="600" frameborder="0" style="border:0;margin-bottom:-8px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</section>	

	<?php 
		include("florist-footer.php");
	?>
   

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#FFC0CB"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>