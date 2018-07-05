<?php
	$db = mysqli_connect('localhost', 'root', '', 'vtc');
   session_start();

   if(isset($_SESSION['login_user'])){
		 $myusername = $_SESSION['login_user'];
		 $usertype = $myusername[0];
		 if($usertype === "L" ){
					 header("location:lecturer-profile.php");
		 }else if($usertype === "A" ){
					 header("location:sectionalHead-profile.php");
		 }else if($usertype === "P" ){
					 header("location:principal-profile.php");
		 }else{
					header("location:profile.php");
		 }
		}

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['uname']);
      $mypassword = md5(mysqli_real_escape_string($db,$_POST['password']));
			$usertype = $myusername[0];

      $sql = "SELECT indexnumber FROM users WHERE indexnumber = '$myusername' AND password = '$mypassword' UNION SELECT indexnumber FROM lecturers WHERE indexnumber = '$myusername' AND password = '$mypassword' UNION SELECT indexnumber FROM admin WHERE indexnumber = '$myusername' AND password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
				 if($usertype === "L" ){
					 header("location:lecturer-profile.php");
				}else if($usertype === "A" ){
					 header("location:sectionalHead-profile.php");
				}else if($usertype === "P" ){
					 header("location:principal-profile.php");
				}else{
					header("location:profile.php");
		 }
			}
      else {
         $_SESSION['error'] = "Your Index Number or Password is invalid";
		 header("location: status.php?pop=yes");
      }
   }
?>
