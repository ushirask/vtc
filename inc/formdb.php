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
	
	//Validate NIC
	function is_valid_nic($nic){
		$result = true;
		$slen=strlen($nic);
		if($nic !=””){
			if(($slen <> 10) and ($slen<> 12)){
				$result = false;
			}

			$nic_num = substr($nic,0,-1);
			$nic_let = substr($nic,-1);

			if (!is_numeric ($nic_num)){
				$result =false;
			}
			
			if (($nic_let!="v") and($nic_let!="x") and ($nic_let!="V") and($nic_let!="X")){
				$result =false;
			}
		}else{
			$result=false;
		}
		return $result;
		}

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
		if (is_valid_nic($nic)){
			$var=mysqli_query($db, $query);
			session_start();
			if($var){
				$_SESSION['error']="You have successfully submitted your application";
				header("location: status.php?pop=yes");	
			}else{
				$_SESSION['error']="There was an error in submitting your application, please use an unique NIC number and an email address.";
				header("location: status.php?pop=yes");	
			}
		}else{
			session_start();
			$_SESSION['error']="Please enter a valid NIC number";
			header("location: status.php?pop=yes");	
		}
		
	}
?>