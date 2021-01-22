<!DOCTYPE html>
<html>
<head>
	<title>case</title>
</head>
<body>
	<table>
		<tr>
			<th>c_id</th>
			<th>c_name</th>
			<th>case_no</th>
			<th>date_committed</th>
		</tr>
		<?php
			$conn = mysqli_connect("localhodt","root","","police");
			if ($conn-> connect_error) {
				die("connection failed:". $conn-> connect_error);
			} 
			$sql = "SELECT c_id, c_name,case_no,date_committed from criminal";
			$result = $conn-> query($sql);

			if ($result-> num_rows > 0) {
				while ($row = $result-> fetch_assoc()) {
					echo "<tr><td>".$row["c_id"]."<tr><td>".$row["c_name"]."<tr><td>".$row["case_no"]."<tr><td>".$row["date_committed"]."<tr><td>";
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