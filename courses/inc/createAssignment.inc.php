<?php 
session_start();
if(isset($_POST['create'])){
$conn=mysqli_connect('localhost','root','','vtc');
$assignmentName=mysqli_real_escape_string($conn,$_POST['name']);
$number=mysqli_real_escape_string($conn,$_POST['attachment_no']);
$maxSizeMB=(int)mysqli_real_escape_string($conn,$_POST['attachment_size']);
$deadline=mysqli_real_escape_string($conn,$_POST['deadline']);
$lecturerId=$_SESSION['login_user'];
$courseId=$_GET['courseId'];
$maxSize=$maxSizeMB*1000000 ;
$conn=mysqli_connect('localhost','root','','vtc');
$sql="INSERT INTO assignments(course_id,lecturer_id, name, attachment_no, attachment_size, deadline) VALUES('$courseId','$lecturerId','$assignmentName',  '$number', '$maxSize','$deadline');";
mysqli_query($conn, $sql);
header("Location: ../courses_view.html?id=$courseId");
}