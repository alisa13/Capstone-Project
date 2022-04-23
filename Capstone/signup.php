<?php 
include('../connection.php');
session_start();
if (isset($_SESSION['username'])) {
  header("Location: ../index.php");
}
if (isset($_POST['username'])) {
  global $conn;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $result = $conn->query("SELECT * FROM users WHERE email = '$username'");
  if ($result->num_rows > 0) {
    $r = mysqli_fetch_assoc($result);
    $hpw = $r['password'];
    $id = $r['id'];

    if(password_verify($password, $hpw)) {
      $_SESSION['username'] = $username;
      $conn->query("INSERT INTO user_logs SET users_id = $id, is_login = 1, created_at = NOW()");
      header('Location: ../index.php');
    } else {
      echo "<script>alert('Invalid Credentials!')</script>";
    }
  }
}
?>