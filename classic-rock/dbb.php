<?php 
	$con = new mysqli("localhost","root","","rock");
	if(!$con){
		die($con->error);
	}
	//$con->set_charset("utf-8");
?>