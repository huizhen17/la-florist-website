<?php

	//start the session 
	session_start();
	
	//connect to the database
	$db = mysqli_connect('localhost','root','','florist_blog');
	$problem = FALSE; 
	$error = array();
	
	//register
	if(isset($_POST['register'])){
		
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$pass = mysqli_real_escape_string($db,$_POST['pass']);
		$repass = mysqli_real_escape_string($db,$_POST['repass']);
		
		//password do not match
		if($pass != $repass){
			array_push($error,"Error: The two passwords do not match!");
		}
		
		//no error	
		if(count($error==0)){
			$password = md5($pass); //to encrypt the pw before store to database
			//insert all data to user table
			$query = "INSERT INTO user(username,password,email) VALUES ('$username','$password','$email')";
			
			$sql="SELECT * FROM user WHERE (username='$username' or email='$email') LIMIT 1";
			$res= mysqli_query($db,$sql);
		  
			if (mysqli_num_rows($res) > 0) {
				// output data of each row
				$row = mysqli_fetch_assoc($res);
				if ($username==$row['username'] && $email==$row['email'])
				{
					array_push($error,"Error: Account already exists.");
				
				}				
				else if ($username==$row['username'])
				{
					array_push($error,"Error: Username already exists.");
				
				}
				else if($email==$row['email'])
				{
					array_push($error,"Error: Email already exists.");
				}
			} 
			else{ 
				if(mysqli_query($db,$query)){
					header('location:login-florist.php'); //redirect user 
				}
				else{
					array_push($error,"Error: Account Not Found!");
				}
			}
		}
	}
	
	//log user from login pg
	if(isset($_POST['login'])){
		$username = mysqli_real_escape_string($db,$_POST['login-username']);
		$pass = mysqli_real_escape_string($db,$_POST['login-pass']);
	
		//login as main admin
		if($username =='Admin'&& $pass == 'Admin@123'){
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Welcome! You are now logged in."; //pass the success message
			header('location:main-admin.php'); //redirect user 
		}
	
		else{
			$password = md5($pass); //to encrypt the pw before store to database
			$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db,$query);
			//if account found
			if(mysqli_num_rows($result)==1){
				//log user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Welcome! You are now logged in."; //pass the success message
				header('location:admin-florist.php'); //redirect user 
			}
			//if account not found
			else{
				array_push($error,"Error: Wrong username/password combination.");
			}	
		}
	}
	
	//for account recovery
	if(isset($_POST['recovery'])){
		$pass = mysqli_real_escape_string($db,$_POST['pass']);
		$repass = mysqli_real_escape_string($db,$_POST['repass']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		
		//if both password not match	
		if($pass != $repass){
			array_push($error,"Error: The two passwords do not match!");
			header('location:account-recovery.php');
		}	
			
		if(count($error==0)){
			$password = md5($pass); //to encrypt the pw before store to database
			
			//update the old password to new password 
			$query = "UPDATE user SET password='$password' WHERE email = '$email' ";
			
			if(mysqli_query($db,$query)){
				header('location:login-florist.php'); //redirect user 
			}
			else{
				array_push($error,"Error: Unable to recover. Please refresh.");
				
			}
			
		}
	}
	
	//logout
	if(isset($_GET['logout'])){
		session_destroy(); //end the session
		unset($_SESSION['username']);
		header('location:login-florist.php'); //redirect user back to login page
	}	
	
?>