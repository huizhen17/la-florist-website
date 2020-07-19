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
				  <li class="nav-item active"><a href="flower-florist.php" class="nav-link">Know Your Flower</a></li>
				  <li class="nav-item"><a href="flower-facts.php" class="nav-link">Flower Facts</a></li>	
				  <li class="nav-item"><a href="contact-florist.php" class="nav-link">Contact</a></li>
				  <li class="nav-item" style="margin-top:20px;"><p><a href="login-florist.php" class="btn btn-primary p-2 px-4">Login</a></p></li>
				</ul>
			 </div>
		</div>
	</nav>
    <!-- END nav -->

	<!--BreadCrumb-->
    <section class="hero-wrap js-fullheight" style="background-image: url('images/breadcrumb-bg.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Understand Your Flower</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index-florist.php">Home</a></span><span>|  </span> <span>Know Your Flower</span></p>
          </div>
        </div>
      </div>
    </section>
		
	<!--Content-->
	<section class="ftco-section">
	  	<div class="container">
	  	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section ftco-animate text-center">
            <h3 class="subheading">In the world</h3>
            <h2 class="mb-1">Various of Flowers</h2>
          </div>
        </div>
		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section ftco-animate text-right" style="margin-bottom:20px;">
			<form method="post" action="flower-florist.php" name="myForm" class="contact-form">	
				<div class="row select">
					<div class="form-group">
						<div class="row">
							<div class="col-md-8">
								<select class="custom-select" name="arrangement" onChange="getSelected()">
									<option class="select-items" value = "asc" selected="selected">ASC</option>
									<option class="select-items" value = "desc">DESC</option>
								</select>	
							</div>
						</div> 					
					</div>		
					<div class="form-group" style="padding-left:10px">
						<input name="submit" type="submit" value="Sort" class="btn btn-primary py-2 px-3">
					</div> 
				</form>		    
			  </div>
			</div>
		
		
		<div class="row" style="margin-left:2px;margin-right:2px;">
		<!--Based on user submit rearrange the flower info's order-->
		<?php 
			$db = mysqli_connect('localhost','root','','florist_blog');
			if(isset($_POST['submit'])){				
			$arrangement = $_POST['arrangement'];			
			$query = "SELECT * FROM flower ORDER BY id $arrangement";
			$result = mysqli_query($db,$query);
			
				if(mysqli_num_rows($result)>0){ 
					while($row = mysqli_fetch_assoc($result)){?>
						<div class="col-md-6 col-lg-4" >
							<div class="ftco-animate">
								<img style="margin-top:12px;margin-bottom:12px" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="img-fluid">
							</div>
							<div class="text p-6 text-center ftco-animate">
								<h5 style="color:#d291bc"><?php echo ($row['title']); ?></h5>
								<p><i><?php echo ($row['language']); ?></i></p>
								<p style="color:#000"><?php echo ($row['content']); ?></p>
							</div>				
						</div>								
					<?php }
				} 
			}
			else{
						
				$query = "SELECT * FROM flower ORDER BY id ASC";
				$result = mysqli_query($db,$query);
			
				if(mysqli_num_rows($result)>0){ 
					while($row = mysqli_fetch_assoc($result)){?>
						<div class="col-md-6 col-lg-4" >
							<div class="ftco-animate">
								<img style="margin-top:12px;margin-bottom:12px" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="img-fluid">
							</div>
							<div class="text p-6 text-center ftco-animate">
								<h5 style="color:#d291bc"><?php echo ($row['title']); ?></h5>
								<p><i><?php echo ($row['language']); ?></i></p>
								<p style="color:#000"><?php echo ($row['content']); ?></p>
							</div>				
						</div>								
					<?php }
				}
			}
		mysqli_close($db); ?>	
		</div>
		</section>

	
    <?php 
		include("florist-cta.html");
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
  <script>
	function getSelected(){
		var myForm = document.myForm;
		var arrangement = myForm.arrangement;
		var selected = state.options[state.selectedIndex].text;
        alert("Selected Arrangement: " + selected);
	}	
  </script>
    
  </body>
</html>