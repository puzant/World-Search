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

  <form method="POST" action="result_of_city.php" name="myform" onsubmit="return validateform()">
<input type="text" name="input" placeholder="search.........">
<button  name="submit" type="submit">go</button>
</form>


<?php
echo '<div class="animated fadeInUp">';

echo "<div id='records'>";
echo "<table border = '0'>";

echo "<tr>";
echo "<th>ID</th>";
echo "<th>name</th>";
echo "<th>countrycode</th>";
echo "<th>district</th>";
echo "<th>population</th>";
echo "</tr>";

echo "</div>";
echo '</div>';

$sql =("select * from city limit 45");
$result = $conn->query($sql);
if( $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row['ID']. "</td><td>" . $row['Name']. "</td><td>" . $row['CountryCode'] . "</td><td>" . $row['District'] . "</td><td>" . $row['Population'] . "</td></tr>";
  }
} else {
  echo " 0 results";
}

echo '</table>';
$conn->close();
 ?>


 </body>
 </html>
