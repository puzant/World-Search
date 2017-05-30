<?php
include('user-config.php');
session_start();

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


if(isset($email) && isset($password)) {          //check if it is set or not
  $sql = "select * from data where email = '$email' and password = '$password' ";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  if($count == 1) {
    $_SESSION['useremail'] = $email;
    $_SESSION['userpassword'] = $password;
    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['last_name'] = $row['last_name'];
    $_SESSION['gender'] = $row['gender'];

    #print_r($_SESSION);          show the values stored in the sessions
    header("location: welcome.php");
  } else {
    echo 'username or passwrod is incorrect';
  }
}
 ?>
