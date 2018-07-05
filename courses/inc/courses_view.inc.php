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
for($i=0; $i<14; $i++){
	echo "<ul>";
	foreach ($courseMaterialArray as $courseMaterial) {
		$week_id=$courseMaterial['week_id'];
		$material=$courseMaterial['material'];
		$materialName=$courseMaterial['material_name'];
		if($week_id=i){
			echo "<li> $material_name</li>";
		}

	}
	echo "</ul>";
}

$sql="SELECT * FROM assignments WHERE course_id='id';";
$result=mysqli_query($conn,$sql);
$assigmentArray=array();
while($row=mysqli_fetch_assoc($result)){
	$assigmentArray[]=$row;
}
for($i=0; $i<14; $i++){
	echo "<ul>";
	foreach ($assigmentArray as $assigment) {
		$week_id=$assigment['week_id'];
		$assigment_name=$assigment['assigment_name'];
		$assignId=$assignments['assignment_id'];
		if($week_id=$i){
			echo "<li><a href=\"assignment_view.php?assignId=$assignId&weekId=$i&courseId=$id\">$assigment_name</a></li>";
		}
	}
	$sql1='SELECT assignment_id FROM assignments WHERE week_id="$i";';
	$result1=mysqli_query($conn, $sql1);
	$resultCheck=mysqli_num_rows($result1);
	if($usertype === "L" ){ 
		echo "<li><a href=\"CreateItems.php?weekId=$i&assignId=$resultCheck&courseId=$id\">Create</a></li>";
	}
	echo "</ul>";
}


?>