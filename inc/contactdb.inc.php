<?php
$conn = mysqli_connect('localhost', 'root', '', 'vtc');
$indexnumber=$_SESSION['login_user'];
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$message=mysqli_real_escape_string($conn,$_POST['message']);

$sql="INSERT INTO contact_us (name, email, message) VALUES ('$name', '$email', '$message');";
mysqli_query($conn, $sql);
header("Location: ../contacts.php");
