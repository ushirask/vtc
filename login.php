<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Login</title>
<?php include('inc/header.inc.php'); ?>
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
<div class="body2">
  <div class="main">
    <!-- content -->
	<article class="col1">
		<form style="border:1px solid #ccc" method ='POST' >
		  <div class="container">
			 <h1 class="pad_bot1">Please log in to continue.</h1>
			<hr>
			<input type="text" placeholder="Enter Index Number" name="uname" required>

			<input type="password" placeholder="Enter Password" name="password" required>


			<div class="clearfix">
			  <button type="submit" class="signupbtn" name="login" >Log in</button>
			</div>
		  </div>
		</form>
	</article>
    <!-- content -->
    <?php include('inc/footer.inc.php'); ?>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>
