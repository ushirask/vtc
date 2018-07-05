<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Login</title>

<?php include('inc/header.inc.php'); ?>
<?php include('inc/login.inc.php'); ?>

<div class="body2">
  <div class="main">
    <!-- content -->
	<article class="col1">
		<form style="border:1px solid #ccc" method ='POST' >
		  <div class="container">
			 <h1 class="pad_bot1">Please log in to continue.</h1>
			<hr>
			<input type="text" placeholder="Enter Index Number" name="uname" required>

			<input type="password" placeholder="Enter Password" name="password" required>


			<div class="clearfix">
			  <button type="submit" class="signupbtn" name="login" >Log in</button>
			</div>
		  </div>
		</form>
	</article>
    <!-- content -->
    <?php include('inc/footer.inc.php'); ?>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>
