<?php
   include('session.inc.php');

   $myusername = $_SESSION['login_user'];
   $usertype = $myusername[0];
	if($usertype !== "P" ){
					 header("location:login-page.php");
	}
?>
