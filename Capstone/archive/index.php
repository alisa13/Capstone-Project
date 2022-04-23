<!DOCTYPE html>
<?php //require 'archive_query.php'?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary text-center">Archive Data</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button type="button" onclick="window.location.href='../admin-dashboard/adminupdate.php'" class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon"></span>Go Back</button>
		<a href="archive.php" class="pull-right">Archive</a>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>ID</th>
					<th>FullName</th>
					<th>Username</th>
					<th>Email</th>
					<th>Due Date</th>
				</tr>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					require 'conn.php';
					
					$query = mysqli_query($conn, "SELECT * FROM `users` WHERE role ='user'") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $fetch['id']?></td>
					<td><?php echo $fetch['fullname']?></td>
					<td><?php echo $fetch['username']?></td>
					<td><?php echo $fetch['email']?></td>
					<td><?php echo $fetch['due_date']?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="save_product.php">
					<div class="modal-header">
						<h3 class="modal-title">Add Product</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Product Code</label>
								<input type="text" name="product_code" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Product Name</label>
								<input type="text" name="product_name" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Description</label>
								<input type="text" name="description" class="form-control" required="required" />
							</div>
							<div class="form-group">
								<label>Due Date</label>
								<input type="date" name="due_date" class="form-control" required="required" />
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
						<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>	
</html>