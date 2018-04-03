<?php
	$db = mysqli_connect('localhost', 'root', '', 'vtc');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select indexnumber from users where indexnumber = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['indexnumber'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>