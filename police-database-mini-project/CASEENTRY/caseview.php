<!DOCTYPE html>
<html>
<head>
	<title>CASE</title>
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

$sql = "SELECT case_id, case_name, description, date_update FROM case_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>CASE ID</th><th>CASE NAME</th><th>CASE NUMBER</th><th>DATE COMMITTED</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["case_id"]. "</td><td>" . $row["case_name"]. "</td><td>" . $row["description"]. "</td><td>" . $row["date_update"]. "</td></td>";
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