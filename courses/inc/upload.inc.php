<?php
if(isset($_POST['submit'])){
	session_start();
	$conn=mysqli_connect('localhost','root','','vtc');
	$sql="SELECT * FROM student_assignments WHERE assignment_id='$assignId' && student_id='$myusername';";
	$result=mysqli_query($conn,$sql);
	$assignmentsArray=array();
	
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
	$student_id=$_SESSION['login_user'];
	$course_id=$_GET['courseId'];

	$sql1="SELECT * FROM assignments WHERE assignment_id='$assignId';";
	$result1=mysqli_query($conn,$sql);
	$assignments=array();
	while($row1=mysqli_fetch_assoc($result1)){
		$assignments[]=$row1;
	}
	
	if($fileError===0){
		if($fileSize<=30000000){
			$fileNameNew=uniqid('',true).".".$fileActualExt;
			$fileDestination='../uploads/'.$fileNameNew;
			move_uploaded_file($fileTmpName, $fileDestination);
			if($resultCheck==0){
				$sql2="INSERT INTO student_assignments(student_id, course_id, assignment_id, assignment_name, assignment_path) VALUES('$student_id','$course_id','$assignId','$fileName','$fileNameNew');";
				mysqli_query($conn,$sql2);
			}else if($resultCheck >0){
				while($row=mysqli_fetch_assoc($result)){
					$assignmentsArray[]=$row;
				}
				foreach ($assignmentsArray as $assign) {
					$entry=$assign['entry'];
				}
				$sql3="UPDATE student_assignments SET assignment_name='$fileName', assignment_path='$fileNameNew' where entry='$entry';";
				mysqli_query($conn,$sql3);
			}
			header("Location: ../../profile_courses.php?successfull");
		}else{
			header("Location: ../../profile_courses.php?FileSizeError");
		}

	}else{
		header("Location: ../../profile_courses.php?error");
	}
}