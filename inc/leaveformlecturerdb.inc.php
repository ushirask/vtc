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
	$sql="INSERT INTO lecturer_leave (id,num,dfrom, dto, reason, principalApproval) VALUES ('$id',  '$num', '$dfrom', '$dto', '$reason','$principalApproval');";
	mysqli_query($conn, $sql);
	header("Location: ../lecturer-profile.php?successfull");
}