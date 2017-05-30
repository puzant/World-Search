<!DOCTYPE html>
<head>
	<title>results of countrylanguage</title>
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
echo "<th><u>CountryCode</u></th>";
echo "<th><u>Language</u></th>";
echo "<th><u>IsOfficial</u></th>";
echo "<th><u>Percentage</u></th>";

echo "</center>";
echo "</tr>";
echo "</thead>";

		if(isset($_POST['input'])) {     //check if the form is submitted or not
			$name = $_POST['input'];
			$name = mysqli_real_escape_string($conn,$_POST['input']);
$result = mysqli_query($conn, "SELECT CountryCode, Language, IsOfficial, Percentage FROM countrylanguage WHERE concat(CountryCode, Language, IsOfficial, Percentage) LIKE '%$name%' ");
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result)) {
		echo "<tr><td>" . $row['CountryCode'] . "</td><td>" . $row['Language'] . "</td><td>" . $row['IsOfficial'] . "</td><td>" . $row['Percentage'] . "</td></th>";
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
