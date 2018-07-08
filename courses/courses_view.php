<?php
   include('../inc/sessionStudent.inc.php');
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
              <?php
                $id=$_GET['id'];
                include('inc/course_title_view.inc.php');
              ?>
            </div>
            <div class="wrapper pad_bot1">
              <div class="container"></div>
                <?php
                  $id=$_GET['id'];
                  include('inc/courses_view.inc.php');
                ?>

              </table>

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
