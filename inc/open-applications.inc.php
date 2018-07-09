<?php
   include('sessionPrincipal.inc.php');
	$info=$_GET['info'];
	if($info==='opened' or $info=='closed'){
		$sql1="UPDATE metadata SET info = '$info' WHERE name='applications';";
		mysqli_query($db,$sql1);
		 $_SESSION['error'] ='Applications are '.$info;
		 header("location:/vtc/status.html?pop=yes");
	}else{
		$_SESSION['error'] ="Unknown command sent. Please open/close applications from profile";
		 header("location:/vtc/status.html?pop=yes");
	}
?>