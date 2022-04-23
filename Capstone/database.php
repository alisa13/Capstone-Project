<?php
$con=mysqli_connect('localhost', 'root', '', 'registrations');

if (mysqli_connect_errno()) {
	echo "Failed To Connect" .mysqli_connect_errno();
}
?>