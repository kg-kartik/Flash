

<?php
session_start();
 if ($_SESSION['username'])
 echo("hi" .$_SESSION['username']);

if ($_SESSION['userid'])
 echo ("\nyour uid is: ".$_SESSION['userid']);

if ($_SESSION['crntques'])
 echo ("\nyour current level id: ". $_SESSION['crntques']);

else
    die("Please login to access");


 ?>

<!DOCTYPE html>
<html>
<head>
<title>Hi!!  <?php
if ($_SESSION['crntlvlid'])
 echo ($_SESSION['crntlvlid']);?></title>
</head>
</html>




