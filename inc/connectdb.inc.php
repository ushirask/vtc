<?php 
$conn=mysqli_connect('localhost','root','','vtc');
$sid=$_GET['sid'];
$sql="SELECT * FROM student_leave WHERE indexnumber='$sid';";
$result=mysqli_query($conn,$sql);
$applicationArray=array();
while($row=mysqli_fetch_assoc($result)){
	$applicationArray[]=$row;
}
foreach ($applicationArray as $application) {
	$stuid=$application['indexnumber'];
	$num=$application['num_days'];
	$dfrom=$application['dfrom'];
	$dto=$application['dto'];
	$reason=$application['reason'] ;

}