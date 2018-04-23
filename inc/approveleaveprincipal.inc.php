<?php 
$conn=mysqli_connect('localhost','root','','lecturer');
$lecid=$_GET['lecid'];
if (isset($_POST['approve'])) {
	$data="Approved";
	$sql1="UPDATE lecturer_leave SET principalApproval = '$data' WHERE id='$lecid';";
	mysqli_query($conn,$sql1);
	header("Location: ../lecturer-leave-application-list.php?approved");
}else if(isset($_POST['reject'])){
	$data="Rejected";
	$sql1="UPDATE lecturer_leave SET principalApproval = '$data' WHERE id='$lecid';";
	mysqli_query($conn,$sql1);
	header("Location: ../lecturer-leave-application-list.php?rejected");
}