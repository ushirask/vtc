<?php
   include('session.inc.php');

   $myusername = $_SESSION['login_user'];
   $usertype = $myusername[0];
   if($usertype === "L" ){
				 header("location:lecturer-profile.html");
	 }else if($usertype === "A" ){
				 header("location:sectionalHead-profile.html");
	 }else if($usertype === "P" ){
				 header("location:principal-profile.html");
   }
   
?>
