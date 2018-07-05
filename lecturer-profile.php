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
        <div class="pad1 pad_top1">

       <div class="pad_top2"> <span><span><h3>Welcome <?php echo $_SESSION['login_user'] ?></h3></span></span></a> </div>
	   <br>
            <ul class="list1">
              <li><a href='#'>My courses</a></li>
              <li><a href="leave-application-lecturer.php">Apply for leave</a></li>
            </ul>

            <div class="pad_top2"> <a href="inc\logout.inc.php" class="button"><span><span>LOGOUT</span></span></a> </div>
          </article>
        </div>
      </div>
    </section>
    <!-- content -->
    <?php include('inc/footer.inc.php'); ?>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>
