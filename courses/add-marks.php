<!DOCTYPE html>
<html lang="en">
<head>
<title>My Courses</title>
<?php include('inc/header.inc.php');include('inc/sessionLecturer.inc.php'); ?>
<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2>Select Student</h2>
            </div>
            <ul class="list1">
				<?php
          $user=$_SESSION['login_user'];
          $userType = $user[0];
          if($userType=='L'){
			  $course_id=$_GET['courseId'];
				$sql1="SELECT * from student_courses where courseid='$course_id'";
				$result1=mysqli_query($db,$sql1);
				while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
					$studentid=$row1['studentid'];
					echo "<li><a href='add-marks-student.php?courseid=$course_id&studentid=$studentid'> $studentid</a></li>";
				}
           }
          
          else{header("login-page.php");}?>

          </article>
        </div>
      </div>
    </section>
    <!-- content -->
    <?php include('inc/footer.inc.php'); ?>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>
