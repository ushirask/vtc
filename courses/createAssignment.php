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
              <?php $weekId=$_GET['weekId'];
                $assignId=$_GET['assignId']; 
                
              echo"<form method=\"POST\" action=\"inc/createAssignment.inc.php?weekId=$weekId&assignId=$assignId\">
                Assignment Name: <input type=\"text\" name=\"name\"> <br>
                No of Attachments: <input type=\"text\" name=\"attachment_no\"> <br>
                Max size of Attachment: <input type=\"text\" name=\"attachment_size\"> <br>
                Type of attachment: <input type=\"text\" name=\"attachment_type\"> <br>
                Graded Status: <input type=\"text\" name=\"status\"> <br>
                Deadline: <input type=\"date\" name=\"deadline\"> <br>
                <button type=\"submit\" name=\"create\">Create</button>
              </form><br>";?>
              
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