<!DOCTYPE html>
<html>
<head>
	<title>POLICE</title>
		<link rel="stylesheet" type="text/css" href="Admission.css">

	</head>
<body><center>
		
		<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "police";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, design, case_handle FROM police_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>POLICE ID</th><th>POLICE NAME</th><th>CASE NUMBER</th><th>CASE HANDLING</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["design"]. "</td><td>" . $row["case_handle"]. "</td></td>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</center>
</body>
</html>