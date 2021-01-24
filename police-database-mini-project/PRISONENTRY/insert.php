
<?php
// Report all errors
error_reporting(E_ALL);

session_start();

$conn=mysqli_connect('localhost','root','');

mysqli_select_db($conn,'police');


$prisoner_name=$_POST['prisoner_name'];
$case_no=$_POST['case_no'];
$date_arrest=$_POST['date_arrest'];
$date_release=$_POST['date_release'];



//$s="select * from prison where prisoner_id='$prisoner_id' && prisoner_name='$prisoner_name' && case_no='$case_no' && date_arrest='$date_arrest' && date_release='$date_release'";
//$result=mysqli_query($conn,$s);

$sql="insert into prison(prisoner_name,case_no,date_arrest,date_release) values('$prisoner_name','$case_no','$date_arrest','$date_release')";

echo "reg";
//print_r($reg);

if (mysqli_query($conn, $sql)) {
  $last_id = mysqli_insert_id($conn);
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>