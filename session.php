<?php
	$db = mysqli_connect('localhost', 'root', '', 'vtc');
   session_start();

	 if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
