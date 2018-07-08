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
              <br>
              <?php
               $courseId= $_GET['courseId'];
              echo"<form style=\"border:1px solid #ccc\" method=\"POST\" action=\"inc/createAssignment.inc.php?courseId=$courseId\">
                <div class=\"container\">
                <b>Assignment Name: </b> <br>
                <input type=\"text\" name=\"name\"> <br>
                <b>No of Attachments: </b><br>
                <input type=\"text\" name=\"attachment_no\"> <br>
                <b>Max size of Attachment: </b><br>
                <input type=\"text\" name=\"attachment_size\" placeholder=\"Enter size in bytes\" required > <br>
                <b>Deadline:</b> <br>
                <input type=\"date\" name=\"deadline\"> <br>
                <div class=\"clearfix\">
                <button type=\"submit\" name=\"create\" class=\"signupbtn\">Create</button>
                </div>
                </div>
              </form>";?>
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
