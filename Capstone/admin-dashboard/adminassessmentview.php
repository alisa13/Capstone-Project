<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> SACWA </title>
  <!-- plugins:css -->
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

  <div class="container-scroller">
    <?php include_once('header.php'); ?>
  </div>
  <table class="container">
  <thead>
    <tr class="form-row">
      <th>ID&nbsp;&nbsp;&nbsp;</th>
      <th>Medicine Allergy</th>
      <th>Covid Infected?</th>
      <th>14 Days Quarantine</th>
      <th>Vaccinated&nbsp;&nbsp;&nbsp;</th>
      <th>Contact With Covid&nbsp;&nbsp;</th>
      <th>Cough?&nbsp;&nbsp;&nbsp;</th>
      <th>Fever?&nbsp;&nbsp;&nbsp;</th>
      <th>Loss of Smell</th>
      <th>Loss of Taste</th>
      <th>Tired?</th>
    </tr>
  </thead>
  <?php include_once('sidebar.php'); ?>
  <?php
$conn = mysqli_connect("localhost", "root", "", "registrations");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, medicine, infected, quarantine, vaccinated, persons, cough, fever, smell, taste, tired FROM response";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<td>" . $row["id"]. "</td><td>" . $row["medicine"]."</td><td>". $row["infected"] . "</td><td>"
. $row["quarantine"]. "<td>" . $row["vaccinated"] ."<td>" . $row["persons"] . "<td>" . $row["cough"] . "<td>" . $row["fever"] . "<td>" . $row["smell"] . "<td>" . $row["taste"] . "<td>" . $row["tired"] . "";
}
echo "</table>";
} else { echo "0 results"; }
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