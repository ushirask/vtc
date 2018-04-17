<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Approve Leave Application</title>
<?php include('inc/header.inc.php'); 
?>
<div class="body2">
  <div class="main">
    <!-- content -->
		<form style="border:1px solid #ccc" method ='POST' action="inc/approveleavelecturer.inc.php">
		  <div class="container">
			 <h2 class="pad_bot1">Leave Applications List</h2>
			 <ul>
			 	<?php
			 	include('inc/leaveapplicationlist.inc.php');
			 	?>
			 </ul>
		  </div>
		</form>
		
    <!-- content -->
    <?php include('inc/footer.inc.php'); ?>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>