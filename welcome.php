<?php
include('session.php');
 ?>

<!DOCTYPE html>
<head>
  <title>user profile</title>
<link href="user-profile.css" rel="stylesheet">
</head>


  <h1>welcome<?php echo '&nbsp' .  $_SESSION['first_name'];?></h1>
  <?php /*
  <h1><?php echo "your password is " . $_SESSION['userpassword'];?></h1>
  <p>your information will be displayed</p>
  <p><?php echo 'your last name is'.' ' . $_SESSION['last_name'];?></p>
  <p><?php echo 'your gender is'. ' ' . $_SESSION['gender'];?></p>
  */?>
  <h2><a href="logout.php">log out</a></h2>
