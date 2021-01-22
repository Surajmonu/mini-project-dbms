<!DOCTYPE html>
<html>
<head>
	<title>case</title>
</head>
<body>
	<table>
		<tr>
			<th>prisoner_id</th>
			<th>prisoner_name</th>
			<th>case_no</th>
			<th>date_arrest</th>
			<th>date_release</th>
		</tr>
		<?php
			$conn = mysqli_connect("localhodt","root","","police");
			if ($conn-> connect_error) {
				die("connection failed:". $conn-> connect_error);
			} 
			$sql = "SELECT prisoner_id, prisoner_name,case_no,date_arrest,date_release from prison";
			$result = $conn-> query($sql);

			if ($result-> num_rows > 0) {
				while ($row = $result-> fetch_assoc()) {
					echo "<tr><td>".$row["prisoner_id"]."<tr><td>".$row["prisoner_name"]."<tr><td>".$row["case_no"]."<tr><td>".$row["date_arrest"]."<tr><td>".$row["date_release"]."<tr><td>";
				}
				echo "</table>";
			}
			else {
				echo "0 result";
			}
			$conn-> close();
		?>
	</table>
</body>
</html>