<?php
  
$servername = "localhost";
$username = "username";
$password = "password";
$database = "registrations";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}
  

if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

</body>
</html>