<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'vtc');
$id=$_SESSION['login_user'];
$num=mysqli_real_escape_string($conn,$_POST['number']);
$dfrom=mysqli_real_escape_string($conn,$_POST['from']);
$dto=mysqli_real_escape_string($conn,$_POST['to']);
$reason=mysqli_real_escape_string($conn,$_POST['reason']);

if(isset($_POST['submit'])){
	$sql="INSERT INTO lecturer_leave (id,num,dfrom, dto, reason) VALUES ('$id',  '$num', '$dfrom', '$dto', '$reason');";
	mysqli_query($conn, $sql);
	header("Location: ../teacher-profile.php?successfull");
}