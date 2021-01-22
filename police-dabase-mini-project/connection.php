<?php
$host = "localhost"; /*Host name*/
$user = "root"; /*User*/
$password = "";/*Password*/
$dbname = "police";/*Databse name */

$con = mysql_connect($host, $user, $password, $dbname);//check connection
if (!$con) {
	die("Connection failed: ". mysql_connect_error());
}
?>