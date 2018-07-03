<?php
$conn = mysqli_connect('localhost', 'root', '', 'vtc');
$indexnumber=$_SESSION['login_user'];
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$message=mysqli_real_escape_string($conn,$_POST['message']);

$sql="INSERT INTO contact_us (name, email, message) VALUES ('$name', '$email', '$message');";

$var=mysqli_query($conn, $sql);

session_start();
	if($var){
		$_SESSION['error']="You have successfully submitted your message";
		header("location: ../status.php?pop=yes");	
	}else{
		$_SESSION['error']="There was an error in submitting your message, please try again later.";
		header("location: ../status.php?pop=yes");	
	}
