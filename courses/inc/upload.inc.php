<?php
if(isset($_POST['submit'])){
	$conn=mysqli_connect('localhost','root','','vtc');
	$sql="SELECT * FROM student_assignments WHERE assignment_id='$assignId' && student_id='$userType';";
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
		$allowedExtension=array('jpg','jpeg','')
	}
	if($fileError===0){
		if($fileSize<=$assignments['attachment_size']){
			$fileNameNew=uniqid('',true).".".$fileActualExt;
			$fileDestination='../uploads/'.$fileNameNew;
			move_uploaded_file($fileTmpName, $fileDestination);
			if($resultCheck==0){
				$sql1="INSERT INTO student_assignments (student_id, course_id,assignment_id, assignment_name,week_id, assignment_material,graded_status) values('$student_id','$course_id','$assignId','$fileName','$weekId','$file',FALSE);";
				$result=mysqli_query($conn,$sql1);
			}else if($resultCheck >0){
				$sql1="INSERT INTO student_assignments (assignment_name, assignment_material) values('$fileName','$file') where assignment_id='$assignId' && student_id='$student_id';";
				$result=mysqli_query($conn,$sql1);
			}
			header("Location: ../profile_courses.php?successfull");
		}else{
			header("Location: ../profile_courses.php?FileSizeError");
		}

	}else{
		header("Location: ../profile_courses.php?error");
	}
}