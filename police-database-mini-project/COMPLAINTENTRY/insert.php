
<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'police');

$cmp_id=$_POST['cmp_id'];
$cmp_name=$_POST['cmp_name'];
$case_no=$_POST['case_no'];
$Description=$_POST['Description'];
$date_reg=$_POST['date_reg'];
$police_handle=$_POST['police_handle'];


$s="select * from complaints where cmp_id='$cmp_id' && cmp_name='$cmp_name' && case_no='$case_no' && Description='$Description' && date_reg='$date_reg' && police_handle='$police_handle'";
$result=mysqli_query($con,$s);

$reg="insert into complaints(cmp_id,cmp_name,case_no,Description) values('$cmp_id','$cmp_name','$case_no','$Description','$date_reg','$police_handle')";

mysqli_query($con,$reg);

echo "successful";
//header('location:NGO_ThankYou.php') ;
?>