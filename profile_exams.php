<?php
   include('session.php');
?>
   
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
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2>Current Courses</h2>
            </div>
			<form style="border:1px solid #ccc" method ='POST' >
			<div class="container">
				<div class="clearfix">
				<button type="submit" class="signupbtn" name="s1"><Strong>Semester 1 </Strong></button><br>
				</div>
				<div class="clearfix">
				<button type="submit" class="signupbtn" name="s2"><Strong>Semester 2 </Strong></button><br>
				</div>
				<div class="clearfix">
				<button type="submit" class="signupbtn" name="s3"><Strong>Semester 3 </Strong></button><br>
				</div>
				<div class="clearfix">
				<button type="submit" class="signupbtn" name="s4"><Strong>Semester 4 </Strong></button><br>
				</div>
				<div class="clearfix">
				<button type="submit" class="signupbtn" name="s5" ><Strong>Semester 5 </Strong></button><br>
				</div>
				<div class="clearfix">
				<button type="submit" class="signupbtn" name="s6" ><Strong>Semester 6 </Strong></button><br>
				</div>
				</div>
           </form> 
			<?php
			$sem;
			if (isset($_POST['s1'])) {
				$sem= "s1";
			}
			if (isset($_POST['s2'])) {
				$sem= "s2";
			}
			if (isset($_POST['s3'])) {
				$sem= "s3";
			}
			if (isset($_POST['s4'])) {
				$sem= "s4";
			}
			if (isset($_POST['s5'])) {
				$sem= "s5";
			}
			if (isset($_POST['s6'])) {
				$sem= "s6";
			}
			if (isset($sem)){
					$user=$_SESSION['login_user'];
					$sql1="SELECT * from student_courses where studentid='$user'";
					$result1=mysqli_query($db,$sql1);
					echo '<table>';
					while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
							echo '<tr>';echo '<td>';
							echo $row1['courseid'];echo '</td>';
							echo '<td>';echo $row1[$sem];echo '</td>';
							echo '</tr>';
					}echo '</table>';
			}			
			?>
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