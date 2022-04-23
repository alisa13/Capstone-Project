<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

   <?php
      $servername='localhost';
      $username="root";
      $password="";

      $conn = mysqli_connect($servername, $username, $password);

      if(! $conn ) {
         die('Could not connect: ' . mysqli_error($conn));
      }
      echo 'Connected successfully<br />';
      $retval = mysqli_select_db( $conn, 'users' );
      if(! $retval ) {
         die('Could not select database: ' . mysqli_error($conn));
      }
      echo "Database users selected successfully\n";
      mysqli_close($conn);

      $sql = "SELECT id, fullname, username, email FROM users";
      $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
   ?>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
<div class="container">
    <form method="POST">
        <input type="text"name="search">
        <input type="submit" name="Search">
</div>
</body>
</html> -->

<!-- <?php
include 'connect_test_db.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> -->
<!-- <?php
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, fullname, username, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> -->
<html>
<head>
<title>Admin Searchbar</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="style.css">">
<style>

</style>
</head>
 
<body>
    <div class="container">
    <h3><u>PHP MySQL search database and display results</u></h3>
    <br/><br/>
    <form class="form-horizontal" action="#" method="post">
    <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-4" for="email"><b>Search Employee Information:</b>:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="search" placeholder="search here">
            </div>
            <div class="col-sm-2">
              <button type="submit" name="save" class="btn btn-success btn-sm">Submit</button>
            </div>
        </div>
        <div class="form-group">
            <span class="error" style="color:red;">* <?php echo $searchErr;?></span>
        </div>
         
    </div>
    </form>
    <br/><br/>
    <h3><u>Search Result</u></h3><br/>
    <div class="table-responsive">          
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Username</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
                <?php
                 if(!$users)
                 {
                    echo '<tr>No data found</tr>';
                 }
                 else{
                    foreach($employee_details as $key=>$value)
                    {
                        ?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $value['id'];?></td>
                        <td><?php echo $value['fullname'];?></td>
                        <td><?php echo $value['username'];?></td>
                        <td><?php echo $value['email'];?></td>
                    </tr>
                        <?php
                    }
                     
                 }
                ?>
         </tbody>
      </table>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>