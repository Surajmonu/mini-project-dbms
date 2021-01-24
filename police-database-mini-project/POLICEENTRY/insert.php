	
<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'police');

$name=$_POST['name'];
$design=$_POST['design'];
$case_handle=$_POST['case_handle'];


$s="select * from police_data where name='$name' && design='$design' && case_handle='$case_handle' ";
$result=mysqli_query($con,$s);

$reg="insert into police_data(name,design,case_handle) values('$name','$design','$case_handle')";

mysqli_query($con,$reg);

?>