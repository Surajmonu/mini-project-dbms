<?php
$cmp_id = $_POST['cmp_id'];
$cmp_name = $_POST['cmp_name'];
$case_no = $_POST['case_no'];
$description = $_POST['description'];
$date_reg = $_POST['date_reg'];
$police_handle = $_POST['police_handle'];



	$conn = new mysqli('localhost','root','','police');
	if($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("INSERT Into complaints (cmp_id,cmp_name,case_no,description,date_reg,police_handle) values(?,?,?,?,?,?)");
		$stmt->blind_param("isisi",cmp_id,cmp_name,case_no,description,police_handle);
		$stmt->execute();
		echo "done........";
		$stmt->close();
		$conn->close();
	}
?>	