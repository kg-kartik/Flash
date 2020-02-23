
<?php
session_start();
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
         // echo $row['first_name'] . "\t" . $row['crnt_lvlid'] . "\n"; // And output them
    echo "<table >";    
    echo"<tr>";
					    echo"<td>$i<td>";
					    echo"<td>$row[user_id]<br></td>";
					    echo"<td>$row[first_name]<br></td>";
					    echo"<td>$row[first_name]<br></td>";
					    echo"<td>$row[school]</td>";
					    echo"</tr>"; // And output them
    echo "</table>";
    }
 
?>
    
    
 
