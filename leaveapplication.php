<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Apply For Leave</title>
<?php include('inc/header.inc.php'); ?>
<div class="body2">
  <div class="main">
    <!-- content -->
		<form style="border:1px solid #ccc" method ='POST' action="inc/leaveformdb.inc.php">
		  <div class="container">
			 <h2 class="pad_bot1">Apply For Leave </h2>
			<p>Please fill in this form to apply for leave</p>
			<hr>
			<label for="course"><b>Course Name</b></label><br>
			<input type="text" placeholder="Enter Course Name" name="course" required><br>

			<label for="moduleCode"><b>Module Code</b></label><br>
			<input type="text" placeholder="Enter Module Code" name="moduleCode" required><br>
			
			<label for="number"><b>Number of Days</b></label><br><br>
			<input type="number" placeholder="Enter Number of days" name="number" required><br><br>
			
			<label for="from"><b>Period of leave<br><t>  From</b></label><br>
			<input type="date" placeholder="Enter Starting Date of Period of Leave" name="from" min="2015-01-01" max="2035-12-31" required><br>

			<label for="to"><b><t>  To</b></label><br>
			<input type="date" placeholder="Enter Ending Date of Period of Leave" name="to" min="2015-01-01" max="2035-12-31" ><br><br>

			<label for="reason"><b>Reason</b></label><br>
			<input type="text" placeholder="Enter Reason" name="reason" required><br>

			<div class="clearfix">
			  <button name= "submit" type="submit" class="signupbtn" name="apply" >Submit Application</button>
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