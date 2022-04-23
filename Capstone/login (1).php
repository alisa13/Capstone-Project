<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> LOGIN AND SIGN-UP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="log.css">
    <!-- Bootstrap -->
  </head>
  <body>
  <p class="tip"></p>
  <div class="cont">
    <div class="form sign-in">
    <h2>Welcome</h2>
    <label>
      <span>Username</span>
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
      <form method="post" action="register.php">
      <?php include('errors.php'); ?>
      <label>
        <span>Full Name</span>
        <input type="text" name="fullname" value="<?php echo $fullname; ?>"/>
      </label>
      <label>
        <span>Username</span>
        <input type="text" name="username" value="<?php echo $username; ?>" />
      </label>
      <label>
        <span>Email</span>
        <input type="email" name="email" value="<?php echo $email; ?>" />
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password_1" />
      </label>
      <label>
        <span>Confirm Password</span>
        <input type="password" name="password_2" />
      </label>
      <button type="button" class="submit">Create</button>
    </div>
  </div>
</div>
  <div class="container">
  <div class="row">
    <div class="col text-center">
  <button class="submit" onclick="location.href='home.php';"/>GO BACK </button>
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