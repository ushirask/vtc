<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Apply</title>
<?php include('inc/formdb.php'); ?>
<?php include('inc/header.inc.php'); ?>
<div class="body2">
  <div class="main">
    <!-- content -->
		<form style="border:1px solid #ccc" method ='POST'>
		  <div class="container">
			 <h2 class="pad_bot1">Apply</h2>
			<p>Please fill in this form to apply for the entrance examination.</p>
			<hr>

			<label for="fname"><b>First Name</b></label><br>
			<input type="text" placeholder="Enter First Name" name="fname" required><br>
			<label for="lname"><b>Last Name</b></label><br>
			<input type="text" placeholder="Enter Last Name" name="lname" required><br>
			<label for="telephone"><b>Phone Number</b></label><br>
			<input type="phonenumber" placeholder="Enter Phone Number" name="telephone" required><br>
			<label for="email"><b>Email</b></label><br>
			<input type="email" placeholder="Enter Email" name="email" required><br>
			<label for="psw1"><b>Password</b></label><br>
			<input type="password" placeholder="Enter Password" name="psw1" required><br>
			<label for="psw2"><b>Repeat Password</b></label><br>
			<input type="password" placeholder="Repeat Password" name="psw2" required><br> 
			

			
			<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

			<div class="clearfix">
			  <button type="submit" class="signupbtn" name="apply">Submit Application</button>
			</div>
		  </div>
		</form>
		
    <!-- content -->
    <?php include('inc/footer.inc.php'); ?>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>