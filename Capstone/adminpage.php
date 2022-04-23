<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="style.css">
<title>Table with database</title>
</head>
<body>
   <!--  <nav class="nav">
        <a href="adminpage.php" class="active">View</a>
        <a href="#about">Add</a>
        <a href="adminsearch.php">Search</a>
        <a href="#experts">Archive</a>
    </nav> -->
<table class="table">
  <thead>
    <tr class="form-row">
      <th>ID </th>
      <th>Fullname </th>
      <th>Username </th>
      <th>Email </th>
    </tr>
  </thead>
<!--   <div class="container">
    <div class="col">
      ID
    </div>
    <div class="col">
      Username
    </div>
    <div class="col">
      Username
    </div>
    <div class="col">
       Email
    </div>
  </div>
 -->
<?php
$conn = mysqli_connect("localhost", "root", "", "registrations");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, fullname, username, email FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td> " . $row["fullname"]."</td><td>". $row["username"] . "</td><td>"
. $row["email"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
</body>
</html>