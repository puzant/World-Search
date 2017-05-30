<!DOCTYPE html>

<head>
</head>

<body>

    <?php
$servername = "localhost";
$username = "jad";
$password = "jad";
$dbname= "world";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
</body>

</html>