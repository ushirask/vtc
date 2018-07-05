<?php
session_start();
$myusername = $_SESSION['login_user'];
$usertype = $myusername[0];
$assignId=$_GET['assignId'];
$student_id=$_GET['stuId'];
$weekId=$_GET['weekId'];
$courseId=$_GET['courseId'];
$conn=mysqli_connect('localhost','root','','vtc');
$sql="SELECT * FROM student_assignments WHERE assignment_id='$assignId' && student_id='$student_id';";
$result=mysqli_query($conn,$sql);
$assignmentArray=array();
while($row=mysqli_fetch_assoc($result)){
	$assignmentArray[]=$row;
}
foreach ($assignmentArray as $assignment) {
	$materialPath=$assignment['assignment_path'];
}
$material=$assignmentAray['assignment_material'];
?>

