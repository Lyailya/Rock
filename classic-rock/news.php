<?php  
	require_once("db.php");
	$query = "SELECT * FROM news";
	$res = $con->query($query)
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="project.css"/>
	<title>Classic rock</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js" ></script>
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
					<a href="#"><div class="logo"><img src="xo.png" alt="..." style="height:80px; opacity:0.8;"></div></a>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown" style="margin-top:25px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: Bauhaus 93;">Music <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://localhost/classic%20rock/news.php">News</a></li>
            <li><a href="http://localhost/classic%20rock/artists.php">Artists</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="http://localhost/classic%20rock/history.php">Rock History</a></li>
          </ul>
        </li>
				  <li><a href="http://localhost/classic%20rock/profile.php" style="margin-top:25px;">Profile</a></li>
					<li><a href="http://localhost/classic%20rock/project.php" style="margin-top:25px;">Log out</a></li>

				<form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search" style="margin-top:30px;">
	        </div>
	        <button type="submit" class="btn btn-default" style="margin-top:30px; margin-right:100px;">Submit</button>
	      </form>
      </ul>
    </div>
  </div>

	<div class="col-md-6 col-lg-6 col-sm-xs-6">
		<div class="slide">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height: 480px;width:640px;margin-left:-0px;" >
			<!— Indicators —>
			<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!— Wrapper for slides —>
			<div class="carousel-inner" role="listbox" >
			<div class="item active" >
			<img src="guitar.jpg" alt="..." style="height:480px; width:640px;">
			<div class="carousel-caption" >

			</div>
			</div>
			<div class="item">
			<img src="drum.jpg" alt="..." style="height: 480px;width:640px; ">
			<div class="carousel-caption">

			</div>
			</div>
			<div class="item">
			<img src="gunsy.jpg" alt="..." style="height: 480px; width:640px; ">
			<div class="carousel-caption">

			</div>
			</div>

			</div>

			<!— Controls —>
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" >
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
			</div>
	</div>
</nav>
<?php while($item = $res->fetch_assoc()){?>
	  <div class="col-sm-6 col-md-4" style="display:inline-block; height:500px; width:550px;">
	      <img src="image/<?=$item['img']?>" alt="..." style="500px;">
	        <p><?=$item['text'];?></p>	      </div>
<?php } ?>


</body>
</html>
