<?php
$case_id = $_POST['case_id'];
$case_name = $_POST['case_name'];
$description = $_POST['description'];
$date_update = $_POST['date_update'];


	$conn = new mysqli('localhost','root','','police');
	if($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("INSERT Into police_data (case_id,case_name,description,date_update) values(?,?,?,?)");
		$stmt->blind_param("ssi",desig,case_name,case_id,);
		$stmt->execute();
		echo "done........";
		$stmt->close();
		$conn->close();
	}
?>	