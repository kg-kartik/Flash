<?php
session_start();
if (  !$_SESSION['userid'] )

     {

        header("location:http://localhost/negedev/crackit/login.php");

        exit;

     }
$crntuid = mysql_real_escape_string($_SESSION['userid']);
    //You need to fill in this information!
    $db = mysql_connect('localhost', 'root', '') or die('Failed to connect: ' . mysql_error()); 
        mysql_select_db('crackit') or die('Failed to access database');
 
    // $name = mysql_real_escape_string($_GET['name']); 
    
      //Here's our query to grab a rank.
    
      $query = ("SELECT uo.*, ( SELECT COUNT(*) FROM users ui WHERE (ui.crnt_lvlid, -ui.crckstmp) >= (uo.crnt_lvlid, -uo.crckstmp) ) AS rank FROM users uo WHERE user_id = '$crntuid';");
      $result = mysql_query($query) or die('Query failed: ' . mysql_error());
      
      //This is more elaborate than we need, considering we're only grabbing one rank, but you can modify it if needs be.
      $num_results = mysql_num_rows($result);  
      
      for($i = 0; $i < $num_results; $i++)
      {
           $row = mysql_fetch_array($result);
           // echo $row['rank'];
           $_SESSION['myrank']=$row['rank'];
           // echo ($_SESSION['myrank']);
      }     
?>

<!DOCTYPE html>
<html>
<head>
	<title>CyberBorn v1.0</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 	<meta charset='utf-8' />
  <script type="text/javascript" scr="js/script.js"></script>
</head>
<body>
	<!-- loader -->
   <div id = "load_screen"><div id = "loading"><img src="img/loader.gif"></div></div>
  <!-- loader ends -->
  <!-- header -->
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Cyberborn v1.0</a>
        </div>
        <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav pull-right ">
            <li class="logout"><a href="includes/logout.php">Logout</a></li>
              </ul>
             <p class="navbar-text pull-right"> 
                  <?php if ($_SESSION['username']) echo "Logged in as "; echo($_SESSION['username']);?>
           </p>
            <p class="navbar-text pull-right ">
                 <?php if ($_SESSION['crntlvlid']) echo "Your Current Level: "; echo ($_SESSION['crntlvlid']);?>
            </p> 
            <p class="navbar-text pull-right ">
                 <?php if ($_SESSION['myrank']) echo "Your Rank: "; echo ($_SESSION['myrank']);?>
            </p> 
            <ul class="nav navbar-nav">
              <li class="active"><a href="dashboard.php">Dashboard</a></li>
              <li><a href="rules.php">Rules</a></li>
              <li><a href="play.php">Play</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!-- header ends -->
    	<div class="content"><div class="infocontainer">
      <br />
      <center><h2 class="center large">Dashboard</h2></center>
      <br />





     </div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/privilages.js" ></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

  
