<!DOCTYPE html>
<head>
	<title>results of country</title>
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
echo "<th><u>Code</u></th>";
echo "<th><u>Name</u></th>";
echo "<th><u>Continent</u></th>";
echo "<th><u>Region</u></th>";
echo "<th><u>SurfaceArea</u></th>";
echo "<th><u>IndepYear</u></th>";
echo "<th><u>Population</u></th>";
echo "<th><u>LifeExpectancy</u></th>";
echo "<th><u>GNP</u></th>";
echo "<th><u>GovernmentForm</u></th>";
echo "</center>";
echo "</tr>";
echo "</thead>";

		if(isset($_POST['input'])) {     //check if the form is submitted or not
			$name = $_POST['input'];
			$name = mysqli_real_escape_string($conn,$_POST['input']);
$result = mysqli_query($conn, "SELECT Code, Name, Continent, Region, SurfaceArea, IndepYear, Population, LifeExpectancy, GNP, GovernmentForm FROM country WHERE concat( Code, Name, Continent, Region, SurfaceArea, IndepYear, Population, LifeExpectancy, GNP, GovernmentForm) LIKE '%$name%' ");
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result)) {
		echo "<tr><td>" . $row['Code'] . "</td><td>" . $row['Name'] . "</td><td>" . $row['Continent'] . "</td><td>" . $row['Region'] . "</td><td>" . $row['SurfaceArea'] .  $row['IndepYear']  . $row['Population'] . "</td><td>". $row['LifeExpectancy'] . "</td><td>". $row['GNP'] . "</td><td>". $row['GovernmentForm'] . "</td></th>";
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
