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

$sql = "SELECT prisoner_id, prisoner_name, case_no, date_arrest, date_release FROM  prison";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>PRISONER ID</th><th>PRISONER NAME</th><th>CASE NUMBER</th><th>DATE ARREST</th><th>DATE RELEASE</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["prisoner_id"]. "</td><td>" . $row["prisoner_name"]. "</td><td>" . $row["case_no"]. "</td><td>" . $row["date_arrest"]. "</td><td>" . $row["date_release"]. "</td></td>";
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