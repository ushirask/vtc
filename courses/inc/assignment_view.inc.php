<?php 
$conn=mysqli_connect('localhost','root','','vtc');
$sql="SELECT * FROM student_assignments WHERE assignment_id='$assignId' && student_id='$myusername';";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
$assignmentArray=array();
while($row=mysqli_fetch_assoc($result)){
	$assignmentArray[]=$row;
}

$sql1="SELECT * FROM assignments WHERE assignment_id='$assignId';";
$result1=mysqli_query($conn,$sql1);
$assignments=array();
while($row1=mysqli_fetch_assoc($result1)){
	$assignments[]=$row1;
}
foreach ($assignments as $assignment) {
	$deadline=$assignment['deadline'];
}
if($resultCheck==0){
	echo "<table><tr><td>Submission Status</td><td>\"Not attempted\"</td></tr><tr><td>\"Grading Status\"</td><td>\"Not graded\"</td></tr><tr><td>Due date</td><td>$deadline</td></tr></table>";
	echo "<form action=\"inc/upload.inc.php?assignId=$assignId&weekId=$weekId&courseId=$course_id\" method=\"POST\" enctype=\"multipart/form-data\">
      <input type=\"file\" name=\"file\">
      <button type=\"submit\" name=\"submit\">upload</button>
    </form>";
} 
else if($resultCheck>0){
	foreach ($assignmentArray as $assignment) {
    	if($assignment['graded_status']){
			$gradingStatus="graded";
		}else{
			$gradingStatus="Not graded";
		}
	}

	echo "<table>
	        <tr>
	          <td>Submission Status</td>
	          <td>Submitted for grading</td>
	        </tr>
	        <tr>
	          <td>Grading Status</td>
	          <td>$gradingStatus</td>
	        </tr>
	        <tr>
	          <td>Due date</td>
	          <td>$deadline</td>
	        </tr>
	      </table>";
	echo "<form action=\"inc/upload.inc.php?assignId=$assignId&weekId=$weekId&courseId=$course_id\" method=\"POST\" enctype=\"multipart/form-data\">
	  <input type=\"file\" name=\"file\">
	  <button type=\"submit\" name=\"submit\">Edit submission</button>
	</form>";
}
?>



