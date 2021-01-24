
<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'police');

$prisoner_id=$_POST['prisoner_id'];
$prisoner_name=$_POST['prisoner_name'];
$case_no=$_POST['case_no'];
$date_arrest=$_POST['date_arrest'];
$date_release=$_POST['date_release'];



$s="select * from prison where prisoner_id='$prisoner_id' && prisoner_name='$prisoner_name' && case_no='$case_no' && date_arrest='$date_arrest' && date_release='$date_release'";
$result=mysqli_query($con,$s);

$reg="insert into prison(prisoner_id,prisoner_name,case_no,date_arrest) values('$prisoner_id','$prisoner_name','$case_no','$date_arrest','$date_release')";

mysqli_query($con,$reg);

//header('location:NGO_ThankYou.php') ;
?>