<?php
   include('inc/sessionLecturer.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Courses</title>
<?php include('inc/header.inc.php');
?>
<link rel="stylesheet" type="text/css" href="../css/courses.css">
<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2></h2>
            </div>
            <div class="wrapper pad_bot1">
              <div class=\"container\">
                <br>
              <ul class="list1">
                <?php
                $courseId=$_GET['courseId'];
                 echo "<li><a href=\"createAssignment.php?courseId=$courseId\">Add Assignment</a></li>";
                echo "<li><a href=\"addCourseMaterial.php?courseId=$courseId\">Upload Course Material</a></li>";?>

                <li><a href="#">Create Forum</a></li>
                <li><a href="#">Create Quiz</a></li>
                <li><a href="#">Create Feedback</a></li>

              </ul>
              </div>
            </div>
        </div>
      </div>
    </section>
    <?php include('../inc/footer.inc.php'); ?>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>
