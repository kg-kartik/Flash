<?php
session_start();

$answer = $_POST['answer'];
$crntuid = $_SESSION['userid'];
$crntlvlid = $_SESSION['crntlvlid'];
$_SESSION['outbox']="";
date_default_timezone_set("Asia/Kolkata");


 if ($answer!=empty($answer)) {
 	$connect = mysql_connect("localhost","root","") or die("Hey Sorry try later we are unable to connec our trunk");
 	mysql_select_db("crackit") or die("Try later budy it our thesaurus is under maintainence by Negedevs");
 	$query = mysql_query("SELECT * FROM quesans WHERE lvlid='$crntlvlid'");
 	$numrows = mysql_num_rows($query);

 	/*echo "$numrows";*/

 	 if ($numrows!=0) {

            //fetches answer and little info about next question
 	   	           while ($row = mysql_fetch_assoc($query)) { 
 	   		             $dbanswer = $row['answer']; // fecthing answer for current
 	   		             $dbnxttlvlid = $row['nxtlvlid']; // fetching level id of next question
                         }
     	    }

     	//answer check
     	if ($answer==$dbanswer) {
     		// if your answers is correct below codes will execute!!
     		
               $crckstmp = date(" h:i:sa d-m-y");

     		$upquer= mysql_query("UPDATE `crackit`.`users` SET `crnt_lvlid` = '$dbnxttlvlid' WHERE `users`.`user_id` = '$crntuid'");
               $upquer= mysql_query("UPDATE `crackit`.`users` SET `crckstmp` = '$crckstmp' WHERE `users`.`user_id` = '$crntuid'");

               $quer2 = mysql_query("SELECT * FROM quesans WHERE lvlid= '$dbnxttlvlid'");

               while ($rov = mysql_fetch_assoc($quer2)){
                    $dbcrntques = $rov['question'];
                    $dbcrnthint = $rov['hint'];
                    $dbcrntsrchint = $rov['srchint'];
                    $dbcrntlvlid = $rov['lvlid'];
                    }
               $_SESSION['crntques']=$dbcrntques;
               $_SESSION['crnthint']=$dbcrnthint;
               $_SESSION['crntsrchint']=$dbcrntsrchint;
               $_SESSION['crntlvlid']=$dbcrntlvlid;
               $_SESSION['outbox']=" <script type=\"text/javascript\"> window.onload = function(){
      $('#dangerAlert').slideUp();
      $('#successAlert').delay('100').slideDown();
       };
       </script>";

               // echo 1;
               header("location:http://localhost/negedev/crackit/play.php");
               
      }else{ //worg password error
        $_SESSION['outbox']=" <script type=\"text/javascript\"> window.onload = function(){
          $('#successAlert').slideUp();
          $('#dangerAlert').delay('100').slideDown();
       };
       </script>";
        // echo 0 ;
        header("location:http://localhost/negedev/crackit/play.php");
                
      }

     }else{ //email error
      die(2);
     }

?>