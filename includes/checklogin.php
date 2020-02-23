 <?php
session_start();

 $email = $_POST['email'];
 $password = $_POST['password'];

 if ($email&&$password) {
 	$connect = mysql_connect("localhost","root","") or die("Hey Sorry try later we are unable to connec our trunk");
 	mysql_select_db("crackit") or die("Try later budy it our thesaurus is under maintainence by Negedevs");
 	$query = mysql_query("SELECT * FROM users WHERE email='$email'");
 	$numrows = mysql_num_rows($query);

 	/*echo "$numrows";*/

 	 if ($numrows!=0) { 

            //fetch credentials
 	   	    while ($row = mysql_fetch_assoc($query)) { 
 	   		$dbemail = $row['email'];
 	   		$dbpassword = $row['password'];
 	   		$dbusername = $row['username'];
               $dbuserid = $row['user_id'];
               $dbcrntlvlid = $row['crnt_lvlid'];
     	    }

     	//login check
     	if ($email==$dbemail && $password==$dbpassword) {
     		// if u are here ur  login is successful
     		
               
               $_SESSION['username']=$dbusername;
               $_SESSION['userid']=$dbuserid;
               $_SESSION['crntlvlid']=$dbcrntlvlid;

               $quer2 = mysql_query("SELECT * FROM quesans WHERE lvlid= '$dbcrntlvlid'");

               while ($row = mysql_fetch_assoc($quer2)){

                    $dbcrntques = $row['question'];
                    $dbcrnthint = $row['hint'];
                    $dbcrntsrchint = $row['srchint'];
                    }
               $_SESSION['crntques']=$dbcrntques;
               $_SESSION['crnthint']=$dbcrnthint;
               $_SESSION['crntsrchint']=$dbcrntsrchint;

               echo 1;

               
     	}else{ //worg password error
     		echo 0 ;
                
     	}

 	   }else{ //email error
 	   	die(2);
 	   }
     

 	}
 else 
 	die("budy enter something we cant guess your precious credntials");

 ?>