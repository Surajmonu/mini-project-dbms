
<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'police');

$case_id=$_POST['case_id'];
$case_name=$_POST['case_name'];
$description=$_POST['description'];
$date_update=$_POST['date_update'];


$s="select * from case_data where case_id='$case_id' && case_name='$case_name' && description='$description' && date_update='$date_update' ";
$result=mysqli_query($con,$s);

$reg="insert into case_data(case_id,case_name,description,date_update) values('$case_id','$case_name','$description','$date_update')";
	
mysqli_query($con,$reg);
echo "successful";

//header('location:NGO_ThankYou.php') ;
?>