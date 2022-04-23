<?php
$server='localhost';
$username='root';
$pass = "";
$database = "registrations";
$conn=mysqli_connect($server,$username,$pass, $database);
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
?> 