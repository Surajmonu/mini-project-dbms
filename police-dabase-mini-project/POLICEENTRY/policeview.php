<!DOCTYPE html>
<html>
<head>
	<title>case</title>
</head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>desig</th>
			<th>case_handle</th>
		</tr>
		<?php
			$conn = mysqli_connect("localhodt","root","","police");
			if ($conn-> connect_error) {
				die("connection failed:". $conn-> connect_error);
			} 
			$sql = "SELECT id, name,desig,case_handle from police_data";
			$result = $conn-> query($sql);

			if ($result-> num_rows > 0) {
				while ($row = $result-> fetch_assoc()) {
					echo "<tr><td>".$row["id"]."<tr><td>".$row["name"]."<tr><td>".$row["desig"]."<tr><td>".$row["case_handle"]."<tr><td>";
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