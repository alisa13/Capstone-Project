<?php
include 'database.php';
include 'config.php';

error_reporting(0);

session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
     <?php echo "<h1>Your Assessment Results " . $_SESSION['username'] . "</h1>"; ?>
      <table class="table table-bordered print">
        <thead>
          <tr>
            <th>ID No.</th>
            <th>Medicine Allergy</th>
            <th>Covid Infected</th>
            <th>14 Days Quarantine</th>
            <th>Are You Vaccinated</th>
            <th>Contact With Covid</th>
            <th>Cough</th>
            <th>Fever</th>
            <th>Loss of Smell</th>
            <th>Loss of Taste</th>
            <th>Tiredness</th>
          </tr>
        </thead>
        <tbody>
          <?php
          
          
          $user_qry="SELECT * from response WHERE id=".$_SESSION['id']." ;";
          $user_res=mysqli_query($con,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          <tr>
            <td><?php echo $_SESSION['id']; ?></td>
            <td><?php echo $user_data['medicine']; ?></td>
            <td><?php echo $user_data['infected']; ?></td>
            <td><?php echo $user_data['quarantine']; ?></td>
            <td><?php echo $user_data['vaccinated']; ?></td>
            <td><?php echo $user_data['persons']; ?></td>
            <td><?php echo $user_data['cough']; ?></td>
            <td><?php echo $user_data['fever']; ?></td>
            <td><?php echo $user_data['smell']; ?></td>
            <td><?php echo $user_data['taste']; ?></td>
            <td><?php echo $user_data['tired']; ?></td>
          </tr>
          
        </tbody>
      </table>

      <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
