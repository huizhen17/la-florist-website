<?php include('server.php'); ?>

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
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
		  <a class="navbar-brand" href="index-florist.php"><span class="flaticon-lotus"></span>LA FLORIST</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			  </button>
			  <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto" id="my">
			      <!--Display alert when user success sign in-->
				  <?php if(isset($_SESSION['success'])):?>
						<script> alert("<?php echo $_SESSION['success'];?>");</script>
						<?php unset($_SESSION['success']);?>
				  <?php endif ?>
				  
				  <?php if(isset($_SESSION['username'])):?>
					<li class="nav-item" style="margin-top:25px;margin-right:10px"><p>Welcome <i><?php echo $_SESSION['username'];?> </i></p></li> &nbsp;
					<li class="nav-item" style="margin-top:20px;"><p><a href="login-florist.php?logout='1'" class="btn btn-primary p-2 px-4">Logout</a></p></li>
				  <?php endif ?>
				</ul>
			  </div> 
			  </div>
	</nav>
    <!-- END nav -->
	
	<!--Breadcrumbs-->
    <section class="hero-wrap js-fullheight" style="background-image: url('images/breadcrumb-bg.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Admin Page</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="admin-florist.php">Home</a></span><span>|  </span> <span>Admin</span></p>
          </div>
        </div>
      </div>
    </section>
	
	<!--Admin Page-->
	<section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <div class="container">
				<div class="row">				
				<?php 
					$db = mysqli_connect('localhost','root','','florist_blog');
					$query = "SELECT * FROM blog ORDER BY id DESC";
					$result = mysqli_query($db,$query);
						
					if(mysqli_num_rows($result)>0){ 
						while($row = mysqli_fetch_assoc($result)){?>
								<!--Display all the post created-->
								<div class="col-lg-6 ftco-animate"> 
									<h2 style="color:#d291bc"><?php echo "Facts #" .$row['id']. " "; echo $row['title'];?></h2>
									<p>
										<i>Date Published: <?php echo $row['date'];?></i><br/>
										<i>Author: <?php echo $row['author'];?></i>
									</p>
									<p style="color:#000"><?php echo $row['summary'];?></p>
									
									<p>
									  <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="img-fluid">
									</p>
								</div>					
						<?php } ?>
								
					<?php } ?>
				<?php mysqli_close($db); ?>	
				</div>
			</div>	                                 
        </div> 
		  
		<!--Side Bar-->  
        <div class="col-lg-4 sidebar ftco-animate">			
			<div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3 class="heading-2"><a href="admin-florist.php">Admin</a> - <i><?php echo $_SESSION['username'];?></i></h3>
				<li><a href="admin-post-created.php">View Post Created</a></li>
                <li><a href="create-post.php">Create</a></li>
                <li><a href="edit-post.php">Edit</a></li>
                <li><a href="delete-post.php">Delete</a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-2" >Recent Blog</h3>
			  <!--Display only three latest post-->
			  <?php 
				$db = mysqli_connect('localhost','root','','florist_blog');
				$query  = "SELECT * FROM blog ORDER BY date DESC";
				$result = mysqli_query($db,$query);
				
				for($i=0;$i<3;$i++){
					if($row = mysqli_fetch_assoc($result)){ ?>
						<div class="block-21 mb-4 d-flex">
							<a class="blog-img mr-3"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="img-fluid" ></a>
							<div class="text">
							  <h3 class="heading"><a href="#"><?php echo $row['title'];?></a></h3>
							  <div class="meta">
								<div><a href="#"><span class="icon-calendar"></span> <?php echo $row['date'];?></a></div>
								<div><a href="#"><span class="icon-person"></span> <?php echo $row['author'];?></a></div>
							  </div>
							</div>
						</div>
					<?php }		
				}?>		
			</div>			
        </div>
      </div>
    </section>

	<!--footer-->
	<footer class="ftco-footer ftco-section img" style="padding:1rem 0 0;">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Reason we use javascript is to pass year dynamically -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
	
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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

