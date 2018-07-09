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
			<label for="course"><b>Course Name</b></label><br><br>
			<?php
			session_start();
			$user=$_SESSION['login_user'];
			$conn = mysqli_connect('localhost', 'root', '', 'vtc');
			$sql1="SELECT courseid from student_courses where studentid='$user';";
            $result1=mysqli_query($conn,$sql1);
            while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
              $course_id=$row1['courseid'];
              $sql2="SELECT * from courses where courseID='$course_id';";
              $result2=mysqli_query($conn,$sql2);
              while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                $course_name=$row2['name'];
                echo"$course_name<input type=\"radio\" name=\"course\" value=\"$course_name\" checked> <br><br>";
               }
            }
			?>
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