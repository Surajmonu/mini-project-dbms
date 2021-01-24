
<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'police');

$c_name=$_POST['c_name'];
$case_no=$_POST['case_no'];
$date_committed=$_POST['date_committed'];


$s="select * from criminal where c_name='$c_name' && case_no='$case_no' && date_committed='$date_committed' ";
$result=mysqli_query($con,$s);

$reg="insert into criminal(c_name,case_no,date_committed) values($c_name','$case_no','$date_committed')";

mysqli_query($con,$reg);

//header('location:NGO_ThankYou.php') ;
?>