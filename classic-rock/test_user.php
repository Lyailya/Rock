<?php 
	include "db.php";
	$email = $_POST["email"];
	$password = md5($_POST["password"]);
	$query = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'";
	$res=mysql_query($query);
	if(mysql_num_rows($res)>0){
		session_start();
		$row=mysql_fetch_array($res);
		$_SESSION["Password"] = $row["password"];
		$_SESSION["Email"] = $row["email"];
		if ($row["type"] ==1){
			echo "user";
		}else{
			echo "admin";
		}
	}else{
		echo "No such user";
	}
 ?>