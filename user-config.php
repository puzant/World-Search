<?php
$servername = "localhost";
$username = "jad";
$password = "jad";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
  die ("connection failed " . $conn->connect_error);
}
#echo "connected";

 ?>
