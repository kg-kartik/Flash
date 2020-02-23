<?php
session_start();
if (isset($_SESSION['userid']))

     {

        header("location:http://localhost/negedev/crackit/dashboard.php");

        exit;

     }
?>

<!DOCTYPE html>
<html>


<head>
	<title>Cybermatix</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"> -->
	// <script type="text/javascript" src="assets/scripts/jquery.js"></script>
	// <script type="text/javascript" src="assets/scripts/script.js"></script>
	<meta charset='utf-8' />
</head>
<body> 
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Cybermatix</a>
        </div>
        <div class="collapse navbar-collapse">
             <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            <li class="active"><a href="login.php">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	

	<div class="content">
			<div class="loginbox" style="width:400px;">
				<div class="error-login"><center>Error!</center></div>
				<div class="success-login"><center>Login Successful! Redirecting...</center></div>
					<br />
					<center><div ><h1>Login</h1></div></center>
					<center>
					<br />
					<form  action = "<?php echo $_SERVER['PHP_SELF']; ?>" name="login" class="login" method="POST">
					<input type="text" name="email" class="form-control" placeholder="Email"/><br />
					<input type="password" name="password" class="form-control" placeholder="Password"/><br /><br />
					<input type="submit" name="submit" class="btn btn-default btn-lg" value="Login!"/>
					</form>
					<br />
					</center>
			</div>
	</div>

<!-- <script src="assets/plugins/jquery.backstretch.min.js"></script> -->
<script src="assets/scripts/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="assets/scripts/jquery.js"></script>
<!-- <script src="assets/scripts/privilages.js" ></script> -->
<!-- <script type="text/javascript" src="assets/scripts/bootstrap.min.js"></script> -->
</body>

</html>