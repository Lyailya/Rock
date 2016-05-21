<?php 
include "db.php";
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$birthday=$_POST['birthday'];
	$email=$_POST['email'];
	$password=(md5($_POST['password']));
	$type=1;
	$res=mysql_query("SELECT * FROM users WHERE email='$email'");
	$myrow=mysql_fetch_array($res);
	if($email==$myrow['email']){
		echo "Sorry but this email already used";
	}else{
		$result=mysql_query("INSERT INTO users VALUES(NULL,'$name','$gender','$birthday','$email','$password','$type')",$db);
	if($result=='TRUE'){ echo "OK";  }else{
		echo mysql_error();
	}
	}
?> 