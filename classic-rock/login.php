<html>
<head>
	<link rel="stylesheet" type="text/css" href="project.css"/>
	<title>Classic rock</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js" ></script>
	<style>
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
				<a href="file:///C:/Users/%D0%9B%D1%8F%D0%B9%D0%BB%D1%8F/Desktop/classic%20rock/project.html"><div class="logo"><img src="xo.png" alt="..." style="height:80px; opacity:0.8;"></div></a>
      </ul>
		</div>
	</div>
	  <div class="band">
		<div class="col-md-2 col-lg-2 col-sm-xs-2" style="height:100%;">
			<div class="empty1" style="height:100%"; float:left;></div>
		</div>
		<div class="col-md-4 col-lg-4 col-sm-xs-4" style="height:100%;">
			<div class="login" style="float:left; height:100%; margin-top:50px;">
				<fieldset>
					<legend style="font-family: Bauhaus 93; color:purple;">Log in</legend>
					<div class="form-group">
						<label for="name">Email: </label>
						<input type="text" class="form-control" name="email" placeholder="Your Email" id="email1" required><br>
					</div>
					<div class="form-group">
						<label for="name">Password: </label>
						<input type="password" class="form-control" name="password" placeholder="Enter a password" id="password1" required><br>
					</div>
					<div class="error1" style="font-size:20px; color:red;"></div>
					<input type="submit" onClick="login();" style="margin-bottom:30px;" class="btn btn-warning" value="Log in">
				</fieldset>
			</div>
		</div>
		<div class="col-md-4 col-lg-4 col-sm-xs-4" style="height:100%;">
			<div class="log" style="float:left; height:100%; margin-top:50px;">
				<fieldset1>
					<legend>Registration</legend>
					<div class="form-group">
						<label for="name">Name: </label>
						<input type="text" class="form-control" name="name" placeholder="Your full name" id="name" required><br>
					</div>
					<div class="form-group">
						<label for="gender">Gender: </label>
						<input type="radio" name="gender" value="male" id="gender"  required>Male
						<input type="radio" name="gender" value="female" id="gender" required>Female <br>
					</div>
					<div class="form-group">
						<label for="birthday">Date of birth: </label>
						<input type="date" class="form-control" name="birthday" id="birthday"> <br>
					</div>
					<div class="form-group">
						<label for="name">Email: </label>
						<input type="email" class="form-control" name="email" placeholder="Your Email" id="email" required><br>
					</div>
					<div class="form-group">
						<label for="name">Password: </label>
						<input type="password" class="form-control" name="password" placeholder="Create a password" id="password" required><br>
						<label for="name">Repeat your password: </label>
						<input type="password" class="form-control" name="rpassword" placeholder="Re-inter a password" id="rpassword" required><br>
					</div>
					<div class="error" style="font-size:20px; color:red;"></div>
					<input type="button" onClick="register();" style="margin-bottom:30px;" id="regBut" class="btn btn-warning" value="Register">
				</fieldset1>
			</div>
		</div>
		<div class="col-md-2 col-lg-2 col-sm-xs-2" style="">
			<div class="empty2" style="height:100%; float:left;"></div>
		</div>
	</div>
</nav>
</body>
</html>
<script type="text/javascript">
	function register(){
		console.log("HELLO");
		var pass = $('#password').val();
		var rpass = $('#rpassword').val();
		if(pass==rpass){
			var name = $('#name').val();
			var gender = $('input[name=gender]:checked', '.log').val();
			var birthday = $('#birthday').val();
			var email = $('#email').val();
			if(pass==''||rpass==""||name==""||birthday==""||gender==""||email==""){
				$('.error').html("Feel all data needed");
			}else{
				if(!validateEmail(email)){
					$(".error").html("Enter correct email")
				}else{
					if(!checkName(name)){
						$(".error").html("Check your name")
					}else{
						$.ajax({
						  type: 'POST',
						  url: 'register.php',
						  data: 'name='+name+"&gender="+gender+"&birthday="+birthday+"&email="+email+"&password="+pass,
						  success: function(data){
						  	if(data=="OK"){

						  	}else{
						    	$('.error').html(data);
						    }
						  }
						});
					}
				}
			}
		}else{
			$('.error').html("Passwords are not same");
		}
	}
	function login(){
		var pass = $('#password1').val();
		var email = $('#email1').val();
		if(pass==''||email==""){
			$('.error1').html("Feel all data needed");
		}else{
			if(!validateEmail(email)){
				$(".error1").html("Enter correct email")
			}else{	
				console.log(pass==''||email=="");
				$.ajax({
				  type: 'POST',
				  url: 'test_user.php',
				  data: "&email="+email+"&password="+pass,
				  success: function(data){
				  	console.log(data);
				  	if(data=="user"){
				  		if(data=="user"){
					  		window.location.replace("news.php");
					  	}}else if(data=="admin"){
					  		window.location.replace("ladmin.php")
				  	}
				  	else{
				    	$('.error1').html(data);
				    }
				  }
				});
			}
		}
	}
	function checkName(name){
		return /^[a-zA-Z]+$/.test(name);
	}
	function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
</script>

