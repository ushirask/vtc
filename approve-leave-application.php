<?php
   include('session.php');

   $myusername = $_SESSION['login_user'];
   $usertype = $myusername[0];
   if($usertype === "S" ){
     header("location:profile.php");
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
    <?php $stuid=$_GET['sid'];?>
		  <div class="container">
		  	<?php include('inc/connectdb.inc.php');?>
			<div class="clearfix">
				<form style="border:1px solid #ccc" method ='POST' action="inc/approveleavelecturer.inc.php?stuid=<?php echo $stuid;?> ">
				<label for="course"><b>Course Name</b></label><br>
				<input type="text" value= "<?php echo $course; ?> " readonly><br>

				<label for="number"><b>Number of Days</b></label><br><br>
				<input type="number" value="<?php echo $num; ?>" readonly><br><br>

				<label for="from"><b>Period of leave<br><t>  From</b></label><br>
				<input type="date" value="<?php echo $dfrom ; ?>" name="from" min="2015-01-01" max="2035-12-31" readonly><br>

				<label for="to"><b><t>  To</b></label><br>
				<input type="date" value="<?php echo $dto; ?>" name="to" min="2015-01-01" max="2035-12-31" ><br><br>

				<label for="reason"><b>Reason</b></label><br>
				<input type="text" value="<?php echo $reason; ?>" readonly><br>
			  <button name= "approve" type="submit" class="signupbtn" name="apply" >Approve</button><br>
			  <button name= "reject" type="submit" class="signupbtn" name="apply" >Reject</button>
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