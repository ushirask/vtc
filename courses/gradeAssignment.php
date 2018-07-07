<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Courses</title>
<?php include('../inc/header.inc.php'); 
?>
<link rel="stylesheet" type="text/css" href="css/form.css">
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
                
                echo "<form style=\"border:1px solid #ccc\" method=\"POST\" action=\"inc/gradeAssignment.inc.php?assignId=$assignId&stuId=$student_id&courseId=$courseId\">
                  <div class=\"container\">
                    <h2 class=\"pad_bot1\">Grade Assignment</h2>
                  <br>
                  <ul class=\"list1\">
                  <li><a href=\"uploads/$materialPath\">$student_id</a></li><br><br>
                  </ul>
                 <b> Marks:</b> <br>
                 <input type=\"int\" name=\"marks\" class=\"input\" min=\"0\" max=\"100\"> <br><br>
                 <div class=\"clearfix\">
                  <button type=\"submit\" name=\"grade\" class=\"signupbtn\">Grade</button>
                </div>
                </div>
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