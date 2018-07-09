<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'vtc');
$indexnumber=$_SESSION['login_user'];
$course=mysqli_real_escape_string($conn,$_POST['course']);
$num=mysqli_real_escape_string($conn,$_POST['number']);
$dfrom=mysqli_real_escape_string($conn,$_POST['from']);
$dto=mysqli_real_escape_string($conn,$_POST['to']);
$reason=mysqli_real_escape_string($conn,$_POST['reason']);
$sectionalHeadApproval="awaiting";

if(isset($_POST['submit'])){
	if($num<=120){
		$date1=date_create($dfrom);
		$date2=date_create($dto);
		$diff=date_diff($date1, $date2);
		$num1=$diff->format("%R%a");
		if($num1==$num){
			$sql="INSERT INTO student_leave (indexnumber,course,num,dfrom, dto, reason, sectionalHeadApproval) VALUES ('$indexnumber', '$course', '$num', '$dfrom', '$dto', '$reason','$sectionalHeadApproval');";
			mysqli_query($conn, $sql);
			header("Location: ../profile.php?successfull");
		}else{
			header("Location: ../profile.php?error");
		}
	}else{
		header("Location: ../profile.php?error");
	}
	
}