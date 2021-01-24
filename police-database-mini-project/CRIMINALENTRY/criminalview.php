<!DOCTYPE html>
<html>
<head>
	<title>CRIMINAL</title>
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

$sql = "SELECT c_id, c_name, case_no, date_committed FROM CRIMINAL";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>CRIMINAL ID</th><th>CRIMINAL NAME</th><th>CASE NUMBER</th><th>DATE COMMITTED</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["c_id"]. "</td><td>" . $row["c_name"]. "</td><td>" . $row["case_no"]. "</td><td>" . $row["date_committed"]. "</td></td>";
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