<?php
   include('inc/sessionLecturer.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Courses</title>
<?php
include('inc/header.inc.php'); 
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
              <h2>Add Course Material</h2>
            </div>
            <div class="wrapper pad_bot1">
              <div class=\"container\">
              <?php
                $course_id=$_GET['courseId'];
                echo " <br> <form  method=\"POST\" action=\"inc/uploadCourseMaterial.inc.php?courseId=$course_id\" enctype=\"multipart/form-data\"><br>
                  <input type=\"file\" name=\"file\"><br>
                  <div class=\"clearfix\">
                  <button type=\"submit\" name=\"submit\" class=\"signupbtn\">upload</button>
                  </div>
                </form>";
                ?>
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
