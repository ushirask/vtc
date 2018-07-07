<?php
$myusername = $_SESSION['login_user'];
$usertype = $myusername[0];
$assignId=$_GET['assignId'];
$student_id=$_GET['stuId'];
$conn=mysqli_connect('localhost','root','','vtc');
$sql="SELECT * FROM student_assignments WHERE assignment_id='$assignId' && student_id='$student_id';";
$result=mysqli_query($conn,$sql);
$assignmentAray=array();
while($row=mysqli_fetch_assoc($result)){
	$assignmentAray[]=$row;
}
$material=$assignmentAray['assignment_material'];