<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>CyberBorn v1.0</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">	 -->
	<meta charset='utf-8' />
</head>
<body >
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
	            <?php if ($_SESSION['username']) echo "Logged in as "; echo($_SESSION['username']);?>
	         </p>
		      <p class="navbar-text pull-right ">
		           <?php if ($_SESSION['crntlvlid']) echo "Your Current Level: "; echo ($_SESSION['crntlvlid']);?>
		      </p>
		      <p class="navbar-text pull-right ">
               <?php if ($_SESSION['myrank']) echo "Your Rank: "; echo ($_SESSION['myrank']);?>
              </p>  
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<div class="content"><div class="infocontainer">
	<center><h2 class="center large">Leaderboard</h2></center>

			<table class="table table-hover">
		      <thead>
				        <tr>
				          <th>Rank</th>
				          <th>Uid</th>
				          <th>Name</th>
				          <th>School</th>
				          <th>Level</th>
				        </tr>
		      </thead>
		      
		      <tbody>
			        <?php
				$db = mysql_connect("localhost","root","") or die("Hey Sorry try later we are unable to connec our trunk");
				mysql_select_db("crackit") or die('Failed to access database');
				 
				     //This query grabs the top 10 scores, sorting by score and timestamp.
				    $query = "SELECT * FROM users ORDER by crnt_lvlid DESC, crckstmp ASC LIMIT 100";
				    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
				 
				    //We find our number of rows
				    $result_length = mysql_num_rows($result); 
				    
				    //And now iterate through our results
				    for($i = 1; $i <= $result_length; $i++)
				    {
				         $row = mysql_fetch_array($result);  
													                echo"<tr>";
																	    echo"<td><strong>$i<strong></td>";
																	    echo"<td>$row[user_id]</td>";
																	    echo"<td>$row[first_name]</td>";
																	    echo"<td>$row[school]</td>";
																	    echo"<td>$row[crnt_lvlid]</td>";
																    echo"</tr>"; // And output them
				    }
				?>
		      </tbody>
		    </table>
	</div>


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/privilages.js" ></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

