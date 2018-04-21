<?php
session_start();
//$id is the id of the lecturer. user name of the lecturer
$id=7654321; 
$conn=mysqli_connect('localhost','root', '', 'vtc');
$sql="SELECT * FROM modules where id='$id';";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

$conn1=mysqli_connect('localhost','root','','vtc');
$moduleIDarray=array();
while($row=mysqli_fetch_assoc($result)){ 
	$moduleIDarray[]=$row;
}
foreach($moduleIDarray as $moduleid){
	$x=$moduleid['moduleCode'];
	echo $x;
	$sql1="SELECT indexnumber FROM student_leave where moduleCode='$x' && lecturerApproval='awaiting';";
	$result1=mysqli_query($conn1,$sql1);
	$studentIDarray=array();
	while($row1=mysqli_fetch_assoc($result1)){ 
	$studentIDarray[]=$row1;
	}
	foreach($studentIDarray as $studentid){
		$y=$studentid['indexnumber'];
		echo "<li><a href=\"approve-leave-application.php?sid=$y\">$y</a></li>";
	}
}
	



