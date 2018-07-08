<?php
   include('inc/sessionStudent.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>My Courses</title>
<?php include('inc/header.inc.php');
 ?>
<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2>Current Courses</h2>
            </div>
            <ul class="list1">

			<?php
      $user=$_SESSION['login_user'];
      $userType = $user[0];

        $sql1="SELECT courseid from student_courses where studentid='$user';";
        $result1=mysqli_query($db,$sql1);
        while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
          $course_id=$row1['courseid'];
          $sql2="SELECT * from courses where courseID='$course_id';";
          $result2=mysqli_query($db,$sql2);
          while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
            $course_name=$row2['name'];
            echo "<li><a href=\"courses/courses_view.php?id=$course_id\">$course_name</a></li>";
          }
        }
          echo '</ul>';
			  ?>

            <div class="pad_top2"> <a href="inc\logout.inc.php" class="button"><span><span>LOGOUT</span></span></a> </div>
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
