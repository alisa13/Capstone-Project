<?php 

include 'config.php';

error_reporting(0);

session_start();

$result = mysqli_query($conn,"SELECT * FROM clinics");

?>

<?php
if (mysqli_num_rows($result) > 0) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clinics</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style type="text/css">
	.bs-example{
	margin: 20px;
	}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">Clinics List</h2>
</div>
<table class='table table-bordered table-striped'>
	<tr>
		<td>Clinic Name</td>
		<td>Clinic Type</td>
		<td>Clinic Description</td>
		<td>Clinic Address</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["clinic_name"]; ?></td>
<td><?php echo $row["clinic_type"]; ?></td>
<td><?php echo $row["clinic_description"]; ?></td>
<td><?php echo $row["clinic_address"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
</head>
<body>

</body>
</html>