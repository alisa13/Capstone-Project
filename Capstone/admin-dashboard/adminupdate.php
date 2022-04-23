<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> SACWA </title>
  <!-- plugins:css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="s.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
   <!--  <nav class="nav">
        <a href="adminpage.php" class="active">View</a>
        <a href="#about">Add</a>
        <a href="adminsearch.php">Search</a>
        <a href="#experts">Archive</a>
    </nav> -->
   <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    
    <?php include_once('header.php'); ?>
    </div>  
<table class="container">
  <thead>
    <tr class="form-row">
      <th>ID </th>
      <th>Fullname </th>
      <th>Username </th>
      <th>Email </th>
      <th>Due Date</th>
    </tr>
  </thead>
  <tbody>
      <tr>
      
    </tr>
  </tbody>

<?php include_once('sidebar.php'); ?>
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
include_once ('config.php');
if($conn->connect_error){
  die("Connection failed ".$conn->connect_error);
}

$sql = "SELECT * FROM users WHERE role = 'user'";

$result = $conn->query($sql);

if ($result->num_rows > 0){

$row = $result->fetch_assoc();

$id = $row["id"];
$fullname = $row["fullname"];
$username = $row["username"];
$email = $row["email"];
$due_date = $row["due_date"];

$sql = "SELECT id, fullname, username, email, due_date FROM users WHERE role = 'user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["fullname"]."</td><td>". $row["username"] . "</td><td>"
. $row["email"]. "</td><td>". "" . $row["due_date"]. "<form action='update.php' >
  <div>
    <button type ='submit' class = 'buttom'> Update </button>
  </div>
</form>" . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
;


} else {
  echo "Not Found";
}

$conn->close();
?>
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>
</table>
</body>
</html>