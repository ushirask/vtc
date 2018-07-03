<?php
   include('session.php');

   $myusername = $_SESSION['login_user'];
   $usertype = $myusername[0];
   if($usertype === "S" ){
					 header("location:profile.php");
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
        <div class="pad1 pad_top1">
     
       <div class="pad_top2"> <span><span><h3>Welcome <?php echo $_SESSION['login_user'] ?></h3></span></span></a> </div>
	   <br>
            <ul class="list1">
              <li><a href='#'>My courses</a></li>
              <li><a href="leaveapplication-lecturer.php">Apply for leave</a></li>
            </ul>
            
            <div class="pad_top2"> <a href="logout.php" class="button"><span><span>LOGOUT</span></span></a> </div>
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
