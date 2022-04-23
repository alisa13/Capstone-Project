<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
  $user_id = $_SESSION['id'];
  $medicine = $_POST['medicine'];
  $infected = $_POST['infected'];
  $quarantine = $_POST['quarantine'];
  $vaccinated = $_POST['vaccinated'];
  $persons = $_POST['persons'];
  $cough = $_POST['cough'];
  $fever = $_POST['fever'];
  $smell = $_POST['smell'];
  $taste = $_POST['taste'];
  $tired = $_POST['tired'];
      $sql = "INSERT INTO response (id, medicine, infected, quarantine, vaccinated, persons, cough, fever, smell, taste, tired)
          VALUES ('$user_id','$medicine', '$infected', '$quarantine', '$vaccinated', '$persons', '$cough', '$fever', '$smell', '$taste', '$tired')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>alert('Assessment Complete Now Returning To Assessment Page')</script>";
      }
}
?>

<DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <form action="" method="POST" class="login-email">
            <p class="response-text" style="font-size: 2rem; font-weight: 800;"></p>
      <div class="input-group">
        Do You Have Medicine Allergy?:
        <input type="text" placeholder="Yes or No" name="medicine" value="<?php echo $medicine; ?>" required>
      </div>
      <div class="input-group">
        Are you Covid infected?:
        <input type="text" placeholder="Yes or No" name="infected" value="<?php echo $infected; ?>" required> 
      </div>
      <div class="input-group">
        14 Days Quarantine?:
        <input type="text" placeholder="Yes or No" name="quarantine" value="<?php echo $quarantine; ?>" required> 
      </div>
      <div class="input-group">
        Are you vaccinated?:
        <input type="text" placeholder="Yes or No" name="vaccinated" value="<?php echo $vaccinated; ?>" required> 
      </div>
      <div class="input-group">
        Are you in contact with a person who has Covid?:
        <input type="text" placeholder="Yes or No" name="persons" value="<?php echo $persons; ?>" required>
      </div>
      <br>
      <div class="input-group">
        Do you have cough?:
        <input type="text" placeholder="Yes or No" name="cough" value="<?php echo $cough; ?>" required> 
      </div>
      <div class="input-group">
        Do you have Fever?:
        <input type="text" placeholder="Yes or No" name="fever" value="<?php echo $fever; ?>" required> 
      </div>
      <div class="input-group">
        Do you experience loss of smell?:
        <input type="text" placeholder="Yes or No" name="smell" value="<?php echo $smell; ?>" required>
      </div>
      <div class="input-group">
        Do you experience loss of taste?:
        <input type="text" placeholder="Yes or No" name="taste" value="<?php echo $taste; ?>" required>
      </div>
      <div class="input-group">
        Do you feel tired?:
        <input type="text" placeholder="Yes or No" name="tired" value="<?php echo $tired; ?>" required>
      </div>

      <div class="input-group">
        <button name="submit" class="btn">Submit</button>
      </div>

 <p class="login-register-text">Return <a href="home.php"> Home</a>.</p>
 <p class="login-register-text">Print <a href="user_data_print.php"> Results</a>.</p>
 <p class="login-register-text">View <a href="view_clinics.php"> Nearest Clinics</a>.</p>
 <p class="login-register-text">Sign-out? <a href="logout.php">Logout</a>.</p>
</div>
</form>

</body>
</html>

 