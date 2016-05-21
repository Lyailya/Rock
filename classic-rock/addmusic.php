<?php 
	require_once("db.php");
	$target_dir = "image/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$img = "";
	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
	    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
	    $img = basename( $_FILES["image"]["name"]);
	} else {
	    echo "Sorry, there was an error uploading your file.";
	}
	$text = htmlspecialchars($_POST['text']);	
	session_start();
	$query = "INSERT INTO news VALUES(null,'$img','$text')";
	if($con->query($query)){
			header("Location:/classic%20rock/ladmin.php");
	}else{
		$con->error;
	} 	
?> 