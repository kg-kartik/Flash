<?php
session_start();

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
           <p class="navbar-text pull-right"> 
                  <?php if(isset($_SESSION['username'])){
                    echo "Logged in as "; 
                    echo($_SESSION['username']);
                   }else
                   ?>
           </p>
            <p class="navbar-text pull-right ">
                 <?php if(isset($_SESSION['crntlvlid'])){
                  echo "Your Current Level: "; 
                  echo ($_SESSION['crntlvlid']);
                 }else
                ?>
            </p> 
            <p class="navbar-text pull-right ">
                 <?php if(isset($_SESSION['myrank'])){
                  echo "Your Rank: "; 
                  echo ($_SESSION['myrank']);
                 }else
                 ?>
            </p>  
          <ul class="nav navbar-nav">
            <?php if(isset($_SESSION['username'])){
                      echo "<li><a href=";
                      echo "dashboard.php";
                      echo ">Dashboard</a></li>"; 
                      echo "<li class=";
                      echo "active";
                      echo "><a href=";
                      echo "rules.php";
                      echo ">Rules</a></li>";
                      echo "<li><a href=";
                      echo "play.php";
                      echo ">Play</a></li>";
                   }else{
                      echo "<li><a href=";
                      echo "index.php";
                      echo ">Home</a></li>"; 
                      echo "<li class=";
                      echo "active";
                      echo "><a href=";
                      echo "rules.php";
                      echo ">Rules</a></li>";
                      echo "<li><a href=";
                      echo "Login.php";
                      echo ">Login</a></li>";
                   }
           ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  <div class="content">
    <div class="infocontainer">
      <!-- Content Goes here -->
    </div>
  </div>
<script src="assets/plugins/jquery.backstretch.min.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/privilages.js" ></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

