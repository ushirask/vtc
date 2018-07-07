<?php
$myusername = $_SESSION['login_user'];
$usertype = $myusername[0];
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','vtc');
$sql="SELECT * FROM course_material WHERE course_id='$id';";
$result=mysqli_query($conn,$sql);
$courseMaterialArray=array();
while($row=mysqli_fetch_assoc($result)){
	$courseMaterialArray[]=$row;
}

	echo "<ul class=\"list1\">";
	foreach ($courseMaterialArray as $courseMaterial) {
		$materialName=$courseMaterial['material_name'];
		$materialPath=$courseMaterial['material_path'];
		echo "<li> <a href=\"uploadsCourseMaterial/$materialPath\">$materialName</a></li>";

	}


$sql="SELECT * FROM assignments WHERE course_id='$id';";
$result=mysqli_query($conn,$sql);

$assignmentArray=array();
while($row=mysqli_fetch_assoc($result)){
	$assignmentArray[]=$row;
}


	foreach ($assignmentArray as $assignment) {
		$assignment_name=$assignment['name'];
		$assignId=$assignment['assignment_id'];
		echo "<li><a href=\"assignment_view.php?assignId=$assignId&courseId=$id\">$assignment_name</a></li>";
	}	
	
	if($usertype === "L" ){ 
		echo "<li><a href=\"CreateItems.php?courseId=$id\">Create</a></li>";
	}
	echo "</ul>";



?>