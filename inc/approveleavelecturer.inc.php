<?php 
$conn=mysqli_connect('localhost','root','','vtc');
$stuid=$_GET['stuid'];
if (isset($_POST['approve'])) {
	$data="Approved";
	$sql1="UPDATE student_leave SET sectionalHeadApproval = '$data' WHERE indexnumber='$stuid';";
	mysqli_query($conn,$sql1);
	header("Location: ../leave-application-list.php?approved");
}else if(isset($_POST['reject'])){
	$data="Rejected";
	$sql1="UPDATE student_leave SET sectionalHeadApproval = '$data' WHERE indexnumber='$stuid';";
	mysqli_query($conn,$sql1);
	header("Location: ../leave-application-list.php?rejected");
}