<?php
$id = $_POST['id'];
$name = $_POST['name'];
$design = $_POST['design'];
$case_handle = $_POST['case_handle'];

	$conn = new mysqli('localhost','root','','police');
	if($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("INSERT Into police_data (id,name,design,case_handle,) values(?,?,?,?)");
		$stmt->blind_param("ssii",desig,name,id,case_handle);
		$stmt->execute();
		echo "done........";
		$stmt->close();
		$conn->close();
	}
?>	