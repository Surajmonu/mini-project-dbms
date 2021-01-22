<?php
$c_id = $_POST['c_id'];
$c_name = $_POST['c_name'];
$case_no = $_POST['case_no'];
$date_committed = $_POST['date_committed'];



	$conn = new mysqli('localhost','root','','police');
	if($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("INSERT Into criminal (c_id,c_name,case_no,date_committed) values(?,?,?,?)");
		$stmt->blind_param("isisi",c_id,c_name,case_no);
		$stmt->execute();
		echo "done........";
		$stmt->close();
		$conn->close();
	}
?>	