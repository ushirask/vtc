
<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Courses</title>
<?php include('../inc/header.inc.php'); 
session_start();?>
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
              
              <?php
                $weekId=$_GET['weekId'];
                $course_id=$_GET['courseId'];
                echo '<form action="inc/uploadCourseMaterial.inc.php?weekId=$weekId&courseId=$course_id" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file">
                  <button type="submit" name="submit">upload</button>
                </form>';
                ?>
            </div>
        </div>
      </div>
    </section>
    <?php include('../inc/footer.inc.php'); ?>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>