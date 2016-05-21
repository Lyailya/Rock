<?php 
  session_start();
  require_once("db.php");
  $query = "SELECT * FROM users";
  $res = $con->query($query)
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="hello.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">  
</head>
<body >
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
          <div class="logo"><img src="xo.png" alt="..." style="height:80px; opacity:0.8;"></div>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/classic%20rock/ladmin.php" style="margin-top:25px;">News</a></li>
        <li><a href="http://localhost/classic%20rock/useradmin.php"style="margin-top:25px;">Users</a></li>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" style="margin-top:30px;">
          </div>
          <button type="submit" class="btn btn-default" style="margin-top:30px; margin-right:100px; font-family:"Bauhaus 93">Submit</button>
        </form>
      </ul>
    </div>
  </div>
</nav>
<table class="table table-hover">
<thead>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Delete</th>
  </tr>
</thead>
<tbody>
<?php while($item = $res->fetch_assoc()){
  if ($item['type']!=0){?>
  <tr><td><?=$item['id']?></td><td><?=$item['name']?></td><td><?=$item['email']?></td><td><a href="deleteuser.php?id=<?=$item['id']?>"><button class="btn btn-default">Delete</button></a></td></tr>
<?php }}?>
</tbody>
</table>
</body>
</html>