<?php 
if(isset($_POST['create'])){
$conn=mysqli_connect('localhost','root','','vtc');
$assignmentName=mysqli_real_escape_string($conn,$_POST['name']);
$number=mysqli_real_escape_string($conn,$_POST['attachment_no']);
$maxSize=mysqli_real_escape_string($conn,$_POST['attachment_size']);
$type=mysqli_real_escape_string($conn,$_POST['attachment_type']);
$gradedStatus=mysqli_real_escape_string($conn,$_POST['status']);
$deadline=mysqli_real_escape_string($conn,$_POST['deadline']);
$lecturerId=$_SESSION['login_user'];
$assignmentId=$__GET['assignId'];
$weekId=$_GET['weekId'];
$conn=mysqli_connect('localhost','root','','vtc');
$sql="INSERT INTO assignments (assignment_id, week_id, lecture_id,name,attachment_no,attachment_size, attachment_type, status, deadline) VALUES ('$assignId', '$weekId',$assignmentName',  '$number', '$maxSize', '$type', '$gradedStatus','$deadline');";
mysqli_query($conn, $sql);
$result=mysqli_query($conn,$sql);
header("Location: ../../lecturer-profile.php?successfull");
}