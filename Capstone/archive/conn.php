<?php
	$conn = mysqli_connect("localhost", "root", "", "registrations");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>