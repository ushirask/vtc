<?php
   include('inc/sessionLecturer.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center</title>
<?php include('inc/header.inc.php'); ?>
<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="wrapper">
       <div class="pad_top2"> <span><span><h3>Welcome <?php echo $_SESSION['login_user'] ?></h3></span></span></a> </div>
        <div class="pad1 pad_top1">
          <article class="cols marg_right1">
<<<<<<< HEAD
            <figure><a href="profile_courses.php"><img src="images/prof_img1.jpg" alt=""></a></figure>
            <span class="font1"><a href='#'>My Courses</a></span> </article>
=======
            <figure><a href='lecturer-courses.php'><img src="images/prof_img1.jpg" alt=""></a></figure>
            <span class="font1"><a href='lecturer-courses.php'>My Courses</a></span> </article>
>>>>>>> ec1741b888372dd91838754b277a87b41206628e
          <article class="cols">
            <figure><a href="leave-application-lecturer.php"><img src="images/prof_img4.jpg" alt=""></a></figure>
            <span class="font1"><a href="leave-application-lecturer.php">Apply for Leave</a></span> </article>
        </div>
      </div>
       <div class="pad_top2"> <a href="inc\logout.inc.php" class="button"><span><span>LOGOUT</span></span></a> </div>
    </section>
    <!-- content -->
    <?php include('inc/footer.inc.php'); ?>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>
