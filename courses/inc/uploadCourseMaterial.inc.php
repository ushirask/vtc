<?php
session_start();
if(isset($_POST['submit'])){
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

	$lecturer_id=$_SESSION['login_user'];
	$course_id=$_GET['courseId'];
	
	if($fileError===0){
		if($fileSize<=9000000){
			$fileNameNew=uniqid('',true).".".$fileActualExt;
			$fileDestination='../uploadsCourseMaterial/'.$fileNameNew;
			move_uploaded_file($fileTmpName, $fileDestination);
			$conn=mysqli_connect('localhost','root','','vtc');
			$sql1="INSERT INTO course_material(course_id,  lecturer_id, material_path, material_name) VALUES('$course_id','$lecturer_id','$fileNameNew','$fileName')";
			$result=mysqli_query($conn,$sql1);
			header("Location: ../../profile_courses.php?successfull");
		}else{
			header("Location: ../../profile_courses.php?FileSizeError");
		}

	}else{
		echo "$fileError";
		header("Location: ../../profile_courses.php?error");
	}
}