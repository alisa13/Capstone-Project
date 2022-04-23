<!DOCTYPE html>
<?php require 'archive_query.php'?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary text-center">Archived Data's</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<a href="index.php" class="pull-right">Main Page</a>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>ID</th>
					<th>Fullname</th>
					<th>Username</th>
					<th>Email</th>
					<th>Date Archived</th>
				</tr>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					require 'conn.php';
					
					$query = mysqli_query($conn, "SELECT * FROM `archive`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $fetch['id']?></td>
					<td><?php echo $fetch['fullname']?></td>
					<td><?php echo $fetch['username']?></td>
					<td><?php echo $fetch['email']?></td>
					<td><?php echo $fetch['date_archived']?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>	
</html>