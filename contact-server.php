<?php

	//connect the database
	$db = mysqli_connect('localhost','root','','florist_blog');
	$notice = array();
	
	//User submit the feedback form from the Contact Page
	if(isset($_POST['contact-submit'])){
		$name = mysqli_real_escape_string($db,$_POST['contact-name']);
		$email = mysqli_real_escape_string($db,$_POST['contact-email']);
		$subject = mysqli_real_escape_string($db,$_POST['contact-subject']);
		$message = mysqli_real_escape_string($db,$_POST['contact-message']);
		$date = date('Y-m-d');
		
		if(count($notice==0)){
			//Insert all the data into database
			$query = "INSERT INTO feedback(name,email,subject,message,date) VALUES ('$name','$email','$subject','$message','$date')";
			
			if(mysqli_query($db,$query)){
				array_push($notice,"Message sent successfully! Submit a new form?");
			}
			else{
				array_push($notice,"Message could not sent out. Please try again!");
				
			}						
		}		
	}

	mysqli_close($db);	
?>