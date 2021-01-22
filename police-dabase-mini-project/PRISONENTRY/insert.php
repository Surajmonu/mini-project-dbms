<?php
$prisoner_id = $_POST['prisoner_id'];
$prisoner_name = $_POST['prisoner_name'];
$case_no = $_POST['case_no'];
$date_arrest = $_POST['date_arrest'];
$date_release = $_POST['date_release'];

	$conn = new mysqli('localhost','root','','police');
	if($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("INSERT Into prison (prisoner_id,prisoner_name,case_no,date_arrest,date_release) values(?,?,?,?,?)");
		$stmt->blind_param("siii",$prisoner_name,prisoner_id,case_no);
		$stmt->execute();
		echo "done........";
		$stmt->close();
		$conn->close();
	}

/*if (!empty($prisoner_id) || !empty($prisoner_name) || !empty($case_no) || !empty($date_arrest) || !empty($date_release)) 
{
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "police";

	//create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

	if (mysqli_connect_error()) {
	die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else
	{
	$SELECT = "SELECT email FROM register Where prisoner_id = ? Limit 1";
	$INSERT = "INSERT Into prison (prisoner_id,prisoner_name,case_no,date_arrest,date_release) values(?,?,?,?,?)";

	$stmt = $conn->prepare($SELECT);
	$stmt->blind_param("s", $prisoner_id);
	$stmt->execute();
	$stmt->blind_result($prisoner_id);
	$stmt->store_result();
	$rnum = $stmt->num_rows;

	if ($rnum==0) {
	$stmt->close();

	$stmt = $conn->prepare($INSERT);
	$stmt->blint_param("ssssii",$prisoner_id,$prisoner_name,$case_no,$date_arrest,$date_release);
	$stmt->execute();
	echo "new record inserted successfully";
	}
	else
	{
	echo "already exist";
	}
	$stmt->close();
	$conn->close();

	}
	} else {
	echo "All fields are required";
	die();
}*/
?>