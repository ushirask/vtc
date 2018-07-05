<?php
   include('session.inc.php');

   $myusername = $_SESSION['login_user'];
   $usertype = $myusername[0];
   if($usertype === "L" ){
				 header("location:lecturer-profile.php");
	 }else if($usertype === "A" ){
				 header("location:sectionalHead-profile.php");
	 }else if($usertype === "P" ){
				 header("location:principal-profile.php");
   }else{
				header("location:profile.php");
   }
?>
