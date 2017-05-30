<!DOCTYPE html>

<head>
    <title>results of city</title>
    <link href="display-results.css" rel="stylesheet">
    <link href="animate.css" rel="stylesheet">
</head>

<body>
    <div class="animated fadeIn">
        <?php
include('connect2.php');

echo "<center>";
echo "<table border = '3'>";
echo "<thead>";
echo "<tr>";
echo "<th><u>id</u></th>";
echo "<th><u>name</u></th>";
echo "<th><u>countrycode</u></th>";
echo "<th><u>district</u></th>";
echo "<th><u>population</u></th>";

echo "</center>";
echo "</tr>";
echo "</thead>";

		if(isset($_POST['input'])) {     //check if the form is submitted or not
			$name = $_POST['input'];
			$name = mysqli_real_escape_string($conn,$_POST['input']);
$result = mysqli_query($conn, "SELECT id, name, district, population, countrycode FROM city WHERE concat(id, name, district, population, countrycode) LIKE '%$name%' ");
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result)) {
		echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['countrycode'] . "</td><td>" . $row['district'] . "</td><td>" . $row['population'] . "</td></th>";
	}
  }  else {
	header( "Location:noresults.php" ); die;
 }
}
echo "</table>";
mysqli_close($conn);
?>
    </div>
</body>

</html>