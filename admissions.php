<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Apply</title>
<?php include('inc/formdb.php'); ?>
<?php include('inc/header.inc.php'); ?>
<div class="body2">
  <div class="main">
    <!-- content -->
		<form style="border:1px solid #ccc" method ='POST' >
		  <div class="container">
			 <h2 class="pad_bot1">Apply</h2>
			<p>Please fill in this form to apply for the entrance examination.</p>
			<hr>

			<label for="fname"><b>First Name</b></label><br>
			<input type="text" placeholder="Enter First Name" name="fname" required><br>
			
			<label for="lname"><b>Last Name</b></label><br>
			<input type="text" placeholder="Enter Last Name" name="lname" required><br>
			
			<label for="gender"><b>Gender</b></label><br><br>
			Male  <input type="radio" name="gender" value="0" checked> <br>
			Female<input type="radio" name="gender" value="1"> <br><br>
			
			<label for="dob"><b>Date of Birth</b></label><br><br>
			<input type="date" placeholder="Enter Date of Birth" name="dob" min="1975-01-01" max="2005-12-31" required><br><br>
			
			<label for="nic"><b>NIC number</b></label><br>
			<input type="text" placeholder="Enter NIC number" name="nic" required><br>
			
			<label for="address"><b>Address</b></label><br>
			<input type="text" placeholder="Enter Address" name="address" required><br>
			
			<label for="telephone"><b>Phone Number</b></label><br>
			<input type="number" placeholder="Enter Phone Number" name="telephone" required><br>
			
			<label for="email"><b>Email</b></label><br>
			<input type="email" placeholder="Enter Email" name="email" required><br>
			
			<div class="clearfix">
			  <button type="submit" class="signupbtn" name="apply" >Submit Application</button>
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