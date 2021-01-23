<!DOCTYPE html>
<html>
<head>
	<title>COMPLAINT</title>
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

$sql = "SELECT cmp_id, cmp_name, case_no, Description, date_reg, police_handle FROM complaints";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>COMPLAINT ID</th><th>COMPLAINT NAME</th><th>CASE NUMBER</th><th>DATE REGESTIRED</th><th>HANDLED BY</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["cmp_id"]. "</td><td>" . $row["cmp_name"]. "</td><td>" . $row["Description"]. "</td><td>" . $row["date_reg"]. "</td><td>" . $row["police_handle"]. "</td></tr>";
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