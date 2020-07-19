<footer class="ftco-footer ftco-section img">
	<div class="overlay"></div>
      <div class="container">
        <div class="row">
        	<div class="col-lg-4 col-md-6 mb-5 mb-md-3">
				<div class="ftco-footer-widget">
					<a class="navbar-brand" href="index-florist.php"><span class="flaticon-lotus"></span>LA FLORIST</a><br/>
				</div>
				<div class="ftco-footer-widget mb-4">
					<p>An online florist shop where flowers and house plants are introduced. We strongly believe that flower is one of the greatest ways to express a person feeling.</p>
					
				</div>
			</div>
			<div class="col-lg col-md-6 mb-5 mb-md-3">
				<div class="ftco-footer-widgets">
					<p style="font-size:18px;">Quick Link</p>
				</div>
				<div class="ftco-footer-widget mb-4">
				  <ul class= "navbar-nav ml-auto">
                    <li><a href="about-florist.php">About </a></li>
                    <li><a href="flower-florist.php">Know Your Flowers</a></li>
                    <li><a href="arrangement-florist.php">Flower Arrangement</a></li>					
                    <li><a href="flower-facts.php">Flower Facts</a></li>
					<li><a href="contact-florist.php">Contact</a></li>
                  </ul>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 mb-5 mb-md-3">
				<div class="ftco-footer-widget">
					<p style="font-size:18px;">Be The First To Know</p>
				</div>
				<div class="ftco-footer-widget mb-4">
					<p>Subscribe to our newsletter to get more flower facts!</p>
					<?php
						$db = mysqli_connect('localhost','root','','florist_blog');	
						$notice = array();
						$error = array();
						
						//user submit the form
						if(isset($_POST['subscribe'])){								
							$email = $_POST['email-subscribe'];			
							$query = "INSERT INTO newsletter(email) VALUES ('$email')"; //insert email into database
							
							//retrieve email and sent a letter through user email
							if(mysqli_query($db,$query)){								
								$query1 = "SELECT email FROM newsletter	ORDER BY id desc LIMIT 1";
								$result = mysqli_query($db,$query1);
								if(mysqli_num_rows($result)>0){
									while($row = mysqli_fetch_assoc($result)){
										if ($email==$row['email']){
											array_push($error,"Error: You have already subscribe our newsletter.");
										}		
										else{
											$emailSend = $row['email'];
											
											//send email through Google Gmail
											$to_email = "$emailSend";
											$subject = "Appreciate Mail from La Florist";
											$body = "Thank you for subscribe La Florist! \nHave a nice day! \nStay tuned for more updates!";
											$headers = "From: example.lu123@gmail.com";
											
											//display when is successful	
											if (mail($to_email, $subject, $body, $headers)) {
												array_push($notice,"Thank for subscribe us!");
											}
										}
									}										
								}						
							}
							else{
								array_push($error,"Ops! Please type again!");								
							}
						}
						mysqli_close($db);
					?>
					
					<!--Newsletter Subscribe Form-->
					<form method="post" action="#send-mail" data-toggle="validator" role="form" style="padding:0px 80px 0px 0px;">
						<div class="form-group">
							<input type="email" class="form-control" name="email-subscribe" id="inputEmail" placeholder="Email to subscribe" data-error="Invalid Email Address" required>
							<div class="help-block with-errors"></div>
						</div>
						<div> 
							<span id="send-mail">
							<!--Notice user email sent-->
							<?php include("notice.php");?>
							<?php include("error.php");?>
							</span>
						</div>
						<div class="form-group">
							<a href="#send-mail"><button name="subscribe" type="submit" class="btn btn-footer-black">Subscribe</button></a>
						</div>
					</form>
				</div>
			</div>
        </div>
		
        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Reason we use javascript is to pass year dynamically -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
		
    </div>
</footer>