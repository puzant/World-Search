<?php
include('user-config.php');
session_start();

$user_check = $_SESSION['useremail'];
$sql = mysqli_query($conn, "select * from data where email = '$user_check' ");
$row = mysqli_fetch_assoc($sql);
$login_session = $row['email'];


if(!isset($_SESSION['useremail'])) {
  header("location:login.php");
}
 ?>
