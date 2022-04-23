<?php
	date_default_timezone_set("Etc/GMT+8");
	
	require_once 'conn.php';
	
	$query = mysqli_query($conn, "SELECT * FROM `users` WHERE role = 'user'");
	$date = date("Y-m-d");
	while($fetch = mysqli_fetch_array($query)){
		if(strtotime($fetch['due_date']) < strtotime($date)){
			mysqli_query($conn, "INSERT INTO `archive` VALUES('$fetch[id]', '$fetch[fullname]', '$fetch[username]', '$fetch[email]', '$fetch[due_date]')") or die(mysqli_error($conn));
			mysqli_query($conn, "DELETE FROM `users` WHERE `id` = '$fetch[id]'") or die(mysqli_error($conn));
		}
	}
	
?>