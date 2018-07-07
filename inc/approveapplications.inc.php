<?php 
$conn=mysqli_connect('localhost','root','','vtc');
$nic=$_GET['nic'];
if (isset($_POST['approve'])) {
	$data="Approved";
	$sql1="UPDATE applications SET status = '$data' WHERE nic='$nic';";
	mysqli_query($conn,$sql1);
	header("Location: ../application-list.php?approved");
}else if(isset($_POST['reject'])){
	$data="Rejected";
	$sql1="UPDATE applications SET status = '$data' WHERE nic='$nic';";
	mysqli_query($conn,$sql1);
	header("Location: ../application-list.php?rejected");
}