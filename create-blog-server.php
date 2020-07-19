<?php

	//connect the database
	$db = mysqli_connect('localhost','root','','florist_blog');
	$problem = FALSE;
	$notice = array();
	$error = array();

	//create post
	if(isset($_POST['blog-submit'])){
		$title = mysqli_real_escape_string($db,$_POST['blog-title']);
		$summary = mysqli_real_escape_string($db,$_POST['blog-summary']);
		$content = mysqli_real_escape_string($db,nl2br($_POST['blog-content']));
		
		$author = $_SESSION['username'];
		
		//for passing the image
		$fileName = $_FILES["blog-img"]["name"];
		$fileExt = explode('.',$fileName); //capture the file extension
		$fileActualExt = strtolower(end($fileExt)); //convert file extension to lowercase
		
		$allowTypes = array('jpg','png','jpeg'); //only allow these few file types
		
		//get system date
		$date = date('Y-m-d');
		
		//if file types is matched
		if(in_array($fileActualExt,$allowTypes)){
			
			$image = $_FILES['blog-img']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); //pass the image
			
			//Insert all the data into database
			$query = "INSERT INTO blog(title,summary,content,image,date,author) VALUES ('$title','$summary','$content','$imgContent','$date','$author')";
			
			if(mysqli_query($db,$query)){
				array_push($notice,"Successfully saved. Create a new post?");
				
			}
			else{
				array_push($error,"Fail to saved.");
				
			}
		
		}
		else{
			array_push($error,"Sorry, only JPG, JPEG, & PNG files are allowed to upload.");
		}		
	}
	
	//delete post
	if (isset($_GET['delete-topic'])) {
		$topic_id = $_GET['delete-topic'];//get post id
		
		//delete the particular post
		$sql = "DELETE FROM blog WHERE id=$topic_id";
		
		if (mysqli_query($db, $sql)) {
			//$_SESSION["delete-notice"] = "Successfully delete.";
			array_push($notice,"Successfully delete.");
			header("location: delete-post.php"); //back to delete post page
			exit(0);
		}
		
	}
	
	//edit post
	if(isset($_POST['edit-submit'])){
		$id = $_POST['blog-id'];				
		$title = mysqli_real_escape_string($db,$_POST['blog-title']);
		$summary = mysqli_real_escape_string($db,$_POST['blog-summary']);
		$content = mysqli_real_escape_string($db,nl2br($_POST['blog-content']));
		
		$fileName = $_FILES['blog-img']['name'];
		$fileExt = explode('.',$fileName);
		$fileActualExt = strtolower(end($fileExt));
						
		$allowTypes = array('jpg','png','jpeg');
			
		//get system date
		$date = date('Y-m-d');
		
		$image = $_FILES['blog-img']['tmp_name']; 
		
							
		if($image != ""){
			$imgContent = addslashes(file_get_contents($image)); 
			move_uploaded_file("$image","$fileName");//reupload the image
			
			//update all data
			$query = "UPDATE blog SET title='$title', summary='$summary', content='$content' ,image='$imgContent',date='$date' WHERE id='$id'";	
						
			if(mysqli_query($db,$query)){
				//array_push($notice,"Record Modified Successfully");
				$_SESSION["notice"] = "Record Modified Successfully. Update another post?";
				header("Location:edit-post.php");				
			}
			else{
				array_push($error,"Fail to saved.");
			}
		}
		//if image does not change
		else{
			//update all data except image
			$query = "UPDATE blog SET title='$title', summary='$summary', content='$content',date='$date' WHERE id='$id'";	
						
			if(mysqli_query($db,$query)){
				$_SESSION["notice"] = "Record Modified Successfully. Update another post?";
				header("Location:edit-post.php");
			}
			else{
				array_push($error,"Fail to saved.");
			}
		}
			
	}
	

?>