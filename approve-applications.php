<?php
   include('session.php');

   $myusername = $_SESSION['login_user'];
   $usertype = $myusername[0];
   if($usertype !== "P"){
     header("location:login.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Approve Leave Application</title>
<?php include('inc/header.inc.php'); ?>
<div class="body2">
  <div class="main">
    <!-- content -->
    <?php $nic=$_GET['nic'];?>
		  <div class="container">
		  	<?php include('inc/applicationdb.inc.php');?>
			<div class="clearfix">
				<form style="border:1px solid #ccc" method ='POST' action="inc/approveapplications.inc.php?nic=<?php echo $nic;?> ">

				<label for="nic"><b>  NIC Number</b></label><br><br>
				<input type="text" value="<?php echo $nic; ?>" readonly><br><br>
				
				<label for="fname"><b>  First Name</b></label><br><br>
				<input type="text" value="<?php echo $fname; ?>" readonly><br><br>
				
				<label for="lname"><b>  Last Name</b></label><br><br>
				<input type="text" value="<?php echo $lname; ?>" readonly><br><br>
				
				<label for="gender"><b>  Gender</b></label><br><br>
				<input type="text" value="<?php echo $gender; ?>" readonly><br><br>
				
				<label for="dob"><b>  Date of Birth</b></label><br><br>
				<input type="date" value="<?php echo $dob; ?>" readonly><br><br>
				
				<label for="address"><b>  Address</b></label><br><br>
				<input type="text" value="<?php echo $address; ?>" readonly><br><br>
				
				<label for="telephone"><b>  Telephone Number</b></label><br><br>
				<input type="text" value="<?php echo $telephone; ?>" readonly><br><br>
				
				<label for="email"><b>  Email</b></label><br><br>
				<input type="text" value="<?php echo $email; ?>" readonly><br><br>

			  <button name= "approve" type="submit" class="signupbtn" name="apply" >Approve</button>
			  <button name= "reject" type="submit" class="cancelbtn" name="apply" >Reject</button>
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
