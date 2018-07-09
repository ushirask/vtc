<?php
   include('session.inc.php');

   $myusername = $_SESSION['login_user'];
   $usertype = $myusername[0];
   if($usertype !== "L" ){
					 header("location:login-page.html");
	}
?>
