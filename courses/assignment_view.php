<?php
   include('inc/sessionStudent.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Courses</title>
<?php include('inc/header.inc.php');
?>
<link rel="stylesheet" type="text/css" href="css/courses.css">
<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2>Submission View</h2>
            </div>
            <div class="wrapper pad_bot1">
              <?php
                $myusername = $_SESSION['login_user'];
                $userType = $myusername[0];
                $assignId=$_GET['assignId'];
                $course_id=$_GET['courseId'];
                include('inc/assignment_view.inc.php');
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
