<?php

	$fname = "";
	$email    = "";
	$lname="";
	$telephone="";
	$nic="";
	$address="";
	$date="";
	$dob="";
	$gender="";
	$var="";

	$db = mysqli_connect('localhost', 'root', '', 'vtc');


	if (isset($_POST['apply'])) {

		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname=mysqli_real_escape_string($db,$_POST['lname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$telephone=mysqli_real_escape_string($db,$_POST['telephone']);
		$nic = mysqli_real_escape_string($db, $_POST['nic']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$dob = mysqli_real_escape_string($db, $_POST['dob']);
		$gender=mysqli_real_escape_string($db, $_POST['gender']);
		$query = "INSERT INTO applications (fname, lname,  telephone,email, nic,address,dob,gender)
					  VALUES('$fname','$lname', '$telephone','$email', '$nic','$address','$dob','$gender')";
		$var=mysqli_query($db, $query);
		session_start();
		if($var){
		$_SESSION['error']="You have successfully submitted your application";
		header("location: status.php?pop=yes");	
		}else{
		$_SESSION['error']="There was an error in submitting your application, please use an unique NIC number and an email address.";
		header("location: status.php?pop=yes");	
		}}
?>