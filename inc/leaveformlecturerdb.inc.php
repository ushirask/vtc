<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'vtc');
$id=$_SESSION['login_user'];
$num=mysqli_real_escape_string($conn,$_POST['number']);
$dfrom=mysqli_real_escape_string($conn,$_POST['from']);
$dto=mysqli_real_escape_string($conn,$_POST['to']);
$reason=mysqli_real_escape_string($conn,$_POST['reason']);
$principalApproval="awaiting";
if(isset($_POST['submit'])){
	if($num<=300){
		$date1=date_create($dfrom);
		$date2=date_create($dto);
		$diff=date_diff($date1, $date2);
		$num1=$diff->format("%R%a");
		if($num1==$num){
			$sql="INSERT INTO lecturer_leave (id,num,dfrom, dto, reason, principalApproval) VALUES ('$id',  '$num', '$dfrom', '$dto', '$reason','$principalApproval');";
			mysqli_query($conn, $sql);
			header("Location: ../lecturer-profile.html?successfull");
		}else{
			header("Location: ../lecturer-profile.html?error");
		}
	}else{
		header("Location: ../lecturer-profile.html?error");
	}
}