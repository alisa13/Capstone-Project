<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: Assessment.php");
}

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: Assessment.php");
  } else {
    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    

     <link rel="stylesheet" href="log.css">
    
  </head>
  <body>


  <p class="tip"></p>
  <div class="cont">
    <div class="form sign-in">
      <form action="" method="POST" class="login-email">
    <h2>Welcome</h2>
    <label>
      <span>Email</span>
      <input type="email" name="username" />
    </label>
    <label>
      <span>Password</span>
      <input type="password" name="password" />
    </label>
    <p class="forgot-pass">Forgot password?</p>
    <button type="button" class="submit">Sign In</button>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p></p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p></p>
      </div>
      <div class="img__btn">
        <span class="m--up">Create Account</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>REGISTER</h2>
      <label>
        <span>Full Name</span>
        <input type="text" name="fullname" />
      </label>
      <label>
        <span>Email</span>
        <input type="email" name="username" />
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="new-password" />
      </label>
      <label>
        <span>Retype Password</span>
        <input type="password" name="retype-new-password" />
      </label>
      <button type="button" class="submit">Create</button>
        <button type="button" class="submit" onclick=“location.href='home.php' value=“Go to google>Go back</button>
    </div>
  </div>
</div>



    <script type="text/javascript">
      document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});
    </script>
  </body>
</html>
</div>
</body>