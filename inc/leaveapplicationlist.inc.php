<?php

$conn=mysqli_connect('localhost','root','','vtc');
$sql="SELECT * FROM student_leave where sectionalHeadApproval='awaiting';";

$result=mysqli_query($conn,$sql);
$studentIDarray=array();

while($row=mysqli_fetch_assoc($result)){
$studentIDarray[]=$row;
}

foreach($studentIDarray as $studentid){
	$y=$studentid['indexnumber'];
	echo "<li><a href=\"approve-leave-application.html?sid=$y\">$y</a></li>";
}
