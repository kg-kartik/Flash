<?php
session_start();
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