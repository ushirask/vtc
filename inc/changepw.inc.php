<?php
	$oldpw="";
	$newpw="";
	$uname="";
	
	$db = mysqli_connect('localhost', 'root', '', 'vtc');

	if(isset($_POST['apply'])) {
      // username and password sent from form

      $oldpw = md5(mysqli_real_escape_string($db,$_POST['oldpw']));
      $newpw = md5(mysqli_real_escape_string($db,$_POST['newpw']));
	  $uname=mysqli_real_escape_string($db,$_POST['uname']);
	  
      $sql = "SELECT indexnumber FROM users WHERE indexnumber = '$uname' AND password = '$oldpw' ";
      $result = mysqli_query($db,$sql);
	  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count==1) {
         $sql1="UPDATE users SET password = '$newpw' WHERE indexnumber='$uname'; ";
		 mysqli_query($db,$sql1);
		 session_start();
		 $_SESSION['error'] = "Password successfully changed";
		 header("location:status.php?pop=yes");
	  }
      else {
		  session_start();
         $_SESSION['error'] ="Your old password was incorrect";
		 header("location:status.php?pop=yes");
      }
   }
?>