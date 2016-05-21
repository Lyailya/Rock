<?php 
	require_once("db.php");
	$id = $_GET['id'];
	$query = "DELETE FROM news WHERE ID=".$id;
	$con->query($query);
	header("Location:/classic%20rock/ladmin.php");
?>