<!DOCTYPE html>
<html>
<head>
	<title>case</title>
</head>
<body>
	<table>
		<tr>
			<th>cmp_id</th>
			<th>cmp_name</th>
			<th>case_no</th>
			<th>description</th>
			<th>date_reg</th>
			<th>police_handle</th>

		</tr>
		<?php
			$conn = mysqli_connect("localhodt","root","","police");
			if ($conn-> connect_error) {
				die("connection failed:". $conn-> connect_error);
			} 
			$sql = "SELECT cmp_id, cmp_name,case_no,description,date_reg,police_handle from complaints";
			$result = $conn-> query($sql);

			if ($result-> num_rows > 0) {
				while ($row = $result-> fetch_assoc()) {
					echo "<tr><td>".$row["cmp_id"]."<tr><td>".$row["cmp_name"]."<tr><td>".$row["case_no"]."<tr><td>".$row["descrption"]."<tr><td>"".$row["date_reg"]."<tr><td>"".$row["police_handle"]."<tr><td>";
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