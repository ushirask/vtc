<?php
$myusername = $_SESSION['login_user'];
$usertype = $myusername[0];
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','vtc');

$sql="SELECT * FROM courses WHERE courseID ='$id';";
$result=mysqli_query($conn,$sql);

$courseArray=array();
$courseArray=mysqli_fetch_assoc($result);

$courseTitle=$courseArray['name'];

echo "<h2>$courseTitle</h2>";
?>
