<?php 
  session_start();
  require_once("db.php");
  $query = "SELECT * FROM news";
  $res = $con->query($query)
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <meta charset="utf-8">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-inner">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    


    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="http://localhost/helloworld/myadmin.php" style="color:black;">Home</a></li>
        <li><a href="http://localhost/helloworld/countryadmin.php" style="color:black;">Countries <span class="sr-only">(current)</span></a></li>
        <li><a href="http://localhost/helloworld/postadmin.php" style="color:black;">Posts</a></li>
        <li><a href="http://localhost/helloworld/users.php" style="color:black;">Users</a></li>
      </ul>
     </div> 

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<center><a href="logouthello.php"><button class="btn btn-success">Logout</button></a>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add News</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add News</button>


<div class="result2"></div>
</center>
<table class="table table-bordered">
<thead>
  <tr>
    <th>Id</th>
    <th>Image</th>
    <th>Title</th>
    <th>First Text</th>
    <th>Full Text</th>
    <th>Delete</th>
    <th>Update</th>

  </tr>
</thead>
<tbody>
<?php while($item = $res->fetch_assoc()){
  $a=substr($item['text'],0,100);?>
  <tr><td><?=$item['id']?></td><td><img src="img/<?=$item['img']?>" style="width:100px;"></td><td><?=$item['title']?></td><td><?=$a?></td><td><?=$item['text']?></td><td><a href="mydeletenews.php?id=<?=$item['id']?>"><button class="btn btn-danger">Delete</button></a></td><td><a href="update.php?id=<?=$item['id']?>"><button class="btn btn-success  ">Update</button></a></td></tr>
<?php } ?>
</tbody>
</table>
</body>
</html>
