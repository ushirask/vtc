<?php
$conn=mysqli_connect('localhost','root','','vtc');
$sql="SELECT * FROM lecturer_leave where principalApproval='awaiting';";
$result=mysqli_query($conn,$sql);
$lecturerIDarray=array();
while($row=mysqli_fetch_assoc($result)){
$lecturerIDarray[]=$row;
}
foreach($lecturerIDarray as $lecturerid){
	$y=$lecturerid['id'];
	echo "<li><a href=\"approve-lecturer-leave-application.html?lid=$y\">$y</a></li>";
}
