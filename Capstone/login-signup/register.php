<?php 
include('../connection.php');
if (isset($_POST['username'])) {
  global $conn;
  $user = $_POST['username'];
  $pw = password_hash($_POST['retype-new-password'], PASSWORD_BCRYPT);

  if ($_POST['new-password'] !=$_POST['retype-new-password']) {
    echo "<script>alert('Password Not Match!')</script>";
  } else {
      $result = $conn->query("INSERT INTO users SET email = '$user', password = '$pw'");
      if ($result) {
      echo "<script>alert('Success!')</script>";
      header('Location: login.php');
      } else {
      echo "<script>alert('Fail!')</script>";
      }
  }
}


?>