<?php
if(isset($_POST['submit'])){
	session_start();
	$conn=mysqli_connect('localhost','root','','vtc');
	$sql="SELECT * FROM student_assignments WHERE assignment_id='$assignId' && student_id='$myusername';";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);

	$file=$_FILES['file'];
	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];
	$fileExtension=explode('.',$fileName);
	$fileActualExt=strtolower(end($fileExtension));
	$file=file_get_contents($fileTmpName);
	$file=base64_encode($file);

	$assignId=$_GET['assignId'];
	$weekId=$_GET['weekId'];
	$student_id=$_SESSION['login_user'];
	$course_id=$_GET['courseId'];

	$sql="SELECT * FROM assignments WHERE assignment_id='$assignId';";
	$result=mysqli_query($conn,$sql);
	$assignments=array();
	while($row=mysqli_fetch_assoc($result)){
		$assignments[]=$row;
	}
	if($assignments['type']=='all'){
		$allowedExtension=array('jpg','jpeg','');
	}
	if($fileError===0){
		if($fileSize<=30000000){
			$fileNameNew=uniqid('',true).".".$fileActualExt;
			$fileDestination='../uploads/'.$fileNameNew;
			move_uploaded_file($fileTmpName, $fileDestination);
			if($resultCheck==0){
				$sql1="INSERT INTO student_assignments(student_id, course_id, assignment_id, assignment_name, week_id,assignment_path) VALUES('$student_id','$course_id','$assignId','$fileName','$weekId','$fileNameNew');";
				$result=mysqli_query($conn,$sql1);
			}else if($resultCheck >0){
				$sql2="UPDATE student_assignments SET assignment_name='$fileName', assignment_path='$fileNameNew' where assignment_id='$assignId' && student_id='$student_id';";
				$result=mysqli_query($conn,$sql2);
			}
			header("Location: ../profile_courses.php?successfull");
		}else{
			header("Location: ../profile_courses.php?FileSizeError");
		}

	}else{
		header("Location: ../profile_courses.php?error");
	}
}
?>