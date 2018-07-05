<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Contacts</title>
<?php include('inc/header.inc.php'); ?>
<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2>Contact Form</h2>
              <form id="ContactForm"  method ='POST' action="inc/contactdb.inc.php">
                <div>
                  <div  class="wrapper"> <strong>Name:</strong>
                    <div class="bg">
                      <input type="text" class="input" name="name" required>
                    </div>
                  </div>
                  <div  class="wrapper"> <strong>Email:</strong>
                    <div class="bg">
                      <input type="text" class="input" name="email" required>
                    </div>
                  </div>
                  <div  class="textarea_box"> <strong>Message:</strong>
                    <div class="bg">
                      <textarea name="message" cols="1" rows="1"></textarea>
                    </div>
                  </div>
                  <button name= type="submit" class="sendbtn" name="send" >Send</button> 
              </form>
            </div>
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
