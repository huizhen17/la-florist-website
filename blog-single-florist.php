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
				  <li class="nav-item active"><a href="flower-facts.php" class="nav-link">Flower Facts</a></li>	
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
            <h1 class="mb-3 bread">Single Facts</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="flower-facts.php">Facts</a></span><span>|  </span> <span>Single Blog</span></p>
          </div>
        </div>
      </div>
    </section>
		
	<!--Navigation-->	
	<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
			<!--Display Single Blog-->
			<?php 
				$db = mysqli_connect('localhost','root','','florist_blog');
				$id= $_GET['id']; //get id from flower facts.php
				$query  = "SELECT * FROM blog WHERE id='$id'";
				$result = mysqli_query($db,$query);
					
				if($row = mysqli_fetch_assoc($result)){ ?>
					<h2 class="mb-3" style="color:#d291bc;"><?php echo $row['title'];?></h2>
					<p>
						<i>Date Published: <?php echo $row['date'];?></i><br/>	
						<i>Post created by: <?php echo $row['author'];?></i>
					</p>
					<p>
						<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="img-fluid" height="48">
					</p>
					
					<p style="color:#373737;"><?php echo $row['content'];?></p>		
				<?php } ?>			  
            
          </div> 
		  
		  <!--Sidebar-->
          <div class="col-lg-4 sidebar ftco-animate">
            <!--Display recent blog based on the blog's date-->
			<div class="sidebar-box ftco-animate">
              <h3 class="heading-2" style="margin-bottom:20px;">Recent Blog</h3>
			  <?php 
				$db = mysqli_connect('localhost','root','','florist_blog');
				$id= $_GET['id'];
				$query  = "SELECT * FROM blog ORDER BY date DESC";
				$result = mysqli_query($db,$query);
				
				//select only the first three post
				for($i=0;$i<3;$i++){
					if($row = mysqli_fetch_assoc($result)){ ?>
						<div class="block-21 mb-4 d-flex">
							<a class="blog-img mr-3"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="img-fluid" ></a>
							<div class="text">
							  <h3 class="heading"><a href="blog-single-florist.php?id=<?php echo $row['id']?>"><?php echo $row['title'];?></a></h3>
							  <div class="meta">
								<div><a href="blog-single-florist.php?id=<?php echo $row['id']?>"><span class="icon-calendar"></span> <?php echo $row['date'];?></a></div>
								<div><a href="blog-single-florist.php?id=<?php echo $row['id']?>"><span class="icon-person"></span> <?php echo $row['author'];?></a></div>
							  </div>
							</div>
						</div>
					<?php }		
				}?>		
            </div>
			
			<!--Display summary-->
            <div class="sidebar-box ftco-animate" style="margin-top:-50px;">
              <h3 class="heading-2">Summary</h3>
              <?php 
				$db = mysqli_connect('localhost','root','','florist_blog');
				$id= $_GET['id'];
				$query  = "SELECT * FROM blog WHERE id='$id'";
				$result = mysqli_query($db,$query);
					
				if($row = mysqli_fetch_assoc($result)){ ?>
					<p><?php echo $row['summary'];?></p>						
				<?php } ?>	
            </div>
          </div>
        </div>
      </div>
    </section> <!-- section -->
    
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
    
  </body>
</html>