<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Courses</title>
<?php include('../inc/header.inc.php'); 
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
              
              <?php
                include('inc/connectdb.inc.php');
                
                echo "<form method=\"POST\" action=\"inc/gradeAssignment.inc.php?assignId=$assignId&stuId=$student_id&weekId=$weekId&courseId=$courseId\">
                  <a href=\"uploads/$materialPath\">$student_id</a>
                  Marks: <input type=\"int\" name=\"marks\">
                  <button type=\"submit\" name=\"grade\">Grade</button>
                </form>";
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
</html>