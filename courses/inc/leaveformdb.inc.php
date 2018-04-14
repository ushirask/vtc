<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'vtc');
$indexnumber=$_SESSION['login_user'];
$course=mysqli_real_escape_string($conn,$_POST['course']);
$moduleCode=mysqli_real_escape_string($conn,$_POST['moduleCode']);
$num=mysqli_real_escape_string($conn,$_POST['number']);
$dfrom=mysqli_real_escape_string($conn,$_POST['from']);
$dto=mysqli_real_escape_string($conn,$_POST['to']);
$reason=mysqli_real_escape_string($conn,$_POST['reason']);

if(isset($_POST['submit'])){
	$sql="INSERT INTO student_leave (indexnumber,course,moduleCode,num,dfrom, dto, reason) VALUES ('$indexnumber', '$course', '$moduleCode', '$num', '$dfrom', '$dto', '$reason');";
	mysqli_query($conn, $sql);
	header("Location: ../profile.php?successfull");
}