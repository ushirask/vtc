<?php 
$conn=mysqli_connect('localhost','root','','vtc');
$nic=$_GET['nic'];
$sql="SELECT * FROM applications WHERE nic='$nic';";
$result=mysqli_query($conn,$sql);
$applicationArray=array();
while($row=mysqli_fetch_assoc($result)){
	$applicationArray[]=$row;
}
foreach ($applicationArray as $application) {
	$fname=$application['fname'];
	$lname=$application['lname'];
	$gender=$application['gender'];
	$dob=$application['dob'];
	$address=$application['address'];
	$telephone=$application['telephone'] ;
	$email=$application['email'] ;
}