<?php
   include('session.php');

   $myusername = $_SESSION['login_user'];
   $usertype = $myusername[0];
   if($usertype === "L" ){
					 header("location:lecturer-profile.php");
		 }else if($usertype === "A" ){
					 header("location:sectionalHead-profile.php");
		 }else if($usertype === "P" ){
					 header("location:principal-profile.php");
		 }
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
            <figure><a href="profile_courses.php"><img src="images/prof_img1.jpg" alt=""></a></figure>
            <span class="font1"><a href="profile_courses.php">My Courses</a></span> </article>
          <article class="cols marg_right1">
            <figure><a href="profile_exams.php"><img src="images/prof_img2.jpg" alt=""></a></figure>
            <span class="font1"><a href="profile_exams.php">Exam Results</a></span> </article>
          <article class="cols">
            <figure><a href="#"><img src="images/prof_img3.jpg" alt=""></a></figure>
            <span class="font1"><a href="#">Attendance</a></span> </article>
          <article class="cols">
            <figure><a href="leaveapplication.php"><img src="images/prof_img4.jpg" alt=""></a></figure>
            <span class="font1"><a href="leaveapplication.php">Apply for Leave</a></span> </article>
        </div>
      </div>
       <div class="pad_top2"> <a href="logout.php" class="button"><span><span>LOGOUT</span></span></a> </div>
    </section>
    <!-- content -->
    <?php include('inc/footer.inc.php'); ?>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>
