
<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'police');

$id=$_POST['id'];
$name=$_POST['name'];
$design=$_POST['design'];
$case_handle=$_POST['case_handle'];


$s="select * from police_data where id='$id' && name='$name' && design='$design' && case_handle='$case_handle' ";
$result=mysqli_query($con,$s);

$reg="insert into police_data(id,name,design,case_handle) values('$id','$name','$design','$case_handle')";

mysqli_query($con,$reg);

//header('location:NGO_ThankYou.php') ;
?>