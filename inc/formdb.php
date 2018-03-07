<?php

	$fname = "";
	$email    = "";
	$lname="";
	$telephone="";
	$psw1="";
	$psw2="";
	$psw="";

	$db = mysqli_connect('localhost', 'root', '', 'vtc');


	if (isset($_POST['apply'])) {

		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname=mysqli_real_escape_string($db,$_POST['lname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$telephone=mysqli_real_escape_string($db,$_POST['telephone']);
		$psw1 = mysqli_real_escape_string($db, $_POST['psw1']);
		$psw2 = mysqli_real_escape_string($db, $_POST['psw2']);
		
		if ($psw1==$psw2){
			$psw = md5($psw);
			$query = "INSERT INTO applicants (fname, lname,  telephone,email, psw)
					  VALUES('$fname','$lname', '$telephone','$email','$psw')";
			mysqli_query($db, $query);
		}else{
			echo "ERROR";
			echo "<script type='text/javascript'>alert('Passwords don't match!')</script>";
		}
	}

?>