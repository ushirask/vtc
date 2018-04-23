<?php 
$conn=mysqli_connect('localhost','root','','lecturer');
$lecid=$_GET['lid'];
$sql="SELECT * FROM lecturer_leave WHERE id ='$lecid';";
$result=mysqli_query($conn,$sql);
$applicationArray=array();
while($row=mysqli_fetch_assoc($result)){
	$applicationArray[]=$row;
}
foreach ($applicationArray as $application) {
	$lecid=$application['id'];
	$num=$application['num'];
	$dfrom=$application['dfrom'];
	$dto=$application['dto'];
	$reason=$application['reason'] ;
}
