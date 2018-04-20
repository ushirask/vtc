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
	$course=$application['course'];
	$moduleCode=$application['moduleCode'];
	$num=$application['num'];
	$dfrom=$application['dfrom'];
	$dto=$application['dto'];
	$reason=$application['reason'] ;

}