<?php 
	require_once("db.php");
	$id = $_GET['id'];
	$query = "DELETE FROM users WHERE id=".$id;
	$con->query($query);
	header("Location:/classic%20rock/useradmin.php");
?>