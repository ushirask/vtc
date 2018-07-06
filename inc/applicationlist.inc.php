<?php

$conn=mysqli_connect('localhost','root','','vtc');
$sql="SELECT * FROM applications where status='pending';";

$result=mysqli_query($conn,$sql);
$studentIDarray=array();

while($row = mysqli_fetch_assoc($result)){
	$applications_array[]=$row;
 }

foreach($applications_array as $app){
	$y=$app['nic'];
	echo "<li><a href=\"approve-applications.php?nic=$y\">$y</a></li>";
}
