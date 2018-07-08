<?php
	include('sessionLecturer.inc.php');
	$studentid=$_GET['studentid'];
	$courseid=$_GET['courseid'];
	$sql1="SELECT * FROM student_courses WHERE studentid=$studentid AND courseid=$courseid;";
	$result1 = mysqli_query($db,$sql1);
	while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
		$s1=$row1['s1'];
		$s2=$row1['s2'];
		$s3=$row1['s3'];
		$s4=$row1['s4'];
		$s5=$row1['s5'];
		$s6=$row1['s6'];

	}	
	
	
	if (isset($_POST['add'])) {
		$sem1=mysqli_real_escape_string($db, $_POST['sem1']);
		$sem2=mysqli_real_escape_string($db, $_POST['sem2']);
		$sem3=mysqli_real_escape_string($db, $_POST['sem3']);
		$sem4=mysqli_real_escape_string($db, $_POST['sem4']);
		$sem5=mysqli_real_escape_string($db, $_POST['sem5']);
		$sem6=mysqli_real_escape_string($db, $_POST['sem6']);
		
		$sql_new="UPDATE student_courses SET s1=$sem1,s2=$sem2,s3=$sem3,s4=$sem4,s5=$sem5,s6=$sem6, WHERE studentid=$studentid AND courseid=$courseid;";
		$result_new = mysqli_query($db,$sql_new);		
	}
?>