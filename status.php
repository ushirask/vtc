
   
<!DOCTYPE html>
<html lang="en">
<head>
<title>My Courses</title>
<?php include('inc/header.inc.php'); ?>
<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="box1">
            <div class="pad_left1">
              <h2><?php 
							session_start();
							echo $_SESSION['error'] ; ?></h2>
            </div>           
			<div class="pad_top2"> <a href="javascript:history.go(-1)" class="button"><span><span>Go Back</span></span></a> </div>
      </div>
    </section>
    <!-- content -->
    <?php include('inc/footer.inc.php'); ?>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>