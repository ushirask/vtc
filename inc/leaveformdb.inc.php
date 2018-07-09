<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'vtc');
$indexnumber=$_SESSION['login_user'];
$num_days=mysqli_real_escape_string($conn,$_POST['number_of_days']);
$dfrom=mysqli_real_escape_string($conn,$_POST['from']);
$dto=mysqli_real_escape_string($conn,$_POST['to']);
$reason=mysqli_real_escape_string($conn,$_POST['reason']);
$sectionalHeadApproval="awaiting";

if(isset($_POST['submit'])){
	$sql="INSERT INTO student_leave (indexnumber,course,num_days,dfrom, dto, reason, sectionalHeadApproval) VALUES ('$indexnumber', '$course', '$num_days', '$dfrom', '$dto', '$reason','$sectionalHeadApproval');";
	mysqli_query($conn, $sql);
	header("Location: ../profile.html?successfull");
}