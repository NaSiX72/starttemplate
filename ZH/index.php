<!DOCTYPE html>
<html>
<head>
	<meta charset iso-8859-2>
	<style>
	tr:nth-child(1) {
		background-color:lightgreen;
	}

	tr:nth-child(even) {
		background-color:grey;
	}
	<style/>
<head/>

<body>

<?php
echo "<h1>N�v: Csibi N�ndor, Neptun k�d: OW6LXN<h1/>";

$servername = "Inf2Lab3";
$username = "root";
$password = "password";

$conn = new mysqli($servername, $username, $password);

$url_components = parse_url($url);
parse_str($url_components['query'], $params);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

&sql = "select k.nev, k.telszam 
from kollega k
where k.szoba is '$params'
group by k.nev;"
&res = mysqli_query($conn, $sql);

echo "<table>";
while($row = mysql_fetch_array($result)) {
	echo "<tr><td>" . htmlspecialchars($row['N�v']) . "</td><td>" . htmlspecialchars($row['Mell�k']) . "</td></tr>";
}
echo "</table>";

&conn->close();
?>

</body>
</html>