<?php
session_start();
if (  $_SESSION['userid'] )

     {

        header("location:http://localhost/negedev/crackit/dashboard.php");

        exit;

     }
header("location:http://localhost/negedev/crackit/lander.html");

?>
<!DOCTYPE html>
<html>

<head>
	<title>CyberBorn v1.0</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"> -->
	
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
          <a class="navbar-brand" href="#">Cyberborn v1.1</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div class="content">
    <div class="infocontainer">
      <!-- Content Goes here -->
    </div>
  </div>
	



<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/privilages.js" ></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

