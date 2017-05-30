<?php
$servername = "localhost";
$username = "jad";
$password = "jad";
$dbname = "world";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
  die("connection failed" . $conn->connect_error);
}
#echo "hello";

?>
