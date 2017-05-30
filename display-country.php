<?php
include('connect2.php') ;
?>

<!DOCTYPE html>
<head>
  <title>city results</title>
  <link href="style-table.css" rel="stylesheet">
  <link href="animate.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script>
  function validateform() {
      var x = document.forms["myform"]["input"].value;
      if (x == "") {
          alert("input must be filled out");
          return false;
      }
  }
  </script>
</head>

<body>
  <a href="search.php"><i class="fa fa-arrow-left fa-lg" aria-hidden="true" ></i></a>

  <form method="POST" action="result_of_country.php" name="myform" onsubmit="return validateform()">
<input type="text" name="input" placeholder="search.........">
<button  name="submit" type="submit">go</button>
</form>


<?php
echo '<div class="animated fadeInUp">';

echo "<div id='records'>";
echo "<table border = '0'>";

echo "<tr>";
echo "<th>Code</th>";
echo "<th>Name</th>";
echo "<th>Continent</th>";
echo "<th>Region</th>";
echo "<th>SurfaceArea</th>";
echo "<th>IndepYear</th>";
echo "<th>Population</th>";
echo "<th>LifeExpectancy</th>";
echo "<th>GNP</th>";
echo "<th>GovernmentForm</th>";
echo "</tr>";
echo "</div>";
echo '</div>';

$sql = "select * from country limit 45";
$result = $conn->query($sql);

if( $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row['Code']. "</td><td>" . $row['Name'] . "</td><td>" . $row['Continent'] . "</td><td>" . $row['Region'] .  "</td><td>" . $row['SurfaceArea'] .  "</td><td>". $row['IndepYear'] .  "</td><td>". $row['Population'] .  "</td><td>". $row['LifeExpectancy'] .  "</td><td>". $row['GNP'] .  "</td><td>". $row['GovernmentForm'] . "</td></tr>";
  }
} else {
  echo " 0 results";
}

echo '</table>';
$conn->close();
 ?>


 </body>
 </html>
