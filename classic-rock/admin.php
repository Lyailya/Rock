<?php 
  session_start();
  if(!isset($_SESSION['email']) || $_SESSION['type']!=0){
    header("Location:/classic%20rock/login.php");
  }
  require_once("db.php");
  $query = "SELECT * FROM news";
  $res = $con->query($query)
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="project.css"/>
	<title>Classic rock</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js" ></script>
	<style>
	label:hover, input:hover {font-size: 25px}
	label {
			width: 180px;
			text-align: right-top;
			display: inline-block;
		}
	radio {
			width: auto;
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-default" style="height:100px; background-color:white; border-color:white;">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"Classic rock</a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
				<a href="file:///C:/Users/%D0%9B%D1%8F%D0%B9%D0%BB%D1%8F/Desktop/ivt/bootstrap/project.html"><div class="logo"><img src="xo.png" alt="..." style="height:80px; opacity:0.8;"></div></a>
      </ul>
		</div>
	</div>
	<script src="https://www.cse.ust.hk/~rossiter/dating_web_site.js"></script>
	<body>
		<div class="col-md-1 col-lg-1 col-sm-xs-1" style="height:100%;">
			<div class="login" style="float:left; margin-top:50px; height:400px;">
				<fieldset>
				<br><input type="submit" value="Add Page"><br>
				<br><input type="submit" value="Add Artist"><br>
				<br><input type="submit" value="Add Music"><br>
				<br><input type="submit" value="Add News"><br>
				<br><input type="submit" value="Add History"><br>
				<br><input type="submit" value="Add Album"><br>
				<br><input type="submit" value="Add Field"><br>
				<br><input type="submit" value="Add Image"><br>
			</fieldset>
		</div></div>
		<div class="col-md-11 col-lg-11 col-sm-xs-11" style="height:100%">
			<div class="log" style="float:left;margin-top:50px; margin-left:10px; height:300px;">
				<fieldset1>
				<legend>Page</legend>
				<label for="name">Name: </label>
				<input type="text" name="name" placeholder="Name of the page" id="name" required><br>
				<label for="name">Email: </label>
				<input type="text" email="email" placeholder="Your Email" id="email" required><br>
				<label for="name">Password: </label>
				<input type="text" password="password" placeholder="Create a password" id="password" required><br>
				<label for="name">Repeat your password: </label>
				<input type="text" rpassword="rpassword" id="rpassword" required><br>
				<input type="submit" value="Submit">
			</fieldset1>
		</div></div>
</nav>

</body>
</html>
