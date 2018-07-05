<?php
$conn=mysqli_connect('localhost','root','','vtc');
$sql="SELECT * FROM student_assignments WHERE assignment_id='$assignId';";
$result=mysqli_query($conn,$sql);
$assignments=array();
while($row=mysqli_fetch_assoc($result)){
	$assignments[]=$row;
}

echo "<ul>";
	foreach ($assignments as $assignment) {
		$student_id=$assignment['student_id'];
		echo "<li><a href=\"gradeAssignment.php?stuId=$student_id&assignId=$assignId&weekId=$weekId&courseId=$course_id\">$student_id</a></li>";
	}
echo "</ul>";