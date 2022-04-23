
<?php

$conn = mysqli_connect("localhost", "root", "", "registrations");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$id = $_POST["id"];
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email = $_POST["email"];


if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "UPDATE users set fullname='$fullname', username='$username', email='$email' where id='5'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$id."-".$fullname."-".$username."-".$email;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>