<?php
$assignId=$_GET['assignId'];
$student_id=$_GET['stuId'];
if(isset($_POST['grade'])){
	$marks=$_POST['marks'];

	$conn=mysqli_connect('localhost','root','','vtc');
	$sql="INSERT INTO student_assignments (graded_status, marks) VALUES (TRUE, '$marks');";
	mysqli_query($conn, $sql);
	$result=mysqli_query($conn,$sql);
	header("Location: ../assignment_view.php?assignId=$assignId");
}