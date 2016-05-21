<?php 
$db=mysql_connect('localhost','root','');
mysql_select_db('rock',$db);
	$con = new mysqli("localhost","root","","rock");
	if(!$con){
		die($con->error);
	}
 ?>